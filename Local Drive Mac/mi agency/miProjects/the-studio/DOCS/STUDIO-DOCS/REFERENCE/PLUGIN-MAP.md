# Complete Design System Hierarchy & Plugin Tabs

## 1. Foundation (Building Blocks)
Raw values with no design decisions - the atoms of the system:

### Colors: Brand Palette Management
**Client/Brand Hierarchy Structure:**
- **Client Level**: Client1, Client2, etc. (for agencies managing multiple clients)
- **Brand Level**: Within each client - Brand1 (Regular), Brand2 (Holiday), Brand3 (Special Events), etc.
- **Palette Structure**: Each brand can have multiple colors (not just primary/secondary)
  - Example: Regular Brand = Pink, Orange, Green, Purple, Blue
  - Example: Holiday Brand = Red, Orange, Green, Purple, Blue

**Key Features:**
- User can define custom palette names for workflow (while maintaining core naming behind scenes)
- Brands define their own neutral and base colors (some brands use brand colors for backgrounds)
- Future: Theme switching and dark mode support
- Integration with AI parsing for Guten Styles front-end connections and theme updating.

**Foundation Variables Source:** `DOCS/STUDIO-DOCS/01-FOUNDATION/Variables-01-Colors.md`

### Typography: Font Families & Base Settings
**Core Elements:**
- Font family stacks (sans, serif, mono, display, handwriting)
- Base font size (16px default)
- Foundational typography tokens

**Foundation Variables Source:** `DOCS/STUDIO-DOCS/01-FOUNDATION/Variables-02-Typography.md`

### **NOT IMPLEMENTING NOW** (Future phases):
- Spacing: Base unit (4px), scale multiplier
- Borders: Available styles (solid, dashed, etc.)
- Shadows: Shadow definitions
- Effects: Transitions, animations

## 2. Theme Settings (Prep Work)
Apply foundation to create theme-specific tokens:

### Color Settings: Semantic Mapping
Map brand colors → semantic roles (primary, secondary, accent, neutral, base)
- User selects from available brand palette colors for each semantic role
- Maintains flexibility for brand-specific background colors

### Typography Settings: Base Configuration
Set base text sizes, base text colors, base line heights, base font stacks (all defaults)

### **NOT IMPLEMENTING NOW** (Future phases):
- Spacing Settings: Define scale (xs, sm, md, lg, xl)
- Border Settings: Thickness scale, radius scale
- Shadow Settings: Elevation scale

## 3. Design Presets (Project-Wide Decisions)
Scalable systems and variations:

### Typography Presets: Font Scale Systems - May also create presets for line height margins etc.. we will see. 
- Default, Title Pop, Compact scale systems
- Proportional scaling for different contexts

### Color Presets: Typography Color Scales
- Color scales specifically for typography usage
- More color preset types in future phases

### **NOT IMPLEMENTING NOW** (Future phases):
- Spacing Presets: Dense, Default, Comfortable
- Component Presets: Button sizes, card styles, etc.

## 4. Component Styles (Generic Building Blocks)
Core semantic components used everywhere:

### Text Styles: Semantic Typography
- .pretitle.title, .subtitle, .description, .body, (using presets) for testing just do these for now
- Compositions that combine font scales with colors and weights etc. use all possible modifiers like transform, text decoration, font weight, line height, letter spacing, etc. set to none if not applickable. 

### **NOT IMPLEMENTING NOW** (Future phases):
- Containers: .wrapper, .container
- Interactive: .button, .link
- Media: .image, .icon
- Layout: .grid, .flex

## 5. Scopes (Contextual Modifications)
First-level contexts that modify components:

- Layout Scopes:
- **Card**: Scales down text, adjusts spacing
- **Hero**: Scales up text, dramatic spacing
- **Sidebar**: Compact layout, smaller text
- **Modal**: Focused context, specific shadows
- **Form**: Input-friendly spacing and sizing

## 6. Variants (Highest Specificity)
Second-level specific implementations:

### Component Variants:
- **Card Variants**: .card-holiday, .card-property, .card-featured
- **Hero Variants**: .hero-landing, .hero-product
- **Button Variants**: .button-cta, .button-ghost
- **Product-Specific**: Custom implementations

---

## Updated Plugin Tab Structure

```
Studio Plugin Tabs (Left Sidebar)
├── 1. Foundation
│   ├── Colors (Client/Brand palette management)
│   └── Typography (Font families & base settings)
├── 2. Theme Settings
│   ├── Color Settings (Semantic mapping from brand palettes)
│   └── Typography Settings (Base sizes, colors, line heights)
├── 3. Design Presets
│   ├── Typography Presets (Font scale systems)
│   └── Color Presets (Typography color scales)
├── 4. Component Styles
│   └── Text Styles (.pretitle, .title, .subtitle, .description, .body, for testing.)
├── 5. Scopes - NOT IMPLEMENTING NOW -but can modify the tabs to add this in the future.
│   ├── Layout Scopes (card, hero, sidebar, modal, form)
│   └── Scope Preview
└── 6. Variants - NOT IMPLEMENTING NOW -but can modify the tabs to add this in the future.
    └── Component Variants (Future implementation)
```

