<?php
/**
 * STUDIO BLOCKSY CHILD Theme Functions
 * 
 * Blocksy child theme with Studio Design System administration capabilities.
 * Extends Blocksy's features with Studio branding and admin tools.
 * 
 * @package StudioBlocksyChild
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue Parent and Child Theme Styles
 */
function studio_blocksy_child_scripts() {
    // Enqueue parent theme styles
    wp_enqueue_style(
        'blocksy-parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->parent()->get('Version')
    );
    
    // Enqueue child theme styles
    wp_enqueue_style(
        'studio-blocksy-child-style',
        get_stylesheet_uri(),
        array('blocksy-parent-style'),
        wp_get_theme()->get('Version')
    );
    
    // Google Fonts - Montserrat (Studio Brand Font)
    wp_enqueue_style(
        'studio-blocksy-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap',
        array(),
        null
    );
    
    // Studio admin scripts
    wp_enqueue_script(
        'studio-blocksy-admin',
        get_stylesheet_directory_uri() . '/js/studio-admin.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('studio-blocksy-admin', 'studioBlocksy', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('studio_blocksy_nonce'),
        'themeUri' => get_stylesheet_directory_uri(),
    ));
}
add_action('wp_enqueue_scripts', 'studio_blocksy_child_scripts');

/**
 * Add Studio Admin Menu (extends parent theme)
 */
function studio_blocksy_admin_menu() {
    add_menu_page(
        __('Studio Admin', 'studio-blocksy-child'),
        __('Studio Admin', 'studio-blocksy-child'),
        'manage_options',
        'studio-blocksy-admin',
        'studio_blocksy_admin_page',
        'dashicons-admin-customizer',
        30
    );
    
    add_submenu_page(
        'studio-blocksy-admin',
        __('Components', 'studio-blocksy-child'),
        __('Components', 'studio-blocksy-child'),
        'manage_options',
        'studio-blocksy-components',
        'studio_blocksy_components_page'
    );
    
    add_submenu_page(
        'studio-blocksy-admin',
        __('Variables', 'studio-blocksy-child'),
        __('Variables', 'studio-blocksy-child'),
        'manage_options',
        'studio-blocksy-variables',
        'studio_blocksy_variables_page'
    );
    
    add_submenu_page(
        'studio-blocksy-admin',
        __('Blocksy Integration', 'studio-blocksy-child'),
        __('Blocksy Integration', 'studio-blocksy-child'),
        'manage_options',
        'studio-blocksy-integration',
        'studio_blocksy_integration_page'
    );
}
add_action('admin_menu', 'studio_blocksy_admin_menu');

/**
 * Studio Admin Page Callback
 */
