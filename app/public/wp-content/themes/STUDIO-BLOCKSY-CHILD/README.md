# STUDIO BLOCKSY CHILD WordPress Theme

**Version**: 1.0.0  
**Parent Theme**: Blocksy  
**Author**: Studio Design Team  
**WordPress Compatibility**: 6.0+  
**PHP Compatibility**: 8.0+

## Overview

The **STUDIO BLOCKSY CHILD** theme extends the powerful Blocksy theme with Studio Design System administration capabilities. It combines Blocksy's advanced features with Studio branding, semantic CSS variables, and design system management tools.

## Features

### 🎨 **Studio + Blocksy Integration**
- Complete Studio brand color system integrated with Blocksy palette
- Studio colors override Blocksy's default theme colors
- Semantic CSS variables (45 variables across 8 categories)
- Studio typography (Montserrat) applied to all Blocksy elements

### 🏗️ **Blocksy Features Extended**
- All Blocksy theme capabilities preserved
- Header Builder with Studio branding
- Footer Builder with Studio integration
- WooCommerce compatibility with Studio styling
- Performance optimizations maintained

### ⚙️ **Enhanced Admin Tools**
- Studio admin menu pages
- Blocksy integration monitoring
- Component management interface (ready for plugin)
- Variable management with Blocksy customizer integration
- Quick access to Blocksy settings

### 🚀 **Best of Both Worlds**
- Blocksy's powerful theme framework
- Studio's design system administration
- Seamless integration between both systems
- Professional Studio branding throughout

## File Structure

```
STUDIO-BLOCKSY-CHILD/
├── style.css              # Child theme styles with Studio integration
├── functions.php          # Blocksy extension with Studio features
└── README.md              # This documentation file
```

## Key Integrations

### **Color System Integration**
```css
/* Studio colors override Blocksy palette */
--theme-palette-color-1: rgb(39, 104, 96);     /* Studio Teal */
--theme-palette-color-2: rgb(112, 153, 51);    /* Studio Green */

/* Studio variables available throughout */
--studio-primary-500: rgb(39, 104, 96);
--studio-secondary-500: rgb(112, 153, 51);
```

### **Typography Integration**
```css
/* Montserrat applied to all Blocksy elements */
body, h1, h2, h3, h4, h5, h6,
.ct-header [data-id="menu"] > ul > li > a,
.ct-button {
    font-family: 'Montserrat', system-ui, sans-serif !important;
}
```

### **Component Styling**
```css
/* Blocksy buttons with Studio styling */
.ct-button, .wp-block-button__link {
    background-color: var(--studio-primary-500);
    border-color: var(--studio-primary-500);
}

.ct-button:hover {
    background-color: var(--studio-primary-600);
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(39, 104, 96, 0.3);
}
```

## Admin Interface

### **Studio Admin Menu**
- **Studio Admin** - Main dashboard with Blocksy integration status
- **Components** - Component management with Blocksy compatibility
- **Variables** - Variable editing with customizer integration
- **Blocksy Integration** - Monitor Studio + Blocksy integration

### **Customizer Integration**
- **Studio Settings Section** - Added to WordPress Customizer
- **Primary Color Control** - Studio teal color picker
- **Secondary Color Control** - Studio green color picker
- **Typography Override** - Toggle Studio font system

### **Quick Actions**
Direct links to:
- Blocksy General Settings
- Header Builder
- Footer Builder
- Live Customizer
- Theme Options

## Installation

1. **Ensure Blocksy is installed** - This child theme requires Blocksy as parent
2. Upload `STUDIO-BLOCKSY-CHILD` folder to `/wp-content/themes/`
3. Activate the theme in **Appearance → Themes**
4. Configure Studio settings in **Appearance → Customize → Studio Settings**
5. Access Studio admin via **Studio Admin** menu

## Theme Activation

When activated, the child theme automatically:
- Inherits all Blocksy functionality
- Applies Studio color palette to Blocksy
- Creates Studio admin pages
- Sets up customizer integration
- Configures Studio typography system

## Blocksy Compatibility

### **Preserved Features**
- Header Builder with Studio branding applied
- Footer Builder with Studio integration
- Custom Post Types extended with Studio metadata
- WooCommerce styling enhanced with Studio colors
- Performance optimizations maintained
- All Blocksy customizer options available

### **Enhanced Features**
- Color palette overridden with Studio colors
- Typography enhanced with Montserrat font
- Buttons and links styled with Studio branding
- Admin interface extended with Studio tools

## Development

### **Child Theme Benefits**
- **Safe Updates**: Blocksy updates won't affect Studio customizations
- **Full Inheritance**: All Blocksy features automatically available
- **Easy Maintenance**: Separate Studio code from parent theme
- **Flexible Testing**: Can switch between themes easily

### **Customization Workflow**
1. **Blocksy Settings**: Use Blocksy's theme options for layout/structure
2. **Studio Settings**: Use Studio customizer section for branding
3. **CSS Overrides**: Add custom styles to child theme's style.css
4. **Function Extensions**: Add custom functionality to functions.php

### **Integration Monitoring**
The **Blocksy Integration** admin page shows:
- Color integration status
- Typography application
- Variable system status
- Quick access to all relevant settings

## Comparison with Standalone Theme

| Feature | Standalone Studio Theme | Studio Blocksy Child |
|---------|------------------------|---------------------|
| **Setup Complexity** | Minimal | Requires parent theme |
| **Features** | Studio-focused | Blocksy + Studio |
| **Customization** | Full control | Extends Blocksy |
| **Performance** | Lightweight | Blocksy performance |
| **Updates** | Manual | Automatic (Blocksy) |
| **Learning Curve** | Simple | Requires Blocksy knowledge |

## Use Cases

### **Choose Studio Blocksy Child When:**
- You want Blocksy's advanced features
- You need header/footer builders
- You plan to use WooCommerce
- You want professional theme support
- You need complex layout capabilities

### **Choose Standalone Studio Theme When:**
- You want minimal, focused functionality
- You prefer complete control
- You don't need advanced theme features
- You want fastest possible performance
- You're primarily focused on admin interfaces

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (inherits Blocksy's responsive design)

## License

GPL v2 or later - https://www.gnu.org/licenses/gpl-2.0.html  
(Inherits Blocksy's licensing terms)

## Changelog

### Version 1.0.0
- Initial release
- Complete Blocksy integration
- Studio color system override
- Typography integration
- Admin interface extension
- Customizer integration

## Support

- **Blocksy Documentation**: [Blocksy Docs](https://creativethemes.com/blocksy/docs/)
- **Studio Integration**: Custom implementation specific to this child theme
- **WordPress Standards**: Follows all WordPress coding standards

---

**Built for Studio Design System + Blocksy Integration**  
*Combining Blocksy's power with Studio's design system administration*