---

## Minimal MVP for Typography Testing

### Phase 1: Foundation Setup

#### 1. Foundation → Colors (Client/Brand Management)
```javascript
// Client/Brand hierarchy
clients: {
  client1: {
    name: "Main Client", // User customizable
    brands: {
      brand1: {
        name: "Regular", // User customizable
        colors: {
          color1: '#FF6B9D', // Pink
          color2: '#FF8E3C', // Orange  
          color3: '#4ECDC4', // Green
          color4: '#9B59B6', // Purple
          color5: '#3498DB', // Blue
          neutral: '#F8F9FA',
          base: '#FFFFFF'
        }
      },
      brand2: {
        name: "Holiday", // User customizable
        colors: {
          color1: '#E74C3C', // Red
          color2: '#FF8E3C', // Orange
          color3: '#4ECDC4', // Green
          color4: '#9B59B6', // Purple
          color5: '#3498DB', // Blue
          neutral: '#2C3E50',
          base: '#34495E'
        }
      }
    }
  }
}
```

#### 2. Foundation → Typography
```javascript
// Font families from Variables-02-Typography.md
fontFamilies: {
  sans: 'system-ui, sans-serif',
  serif: 'Charter, Bitstream Charter, Sitka Text, Cambria, serif',
  mono: 'Dank Mono, Operator Mono, Inconsolata, Fira Mono, ui-monospace, SF Mono, Monaco, monospace',
  display: 'Avenir, Montserrat, Corbel, URW Gothic, source-sans-pro, sans-serif',
  handwriting: 'Segoe Print, Bradley Hand, Chilanka, TSCu_Comic, casual, cursive'
},
baseFontSize: '1rem' // 16px default
```

### Phase 2: Theme Settings

#### 3. Theme Settings → Colors (Semantic Mapping)
```javascript
// Map brand colors to semantic roles
themeColors: {
  primary: 'client1.brand1.color1', // User selects from available brand colors
  secondary: 'client1.brand1.color2',
  accent: 'client1.brand1.color3',
  neutral: 'client1.brand1.neutral',
  base: 'client1.brand1.base',
  text: {
    primary: '#1a1a1a',
    secondary: '#666666',
    muted: '#999999'
  }
}
```

#### 4. Theme Settings → Typography
```javascript
// Base typography settings
typographySettings: {
  baseFontFamily: 'sans', // References foundation font families
  baseTextSize: '1rem',
  baseLineHeight: '1.5',
  baseTextColor: 'text.primary' // References theme colors
}
```

### Phase 3: Design Presets

#### 5. Design Presets → Typography Presets
```javascript
// Font scale systems
fontScalePresets: {
  default: { 
    title: '2.5rem', 
    subtitle: '1.5rem', 
    body: '1rem',
    caption: '0.875rem'
  },
  titlePop: { 
    title: '3.5rem', 
    subtitle: '2rem', 
    body: '1rem',
    caption: '0.875rem'
  },
  compact: { 
    title: '2rem', 
    subtitle: '1.25rem', 
    body: '0.875rem',
    caption: '0.75rem'
  }
}
```

#### 6. Design Presets → Color Presets (Typography)
```javascript
// Color scales for typography
typographyColorPresets: {
  primary: {
    base: 'primary',
    light: 'primary-light',
    dark: 'primary-dark'
  },
  neutral: {
    base: 'text.primary',
    muted: 'text.secondary',
    subtle: 'text.muted'
  }
}
```

### Phase 4: Component Styles

#### 7. Component Styles → Text Styles
```javascript
// Text style compositions
textStyles: {
  title: { 
    scale: 'title', 
    color: 'primary.base', 
    weight: 'bold',
    fontFamily: 'display'
  },
  subtitle: {
    scale: 'subtitle',
    color: 'neutral.base',
    weight: 'semibold',
    fontFamily: 'sans'
  },
  body: { 
    scale: 'body', 
    color: 'neutral.base', 
    weight: 'normal',
    fontFamily: 'sans'
  },
  caption: { 
    scale: 'caption', 
    color: 'neutral.muted', 
    weight: 'normal',
    fontFamily: 'sans'
  }
}
```

---

## Implementation Priority

1. **Start with Foundation → Colors**: Build client/brand management system
2. **Add Foundation → Typography**: Implement font family selection
3. **Build Theme Settings**: Create semantic mapping interfaces
4. **Implement Typography Presets**: Font scale system
5. **Create Text Styles**: Composition system using presets
6. **Test Integration**: Ensure theme.json output works correctly

This approach validates the complete workflow from foundational variables through to final text styles, establishing the pattern for all future modules.