function studio_blocksy_admin_page() {
    ?>
    <div class="wrap studio-admin-wrap">
        <h1 class="studio-brand-title"><?php _e('Studio Design System', 'studio-blocksy-child'); ?></h1>
        
        <div class="studio-dev-notice">
            <?php _e('🚀 Studio Blocksy Child Theme Active - Combining Blocksy Power with Studio Design', 'studio-blocksy-child'); ?>
        </div>
        
        <div class="studio-admin-card">
            <h2><?php _e('Studio + Blocksy Integration', 'studio-blocksy-child'); ?></h2>
            <p><?php _e('This child theme extends Blocksy with Studio Design System administration capabilities. You get all of Blocksy\'s features plus Studio branding and admin tools.', 'studio-blocksy-child'); ?></p>
            
            <div class="studio-flex studio-gap-3 studio-mt-4">
                <a href="<?php echo admin_url('admin.php?page=studio-blocksy-components'); ?>" class="studio-admin-button">
                    <?php _e('Manage Components', 'studio-blocksy-child'); ?>
                </a>
                <a href="<?php echo admin_url('admin.php?page=studio-blocksy-variables'); ?>" class="studio-admin-button">
                    <?php _e('Manage Variables', 'studio-blocksy-child'); ?>
                </a>
                <a href="<?php echo admin_url('themes.php?page=ct-options'); ?>" class="studio-admin-button">
                    <?php _e('Blocksy Options', 'studio-blocksy-child'); ?>
                </a>
            </div>
        </div>
        
        <div class="studio-admin-card">
            <h2><?php _e('Theme Features', 'studio-blocksy-child'); ?></h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: var(--studio-space-4);">
                <div>
                    <h3 class="studio-brand-accent"><?php _e('Blocksy Features', 'studio-blocksy-child'); ?></h3>
                    <ul style="color: var(--studio-text-supporting);">
                        <li><?php _e('Advanced Header Builder', 'studio-blocksy-child'); ?></li>
                        <li><?php _e('Custom Post Types', 'studio-blocksy-child'); ?></li>
                        <li><?php _e('WooCommerce Integration', 'studio-blocksy-child'); ?></li>
                        <li><?php _e('Performance Optimization', 'studio-blocksy-child'); ?></li>
                    </ul>
                </div>
                <div>
                    <h3 class="studio-brand-accent"><?php _e('Studio Features', 'studio-blocksy-child'); ?></h3>
                    <ul style="color: var(--studio-text-supporting);">
                        <li><?php _e('Studio Brand Colors', 'studio-blocksy-child'); ?></li>
                        <li><?php _e('Semantic CSS Variables', 'studio-blocksy-child'); ?></li>
                        <li><?php _e('Component Management', 'studio-blocksy-child'); ?></li>
                        <li><?php _e('Admin Interface Tools', 'studio-blocksy-child'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Studio Components Page Callback
 */
function studio_blocksy_components_page() {
    ?>
    <div class="wrap studio-admin-wrap">
        <h1><?php _e('Component Management', 'studio-blocksy-child'); ?></h1>
        
        <div class="studio-admin-card">
            <h2><?php _e('Design System Components', 'studio-blocksy-child'); ?></h2>
            <p><?php _e('Manage Studio design system components within the Blocksy framework. This interface will be enhanced when the Studio plugin is installed.', 'studio-blocksy-child'); ?></p>
            
            <div class="studio-dev-notice">
                <?php _e('📋 Component editing interface with Blocksy integration will be implemented here', 'studio-blocksy-child'); ?>
            </div>
            
            <div class="studio-flex studio-gap-3 studio-mt-4">
                <a href="<?php echo admin_url('themes.php?page=ct-options'); ?>" class="studio-admin-button">
                    <?php _e('Blocksy Options', 'studio-blocksy-child'); ?>
                </a>
                <a href="<?php echo admin_url('customize.php'); ?>" class="studio-admin-button">
                    <?php _e('Customizer', 'studio-blocksy-child'); ?>
                </a>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Studio Variables Page Callback
 */
function studio_blocksy_variables_page() {
    ?>
    <div class="wrap studio-admin-wrap">
        <h1><?php _e('Variable Management', 'studio-blocksy-child'); ?></h1>
        
        <div class="studio-admin-card">
            <h2><?php _e('CSS Variables & Design Tokens', 'studio-blocksy-child'); ?></h2>
            <p><?php _e('Manage Studio CSS variables and design tokens. These integrate with Blocksy\'s customizer and extend the theme\'s capabilities.', 'studio-blocksy-child'); ?></p>
            
            <div class="studio-dev-notice">
                <?php _e('🎨 Variable editing interface with Blocksy customizer integration will be implemented here', 'studio-blocksy-child'); ?>
            </div>
            
            <div class="studio-flex studio-gap-3 studio-mt-4">
                <a href="<?php echo admin_url('customize.php'); ?>" class="studio-admin-button">
                    <?php _e('Theme Customizer', 'studio-blocksy-child'); ?>
                </a>
                <a href="<?php echo admin_url('themes.php?page=ct-options'); ?>" class="studio-admin-button">
                    <?php _e('Blocksy Settings', 'studio-blocksy-child'); ?>
                </a>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Studio Blocksy Integration Page Callback
 */
function studio_blocksy_integration_page() {
    ?>
    <div class="wrap studio-admin-wrap">
        <h1><?php _e('Blocksy Integration', 'studio-blocksy-child'); ?></h1>
        
        <div class="studio-admin-card">
            <h2><?php _e('Studio + Blocksy Integration Status', 'studio-blocksy-child'); ?></h2>
            <p><?php _e('Monitor how Studio Design System integrates with Blocksy features and settings.', 'studio-blocksy-child'); ?></p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: var(--studio-space-4); margin-top: var(--studio-space-4);">
                <div class="studio-admin-card" style="background: var(--studio-bg-controls);">
                    <h3><?php _e('Color Integration', 'studio-blocksy-child'); ?></h3>
                    <p style="color: var(--studio-text-supporting);"><?php _e('Studio colors override Blocksy palette', 'studio-blocksy-child'); ?></p>
                    <div style="display: flex; gap: var(--studio-space-2); margin-top: var(--studio-space-3);">
                        <div style="width: 30px; height: 30px; background: var(--studio-primary-500); border-radius: var(--studio-radius);"></div>
                        <div style="width: 30px; height: 30px; background: var(--studio-secondary-500); border-radius: var(--studio-radius);"></div>
                    </div>
                </div>
                
                <div class="studio-admin-card" style="background: var(--studio-bg-controls);">
                    <h3><?php _e('Typography Integration', 'studio-blocksy-child'); ?></h3>
                    <p style="color: var(--studio-text-supporting);"><?php _e('Montserrat font applied to Blocksy elements', 'studio-blocksy-child'); ?></p>
                    <p style="font-family: var(--studio-font-family); font-weight: 600; margin-top: var(--studio-space-2);">Sample Text</p>
                </div>
                
                <div class="studio-admin-card" style="background: var(--studio-bg-controls);">
                    <h3><?php _e('Variable System', 'studio-blocksy-child'); ?></h3>
                    <p style="color: var(--studio-text-supporting);"><?php _e('45 Studio variables integrated with Blocksy', 'studio-blocksy-child'); ?></p>
                    <code style="background: var(--studio-bg-input); padding: var(--studio-space-1); border-radius: var(--studio-radius-sm); font-size: var(--studio-text-metadata);">--studio-primary-500</code>
                </div>
            </div>
        </div>
        
        <div class="studio-admin-card">
            <h2><?php _e('Quick Actions', 'studio-blocksy-child'); ?></h2>
            <div class="studio-flex studio-gap-3 studio-flex-wrap">
                <a href="<?php echo admin_url('themes.php?page=ct-options&tab=general'); ?>" class="studio-admin-button">
                    <?php _e('Blocksy General Settings', 'studio-blocksy-child'); ?>
                </a>
                <a href="<?php echo admin_url('themes.php?page=ct-options&tab=header'); ?>" class="studio-admin-button">
                    <?php _e('Header Builder', 'studio-blocksy-child'); ?>
                </a>
                <a href="<?php echo admin_url('themes.php?page=ct-options&tab=footer'); ?>" class="studio-admin-button">
                    <?php _e('Footer Builder', 'studio-blocksy-child'); ?>
                </a>
                <a href="<?php echo admin_url('customize.php'); ?>" class="studio-admin-button">
                    <?php _e('Live Customizer', 'studio-blocksy-child'); ?>
                </a>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Customize Blocksy Options
 */
function studio_blocksy_child_customize_blocksy() {
    // Override Blocksy color palette with Studio colors
    add_filter('blocksy:customizer:options', function($options) {
        // Set Studio colors as default palette
        if (isset($options['general_tab']['general_section']['colorPalette'])) {
            $options['general_tab']['general_section']['colorPalette']['value'] = array(
                array('color' => '#276860'), // Studio Teal
                array('color' => '#709933'), // Studio Green
                array('color' => '#f8f8f8'), // Light Background
                array('color' => '#262626'), // Dark Background
                array('color' => '#ffffff'), // Pure White
                array('color' => '#000000'), // Pure Black
                array('color' => '#e8e8e8'), // Light Gray
                array('color' => '#737373'), // Medium Gray
            );
        }
        
        return $options;
    });
}
add_action('init', 'studio_blocksy_child_customize_blocksy');

/**
 * Add Studio Body Classes to Blocksy
 */
function studio_blocksy_body_classes($classes) {
    // Add Studio theme class
    $classes[] = 'studio-blocksy-theme';
    
    // Add admin context class
    if (is_admin()) {
        $classes[] = 'studio-admin-context';
    }
    
    // Add Studio branding class
    $classes[] = 'studio-branded';
    
    return $classes;
}
add_filter('body_class', 'studio_blocksy_body_classes');

/**
 * Admin Enqueue Scripts and Styles
 */
function studio_blocksy_admin_scripts($hook) {
    // Load on Studio admin pages
    if (strpos($hook, 'studio-blocksy') !== false) {
        wp_enqueue_style(
            'studio-blocksy-admin-style',
            get_stylesheet_directory_uri() . '/admin/admin-style.css',
            array(),
            wp_get_theme()->get('Version')
        );
        
        wp_enqueue_script(
            'studio-blocksy-admin-script',
            get_stylesheet_directory_uri() . '/admin/admin-script.js',
            array('jquery'),
            wp_get_theme()->get('Version'),
            true
        );
    }
}
add_action('admin_enqueue_scripts', 'studio_blocksy_admin_scripts');

/**
 * Add Studio Customizer Options
 */
function studio_blocksy_customize_register($wp_customize) {
    // Studio Settings Section
    $wp_customize->add_section('studio_blocksy_settings', array(
        'title'    => __('Studio Settings', 'studio-blocksy-child'),
        'priority' => 25, // Place before Blocksy sections
    ));
    
    // Studio Brand Primary Color
    $wp_customize->add_setting('studio_brand_primary', array(
        'default'           => '#276860',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'studio_brand_primary',
        array(
            'label'       => __('Studio Primary Color (Teal)', 'studio-blocksy-child'),
            'section'     => 'studio_blocksy_settings',
            'description' => __('Main Studio brand color that integrates with Blocksy', 'studio-blocksy-child'),
        )
    ));
    
    // Studio Brand Secondary Color
    $wp_customize->add_setting('studio_brand_secondary', array(
        'default'           => '#709933',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'studio_brand_secondary',
        array(
            'label'       => __('Studio Secondary Color (Green)', 'studio-blocksy-child'),
            'section'     => 'studio_blocksy_settings',
            'description' => __('Secondary Studio brand color for gradients and accents', 'studio-blocksy-child'),
        )
    ));
    
    // Studio Typography Toggle
    $wp_customize->add_setting('studio_typography_override', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('studio_typography_override', array(
        'label'       => __('Use Studio Typography (Montserrat)', 'studio-blocksy-child'),
        'section'     => 'studio_blocksy_settings',
        'type'        => 'checkbox',
        'description' => __('Override Blocksy typography with Studio font system', 'studio-blocksy-child'),
    ));
}
add_action('customize_register', 'studio_blocksy_customize_register');

/**
 * Output Custom CSS for Customizer Options
 */
function studio_blocksy_custom_css() {
    $primary_color = get_theme_mod('studio_brand_primary', '#276860');
    $secondary_color = get_theme_mod('studio_brand_secondary', '#709933');
    $typography_override = get_theme_mod('studio_typography_override', true);
    
    ?>
    <style type="text/css" id="studio-blocksy-custom-css">
        :root {
            --studio-primary-500: <?php echo esc_attr($primary_color); ?>;
            --studio-secondary-500: <?php echo esc_attr($secondary_color); ?>;
            --theme-palette-color-1: <?php echo esc_attr($primary_color); ?>;
            --theme-palette-color-2: <?php echo esc_attr($secondary_color); ?>;
        }
        
        <?php if ($typography_override): ?>
        body, 
        h1, h2, h3, h4, h5, h6,
        .ct-header [data-id="menu"] > ul > li > a,
        .ct-button,
        .wp-block-button__link {
            font-family: 'Montserrat', system-ui, sans-serif !important;
        }
        <?php endif; ?>
        
        /* Apply Studio colors to Blocksy elements */
        .ct-button,
        .wp-block-button__link,
        .ct-link-button {
            background-color: <?php echo esc_attr($primary_color); ?>;
            border-color: <?php echo esc_attr($primary_color); ?>;
        }
        
        .ct-button:hover,
        .wp-block-button__link:hover {
            background-color: <?php echo esc_attr($primary_color); ?>dd;
        }
        
        /* Studio gradient backgrounds */
        .studio-gradient-bg,
        .studio-brand-title {
            background: linear-gradient(135deg, <?php echo esc_attr($primary_color); ?>, <?php echo esc_attr($secondary_color); ?>);
        }
    </style>
    <?php
}
add_action('wp_head', 'studio_blocksy_custom_css');

/**
 * Child Theme Activation Hook
 */
function studio_blocksy_child_activation() {
    // Set default options for Studio integration
    if (!get_option('studio_blocksy_activated')) {
        update_option('studio_blocksy_activated', true);
        
        // Set Studio colors in Blocksy options if they exist
        if (function_exists('get_theme_mod')) {
            set_theme_mod('studio_brand_primary', '#276860');
            set_theme_mod('studio_brand_secondary', '#709933');
            set_theme_mod('studio_typography_override', true);
        }
        
        // Create Studio admin pages if they don't exist
        $pages = array(
            'Studio Blocksy Dashboard' => 'Studio Design System integrated with Blocksy theme capabilities.',
            'Component Library' => 'Browse and manage design system components within Blocksy framework.',
            'Variable Editor' => 'Edit CSS variables and design tokens with Blocksy integration.'
        );
        
        foreach ($pages as $title => $content) {
            if (!get_page_by_title($title)) {
                wp_insert_post(array(
                    'post_title'   => $title,
                    'post_content' => $content,
                    'post_status'  => 'publish',
                    'post_type'    => 'page',
                ));
            }
        }
    }
}
add_action('after_switch_theme', 'studio_blocksy_child_activation');

/**
 * Remove Theme Version Meta Tag (keep Blocksy's)
 */
function studio_blocksy_version_meta() {
    echo '<meta name="studio-blocksy-child-version" content="1.0.0">' . "\n";
}
add_action('wp_head', 'studio_blocksy_version_meta');

/**
 * Extend Blocksy's custom post types with Studio features
 */
function studio_blocksy_extend_post_types() {
    // Add Studio metadata to existing post types
    if (post_type_exists('ct_content_block')) {
        add_post_type_support('ct_content_block', 'studio-design-system');
    }
}
add_action('init', 'studio_blocksy_extend_post_types', 20);

?>