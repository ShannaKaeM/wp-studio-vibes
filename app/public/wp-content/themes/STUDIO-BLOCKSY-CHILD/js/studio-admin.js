/**
 * Studio Blocksy Child Theme JavaScript
 * Extends Blocksy functionality with Studio design system features
 */

(function($) {
    'use strict';

    /**
     * Initialize Studio + Blocksy Integration
     */
    function initStudioBlocksy() {
        // Theme toggle functionality (if not handled by Blocksy)
        initThemeToggle();
        
        // Studio admin enhancements
        initAdminEnhancements();
        
        // Integration monitoring
        initIntegrationMonitoring();
        
        // Console notification
        console.log('🎨 Studio Blocksy Child Theme Loaded');
        console.log('Parent: Blocksy | Child: Studio Design System');
    }

    /**
     * Theme Toggle (Light/Dark Mode)
     */
    function initThemeToggle() {
        const themeToggles = document.querySelectorAll('.studio-theme-toggle');
        
        if (themeToggles.length === 0) return;
        
        const currentTheme = localStorage.getItem('studio-blocksy-theme') || 'light';
        
        // Set initial theme
        document.documentElement.setAttribute('data-theme', currentTheme);
        
        // Update toggle icons
        function updateToggleIcons(theme) {
            themeToggles.forEach(toggle => {
                const icon = toggle.querySelector('.theme-icon');
                if (icon) {
                    icon.textContent = theme === 'dark' ? '☀️' : '🌙';
                }
                toggle.setAttribute('aria-label', 
                    theme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode'
                );
            });
        }
        
        updateToggleIcons(currentTheme);
        
        // Add click listeners
        themeToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const currentTheme = document.documentElement.getAttribute('data-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                
                document.documentElement.setAttribute('data-theme', newTheme);
                localStorage.setItem('studio-blocksy-theme', newTheme);
                updateToggleIcons(newTheme);
                
                // Trigger custom event for other scripts
                window.dispatchEvent(new CustomEvent('studioThemeChange', {
                    detail: { theme: newTheme }
                }));
            });
        });
    }

    /**
     * Admin Interface Enhancements
     */
    function initAdminEnhancements() {
        // Add hover effects to admin cards
        $('.studio-admin-card').hover(
            function() {
                $(this).css('transform', 'translateY(-2px)');
            },
            function() {
                $(this).css('transform', 'translateY(0)');
            }
        );
        
        // Add loading states to admin buttons
        $('.studio-admin-button').on('click', function() {
            if ($(this).attr('href') && $(this).attr('href').indexOf('admin.php') !== -1) {
                const originalText = $(this).text();
                $(this).text('Loading...').prop('disabled', true);
                
                // Reset after 2 seconds if page hasn't changed
                setTimeout(() => {
                    $(this).text(originalText).prop('disabled', false);
                }, 2000);
            }
        });
        
        // Auto-expand admin notices
        $('.studio-dev-notice').each(function() {
            $(this).css('animation', 'slideInDown 0.5s ease-out');
        });
    }

    /**
     * Integration Monitoring
     */
    function initIntegrationMonitoring() {
        // Check if we're on the integration page
        if (!window.location.href.includes('studio-blocksy-integration')) return;
        
        // Monitor CSS variable availability
        const testElement = document.createElement('div');
        testElement.style.display = 'none';
        document.body.appendChild(testElement);
        
        const checks = {
            primaryColor: getComputedStyle(testElement).getPropertyValue('--studio-primary-500'),
            secondaryColor: getComputedStyle(testElement).getPropertyValue('--studio-secondary-500'),
            studioFont: getComputedStyle(testElement).getPropertyValue('--studio-font-family'),
            themeColor: getComputedStyle(testElement).getPropertyValue('--theme-palette-color-1')
        };
        
        document.body.removeChild(testElement);
        
        // Display integration status
        displayIntegrationStatus(checks);
    }

    /**
     * Display Integration Status
     */
    function displayIntegrationStatus(checks) {
        const statusContainer = $('.integration-status');
        if (statusContainer.length === 0) return;
        
        const statusItems = [
            {
                name: 'Studio Primary Color',
                status: checks.primaryColor.trim() !== '',
                value: checks.primaryColor.trim()
            },
            {
                name: 'Studio Secondary Color', 
                status: checks.secondaryColor.trim() !== '',
                value: checks.secondaryColor.trim()
            },
            {
                name: 'Studio Font Family',
                status: checks.studioFont.includes('Montserrat'),
                value: checks.studioFont.trim()
            },
            {
                name: 'Blocksy Palette Override',
                status: checks.themeColor.trim() !== '',
                value: checks.themeColor.trim()
            }
        ];
        
        statusItems.forEach(item => {
            const statusHtml = `
                <div class="status-item" style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                    <span>${item.name}:</span>
                    <span style="color: ${item.status ? 'var(--studio-primary-500)' : '#dc3545'};">
                        ${item.status ? '✓ Active' : '✗ Inactive'}
                    </span>
                </div>
            `;
            statusContainer.append(statusHtml);
        });
    }

    /**
     * Utility Functions
     */
    const StudioBlocksy = {
        // Get current theme
        getCurrentTheme: function() {
            return document.documentElement.getAttribute('data-theme') || 'light';
        },
        
        // Switch theme
        switchTheme: function(theme) {
            if (theme !== 'light' && theme !== 'dark') return;
            
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('studio-blocksy-theme', theme);
            
            window.dispatchEvent(new CustomEvent('studioThemeChange', {
                detail: { theme: theme }
            }));
        },
        
        // Check if Studio variables are loaded
        hasStudioVariables: function() {
            const testEl = document.createElement('div');
            testEl.style.display = 'none';
            document.body.appendChild(testEl);
            
            const hasVars = getComputedStyle(testEl).getPropertyValue('--studio-primary-500').trim() !== '';
            document.body.removeChild(testEl);
            
            return hasVars;
        },
        
        // Get Blocksy theme data
        getBlocksyData: function() {
            return window.ctBlocksyData || null;
        }
    };
    
    // Make utility functions globally available
    window.StudioBlocksy = StudioBlocksy;

    /**
     * Add CSS Animations
     */
    function addStudioAnimations() {
        const css = `
            @keyframes slideInDown {
                from {
                    transform: translateY(-20px);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
            
            .studio-admin-card {
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }
            
            .studio-admin-card:hover {
                box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
            }
            
            .studio-admin-button {
                transition: all 0.2s ease;
            }
            
            .studio-fade-in {
                animation: slideInDown 0.5s ease-out;
            }
        `;
        
        const styleSheet = document.createElement('style');
        styleSheet.type = 'text/css';
        styleSheet.innerText = css;
        document.head.appendChild(styleSheet);
    }

    /**
     * Initialize on Document Ready
     */
    $(document).ready(function() {
        // Add Studio animations
        addStudioAnimations();
        
        // Initialize Studio + Blocksy integration
        initStudioBlocksy();
        
        // Add fade-in class to admin cards
        $('.studio-admin-card').addClass('studio-fade-in');
    });

    /**
     * Initialize on Window Load (for complete integration check)
     */
    $(window).on('load', function() {
        // Final integration verification
        if (window.StudioBlocksy && window.StudioBlocksy.hasStudioVariables()) {
            console.log('✓ Studio variables successfully integrated with Blocksy');
        } else {
            console.warn('⚠ Studio variables may not be fully loaded');
        }
        
        // Check Blocksy availability
        if (window.ctBlocksyData) {
            console.log('✓ Blocksy parent theme data available');
        } else {
            console.warn('⚠ Blocksy parent theme data not detected');
        }
    });

})(jQuery);