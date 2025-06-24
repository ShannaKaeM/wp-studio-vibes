# PHP Filters Integration Guide

## Core Principle
The Studio uses WordPress filters and hooks to inject design tokens into the theme system. We NEVER override theme.json directly - instead, we work with WordPress's native systems.

## Key Integration Points

### 1. Theme.json Data Filter
Modify theme data without overwriting files:

```php
add_filter('wp_theme_json_data_theme', function($theme_json) {
    $data = $theme_json->get_data();
    $studio_tokens = get_option('studio_design_tokens');
    
    // Map color tokens
    if (isset($data['settings']['color']['palette'])) {
        foreach ($data['settings']['color']['palette'] as &$color) {
            $token_key = 'color-' . $color['slug'];
            if (isset($studio_tokens[$token_key])) {
                $color['color'] = $studio_tokens[$token_key];
            }
        }
    }
    
    // Map typography sizes
    if (isset($data['settings']['typography']['fontSizes'])) {
        foreach ($data['settings']['typography']['fontSizes'] as &$size) {
            $token_key = 'font-size-' . $size['slug'];
            if (isset($studio_tokens[$token_key])) {
                $size['size'] = $studio_tokens[$token_key];
            }
        }
    }
    
    // Map spacing scale
    if (isset($data['settings']['spacing']['spacingSizes'])) {
        foreach ($data['settings']['spacing']['spacingSizes'] as &$space) {
            $token_key = 'spacing-' . $space['slug'];
            if (isset($studio_tokens[$token_key])) {
                $space['size'] = $studio_tokens[$token_key];
            }
        }
    }
    
    return $theme_json;
});
```

### 2. Block Style Registration
Register custom block styles dynamically:

```php
add_action('init', function() {
    $custom_styles = get_option('studio_custom_styles', []);
    
    foreach ($custom_styles as $block_type => $styles) {
        foreach ($styles as $style) {
            register_block_style($block_type, [
                'name' => $style['name'],
                'label' => $style['label'],
                'inline_style' => $style['css']
            ]);
        }
    }
});
```

### 3. Block Editor Assets
Add utility classes and custom scripts:

```php
add_action('enqueue_block_editor_assets', function() {
    // Enqueue utility classes CSS
    $utility_file = wp_upload_dir()['baseurl'] . '/studio-utilities/utilities.css';
    wp_enqueue_style('studio-utilities', $utility_file);
    
    // Add custom block variations
    wp_add_inline_script(
        'wp-blocks',
        'wp.domReady(function() {
            // Add scope classes to Group block
            wp.blocks.registerBlockVariation("core/group", {
                name: "card",
                title: "Card",
                attributes: { className: "card" }
            });
            
            wp.blocks.registerBlockVariation("core/group", {
                name: "hero",
                title: "Hero Section",
                attributes: { className: "hero" }
            });
        });'
    );
});
```

### 4. Block Rendering Filter
Apply scopes and modifiers dynamically:

```php
add_filter('render_block', function($block_content, $block) {
    // Apply scope modifiers
    if ($block['blockName'] === 'core/group' && isset($block['attrs']['className'])) {
        $classes = explode(' ', $block['attrs']['className']);
        
        // Check for scope modifiers like 'holiday', 'property', etc.
        $scopes = ['holiday', 'property', 'luxury', 'minimal'];
        foreach ($scopes as $scope) {
            if (in_array($scope, $classes)) {
                // Add scope class to all child elements
                $block_content = str_replace(
                    'class="',
                    'class="' . $scope . '-context ',
                    $block_content
                );
            }
        }
    }
    
    return $block_content;
}, 10, 2);
```

### 5. Custom CSS Properties
Inject CSS custom properties into head:

```php
add_action('wp_head', function() {
    $studio_tokens = get_option('studio_design_tokens');
    
    if (!empty($studio_tokens)) {
        echo '<style id="studio-custom-properties">:root {';
        foreach ($studio_tokens as $key => $value) {
            echo '--studio-' . $key . ': ' . $value . ';';
        }
        echo '}</style>';
    }
});
```

### 6. GenerateBlocks Integration
Enhance GB with design tokens:

```php
add_filter('generateblocks_css_output', function($css) {
    $studio_tokens = get_option('studio_design_tokens');
    
    // Replace GB color values with Studio tokens
    foreach ($studio_tokens as $key => $value) {
        if (strpos($key, 'color-') === 0) {
            $gb_var = '--gb-' . str_replace('color-', '', $key);
            $css = str_replace($gb_var, '--studio-' . $key, $css);
        }
    }
    
    return $css;
});
```

## Benefits of This Approach

1. **Native WordPress Integration**: Works with theme hierarchy
2. **No CSS Conflicts**: WordPress handles specificity
3. **Clean Separation**: Design tokens separate from implementation
4. **Theme Agnostic**: Works with any WordPress theme
5. **Future Proof**: Uses official WordPress APIs
6. **No !important**: Proper cascade management

## Best Practices

1. Always use filters, never direct file modification
2. Store tokens in WordPress options API
3. Use transients for performance when appropriate
4. Namespace all custom properties
5. Document filter priorities for other developers
6. Test with multiple themes for compatibility
