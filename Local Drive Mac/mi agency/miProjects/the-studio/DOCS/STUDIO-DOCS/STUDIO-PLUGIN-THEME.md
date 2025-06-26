# Studio Plugin Theme System Documentation

## Overview

The Studio Plugin implements a sophisticated theme system built on CSS custom properties (CSS variables) and semantic design tokens. This document provides comprehensive documentation of the theme architecture, implementation patterns, and usage guidelines.

## 🏗️ Architecture Overview

### Core Philosophy

The Studio Plugin theme system follows three fundamental principles:

1. **Semantic Token System**: Design decisions are abstracted into meaningful semantic tokens
2. **Component-First Approach**: Per-component theme definitions instead of global semantic mappings
3. **Progressive Enhancement**: Base system with layered customization capabilities

### Technical Stack

```javascript
// Core Technologies
- CSS Custom Properties (CSS Variables) with HSL color space
- React 18 + Shadow DOM for WordPress integration
- Zustand for state management
- CSS-in-JS injection with theme switching
- Semantic HTML with CSS class targeting
```

## 🎨 Design Token System

### Base Units & Spacing

The entire system scales from a single base unit:

```css
:root {
  /* ===== BASE UNITS ===== */
  --base-spacing: 1rem;           /* Foundation: 16px */
  --base-font-size: 1rem;         /* Foundation: 16px */
  
  /* ===== SPACING SYSTEM ===== */
  --page-spacing: calc(var(--base-spacing) * 2);      /* 32px - Main page content */
  --section-spacing: calc(var(--base-spacing) * 3);   /* 48px - Between major sections */
  --content-spacing: calc(var(--base-spacing) * 1.5); /* 24px - Within content areas */
  --element-spacing: calc(var(--base-spacing) * 1);   /* 16px - Between related elements */
  --compact-spacing: calc(var(--base-spacing) * 0.5); /* 8px - Tight spacing */
  
  /* ===== SPACING SCALE ===== */
  --space-1: calc(var(--base-spacing) * 0.25);  /* 4px */
  --space-2: calc(var(--base-spacing) * 0.5);   /* 8px */
  --space-3: calc(var(--base-spacing) * 0.75);  /* 12px */
  --space-4: calc(var(--base-spacing) * 1);     /* 16px */
  --space-5: calc(var(--base-spacing) * 1.25);  /* 20px */
  --space-6: calc(var(--base-spacing) * 1.5);   /* 24px */
  --space-8: calc(var(--base-spacing) * 2);     /* 32px */
  --space-10: calc(var(--base-spacing) * 2.5);  /* 40px */
  --space-12: calc(var(--base-spacing) * 3);    /* 48px */
  --space-16: calc(var(--base-spacing) * 4);    /* 64px */
}
```

### Color System Architecture

#### Brand Colors (Foundation)

Base brand colors defined in HSL space for maximum flexibility:

```css
:root {
  /* ===== BRAND COLORS ===== */
  --brand-base: 0 0% 50%;          /* Neutral gray base */
  --brand-primary: 180 38% 44%;    /* Teal - Studio brand color */
  --brand-secondary: 84 36% 46%;   /* Sage green - Secondary brand */
}
```

#### Color Scales (Calculated)

Each brand color generates a 9-step scale from 50 (lightest) to 900 (darkest):

```css
/* Base Scale (Grayscale) */
--base-50: 0 0% 98%;              /* Nearly white */
--base-100: 0 0% 95%;             /* Very light gray */
--base-200: 0 0% 88%;             /* Light gray */
--base-300: 0 0% 80%;             /* Medium-light gray */
--base-400: 0 0% 68%;             /* Medium gray */
--base-500: var(--brand-base);     /* Base reference: 0 0% 50% */
--base-600: 0 0% 38%;             /* Medium-dark gray */
--base-700: 0 0% 28%;             /* Dark gray */
--base-800: 0 0% 20%;             /* Very dark gray */
--base-900: 0 0% 12%;             /* Nearly black */

/* Primary Scale (Teal) */
--primary-500: var(--brand-primary);  /* Primary reference: 180 38% 44% */
/* ... continues with 50-900 scale */

/* Secondary Scale (Sage Green) */
--secondary-500: var(--brand-secondary); /* Secondary reference: 84 36% 46% */
/* ... continues with 50-900 scale */
```

### Typography System

#### Font Stack

```css
:root {
  /* ===== TYPOGRAPHY ===== */
  --font-sans: Montserrat, system-ui, sans-serif;  /* Studio brand font */
  --font-mono: ui-monospace, 'SF Mono', Consolas, monospace;
}
```

#### Calculated Font Sizes

Font sizes use CSS calc() with base multipliers for perfect scaling:

```css
/* Typography Scale */
--pretitle-size: calc(var(--base-font-size) * 0.75);   /* 12px */
--meta-size: calc(var(--base-font-size) * 0.875);      /* 14px */
--body-size: var(--base-font-size);                    /* 16px */
--label-size: calc(var(--base-font-size) * 1.125);     /* 18px */
--subhead-size: calc(var(--base-font-size) * 1.25);    /* 20px */
--subtitle-size: calc(var(--base-font-size) * 1.5);    /* 24px */
--title-size: calc(var(--base-font-size) * 1.875);     /* 30px */
```

#### Typography Component Classes

```css
/* Semantic Text Components */
.page-title {
  font-family: var(--font-sans);
  font-size: calc(var(--base-font-size) * 1.875); /* 30px */
  font-weight: 600;
  line-height: 1.2;
}

.section-title {
  font-family: var(--font-sans);
  font-size: calc(var(--base-font-size) * 1.25); /* 20px */
  font-weight: 600;
  line-height: 1.3;
}

.section-description {
  font-family: var(--font-sans);
  font-size: var(--base-font-size);
  font-weight: 400;
  line-height: 1.6;
}
```

## 🌓 Per-Component Theme Approach

### Philosophy

Instead of global semantic color mappings, the Studio Plugin implements per-component theme definitions. This approach provides:

- **Explicit Control**: Each component defines its exact appearance in each theme
- **Maintainability**: Easier to track and update component-specific styling
- **Flexibility**: Components can break from standard patterns when needed
- **Clarity**: No abstract semantic mappings to remember

### Implementation Pattern

Each component gets explicit dark and light mode definitions:

```css
/* ===== COMPONENT THEME PATTERN ===== */

/* Base Component Structure */
.component-name {
  /* Shared structural properties */
  border-radius: var(--radius-lg);
  padding: var(--content-spacing);
  transition: all 0.2s ease;
}

/* Dark Theme Specific */
.dark .component-name {
  background: hsl(var(--base-800));
  border: 1px solid hsl(var(--base-700));
  color: hsl(var(--base-50));
}

/* Light Theme Specific */
.light .component-name {
  background: hsl(var(--base-100));
  border: 1px solid hsl(var(--base-200));
  color: hsl(var(--base-900));
}
```

### Main Interface Components

#### Studio Interface (Root Container)

```css
.dark .studio-interface {
  background-color: hsl(var(--base-900));
}
.light .studio-interface {
  background-color: hsl(var(--base-50));
}
```

#### Page Header (Fixed Navigation)

```css
.dark .page-header {
  background: hsl(var(--base-800) / 0.95);
  border-bottom: 1px solid hsl(var(--base-700));
}
.light .page-header {
  background: hsl(var(--base-100) / 0.95);
  border-bottom: 1px solid hsl(var(--base-200));
}
```

#### Section Headers (Content Organization)

```css
.dark .section-header {
  background: hsl(var(--base-800) / 0.5);
  border: 1px solid hsl(var(--base-700));
}
.light .section-header {
  background: hsl(var(--base-100) / 0.5);
  border: 1px solid hsl(var(--base-200));
}
```

#### Color Cards (Interactive Components)

```css
.dark .color-card {
  background: hsl(var(--base-800));
  border: 1px solid hsl(var(--base-700));
}
.light .color-card {
  background: hsl(var(--base-100));
  border: 1px solid hsl(var(--base-200));
}

.color-card:hover {
  border-color: hsl(var(--primary-500));
  transform: translateY(-1px);
}
```

#### Sidebar Components

```css
/* Left Sidebar */
.dark .studio-sidebar {
  background: hsl(var(--base-800));
  border-right: 3px solid hsl(var(--base-700));
}
.light .studio-sidebar {
  background: hsl(var(--base-100));
  border-right: 3px solid hsl(var(--base-200));
}

/* Right Sidebar */
.dark .right-sidebar {
  background: hsl(var(--base-800));
  border-left: 3px solid hsl(var(--base-700));
}
.light .right-sidebar {
  background: hsl(var(--base-100));
  border-left: 3px solid hsl(var(--base-200));
}
```

## 🔧 Interactive Components

### Color Card Tabs

Advanced tabbed interface for color manipulation:

```css
.color-tab {
  font-family: var(--font-sans);
  font-size: calc(var(--base-font-size) * 0.75); /* 12px */
  font-weight: 500;
  padding: var(--space-2) var(--space-3);
  border-radius: var(--radius-sm) var(--radius-sm) 0 0;
  cursor: pointer;
  transition: all 0.15s ease;
}

/* Active Tab State */
.dark .color-tab--active {
  background: hsl(var(--base-600));
  color: hsl(var(--base-50));
  border-bottom-color: hsl(var(--base-600));
}
.light .color-tab--active {
  background: hsl(var(--base-400));
  color: hsl(var(--base-50));
  border-bottom-color: hsl(var(--base-400));
}

/* Inactive Tab State */
.dark .color-tab--inactive {
  background: hsl(var(--base-800));
  color: hsl(var(--base-400));
  border-bottom-color: hsl(var(--base-800));
}
.light .color-tab--inactive {
  background: hsl(var(--base-200));
  color: hsl(var(--base-600));
  border-bottom-color: hsl(var(--base-200));
}
```

### Slider Area

```css
.card-slider-area {
  border-top: none;
  border-radius: 0 0 var(--radius-lg) var(--radius-lg);
  padding: var(--space-5);
}

.dark .card-slider-area {
  background: hsl(var(--base-600));
  border: 3px solid hsl(var(--base-700));
}
.light .card-slider-area {
  background: hsl(var(--base-400));
  border: 3px solid hsl(var(--base-200));
}
```

### Form Elements

#### Slider Tracks

```css
.slider-track {
  height: 4px;
  border-radius: 2px;
  width: 100%;
}
.dark .slider-track { background: hsl(var(--base-700)); }
.light .slider-track { background: hsl(var(--base-300)); }
```

#### Hex Color Displays

```css
.hex-swatch {
  width: var(--space-6);
  height: var(--space-6);
  border-radius: var(--radius-sm);
}
.dark .hex-swatch { border: 3px solid hsl(var(--base-50)); }
.light .hex-swatch { border: 3px solid hsl(var(--base-900)); }

.hex-button {
  font-family: var(--font-mono);
  font-size: calc(var(--base-font-size) * 0.875); /* 14px */
  font-weight: 500;
  line-height: 1;
  padding: var(--space-2) var(--space-3);
  border-radius: var(--radius-sm);
  cursor: pointer;
}

.dark .hex-button {
  background: hsl(var(--base-600));
  color: hsl(var(--base-50));
  border: 1px solid hsl(var(--base-700));
}
.light .hex-button {
  background: hsl(var(--base-400));
  color: hsl(var(--base-50));
  border: 1px solid hsl(var(--base-200));
}
```

### Theme Toggle Button

```css
.theme-toggle {
  font-size: calc(var(--base-font-size) * 1.125); /* 18px */
  padding: var(--space-2) var(--space-3);
  border-radius: var(--radius-full);
  cursor: pointer;
}

.dark .theme-toggle {
  background: hsl(var(--base-800));
  border: 1px solid hsl(var(--base-700));
  color: hsl(var(--base-50));
}
.light .theme-toggle {
  background: hsl(var(--base-100));
  border: 1px solid hsl(var(--base-200));
  color: hsl(var(--base-900));
}
```

## 🎯 React Component Integration

### Theme Provider Architecture

The theme system integrates with React through a centralized ThemeProvider:

```jsx
// Theme Provider Structure
export function ThemeProvider({ children }) {
  const [theme, setTheme] = useState('light');
  
  // CSS injection into Shadow DOM
  useEffect(() => {
    if (shadowRoot) {
      injectCSS(shadowRoot, gstyles);
    }
  }, [shadowRoot]);
  
  return (
    <ThemeContext.Provider value={{ theme, setTheme }}>
      <div className={`studio-interface ${theme}`}>
        {children}
      </div>
    </ThemeContext.Provider>
  );
}
```

### Component Usage Patterns

#### Semantic HTML with CSS Classes

Instead of component libraries, the system uses semantic HTML with CSS classes:

```jsx
// Typography Components
<h1 className="page-title">Colors</h1>
<h2 className="section-title">BRAND COLORS</h2>
<p className="section-description">Description text...</p>

// Container Components
<div className="page-header">...</div>
<div className="section-header">...</div>
<div className="color-card">...</div>
```

#### Layout Patterns

```jsx
// Standard Page Layout
<>
  {/* Fixed Header - Full Width */}
  <div className="page-header" style={{ 
    position: 'fixed',
    top: 0,
    left: 0,
    right: 0,
    height: '80px',
    padding: '0 var(--page-spacing)',
    zIndex: 100,
    backdropFilter: 'blur(8px)'
  }}>
    <h1 className="page-title">Page Title</h1>
    <button className="theme-toggle" onClick={toggleTheme}>
      {theme === 'light' ? '☀️' : '🌙'}
    </button>
  </div>

  {/* Main Content */}
  <div style={{ 
    marginTop: '80px',
    padding: 'var(--page-spacing)'
  }}>
    {/* Section Header */}
    <div className="section-header" style={{ 
      marginBottom: 'var(--section-spacing)',
      padding: 'var(--content-spacing)',
      borderRadius: 'var(--radius-lg)'
    }}>
      {/* Section content */}
    </div>

    {/* Content Grid */}
    <div style={{
      display: 'grid',
      gridTemplateColumns: 'repeat(3, 1fr)',
      gap: 'var(--page-spacing)'
    }}>
      {/* Content items */}
    </div>
  </div>
</>
```

## 🔄 Theme Switching Implementation

### Context-Based Theme State

```jsx
// Theme Context
const ThemeContext = createContext();

export function useTheme() {
  const context = useContext(ThemeContext);
  if (!context) {
    throw new Error('useTheme must be used within ThemeProvider');
  }
  return context;
}

// Usage in Components
function Component() {
  const { theme, setTheme } = useTheme();
  
  const toggleTheme = () => {
    setTheme(theme === 'dark' ? 'light' : 'dark');
  };
  
  return (
    <button onClick={toggleTheme}>
      {theme === 'light' ? '☀️' : '🌙'}
    </button>
  );
}
```

### CSS Class Application

Theme switching works through CSS class application to the root container:

```jsx
// Root container gets theme class
<div className={`studio-interface ${theme}`}>
  {/* All child components inherit theme */}
</div>
```

This allows CSS selectors to target theme-specific styles:

```css
.dark .component { /* Dark theme styles */ }
.light .component { /* Light theme styles */ }
```

## 🔧 Border Radius System

Consistent border radius scale based on base spacing:

```css
:root {
  /* ===== BORDER RADIUS ===== */
  --radius-sm: calc(var(--base-spacing) * 0.25);  /* 4px */
  --radius-md: calc(var(--base-spacing) * 0.5);   /* 8px */
  --radius-lg: calc(var(--base-spacing) * 0.75);  /* 12px */
  --radius-xl: calc(var(--base-spacing) * 1);     /* 16px */
  --radius-full: 9999px;                          /* Fully rounded */
}
```

## 📁 File Structure

```
src/
├── theme/
│   ├── gstyles.css           # Complete design system (1000+ lines)
│   └── ThemeProvider.jsx     # React theme integration
├── views/
│   ├── FoundationColors.jsx  # Template example implementation
│   ├── ThemeColors.jsx       # Theme-specific color mapping
│   ├── ThemeTypography.jsx   # Typography theme settings
│   ├── PresetsColors.jsx     # Color preset management
│   └── PresetsTypography.jsx # Typography preset management
├── store/
│   └── useStudioStore.js     # Zustand state management
└── data/
    └── brand-colors.json     # Mock color data
```

## 🚀 Best Practices

### 1. Always Use Semantic Classes

```jsx
// ✅ Good - Semantic HTML with CSS classes
<h1 className="page-title">Title</h1>
<div className="color-card">Content</div>

// ❌ Avoid - Inline styles for themed properties
<h1 style={{ color: theme === 'dark' ? '#fff' : '#000' }}>Title</h1>
```

### 2. Consistent Spacing Usage

```jsx
// ✅ Good - Use spacing tokens
style={{ marginBottom: 'var(--section-spacing)' }}
style={{ padding: 'var(--content-spacing)' }}
style={{ gap: 'var(--element-spacing)' }}

// ❌ Avoid - Magic numbers
style={{ marginBottom: '48px' }}
style={{ padding: '24px' }}
```

### 3. HSL Color Space

```css
/* ✅ Good - HSL with CSS custom properties */
background: hsl(var(--base-800));
border: 1px solid hsl(var(--base-700));

/* ✅ Good - HSL with alpha */
background: hsl(var(--base-800) / 0.95);

/* ❌ Avoid - Direct hex colors */
background: #2a2a2a;
```

### 4. Per-Component Theme Patterns

```css
/* ✅ Good - Explicit per-component themes */
.dark .my-component {
  background: hsl(var(--base-800));
  color: hsl(var(--base-50));
}
.light .my-component {
  background: hsl(var(--base-100));
  color: hsl(var(--base-900));
}

/* ❌ Avoid - Global semantic mappings */
.my-component {
  background: var(--surface);
  color: var(--text);
}
```

## 🎯 Studio Brand Guidelines

### Color Palette

```css
/* Primary Brand Colors */
--brand-primary: 180 38% 44%;    /* #408f8f - Teal (Studio signature) */
--brand-secondary: 84 36% 46%;   /* #789d4e - Sage green (Natural) */
--brand-accent: 202 36% 42%;     /* #407694 - Blue-gray (Professional) */
```

### Typography

- **Primary Font**: Montserrat (Professional, modern sans-serif)
- **Monospace Font**: SF Mono, Consolas (Code display)
- **Weight Scale**: 400 (regular), 500 (medium), 600 (semibold), 700 (bold)

### Visual Style

- **Modern Minimalism**: Clean lines, generous whitespace
- **Professional Polish**: Subtle shadows, smooth transitions
- **Accessibility First**: High contrast ratios, readable fonts
- **Mobile Responsive**: Fluid layouts, touch-friendly interactions

## 🔮 Future Enhancements

### Planned Features

1. **Dynamic Color Scale Generation**: Automatic calculation of color scales from brand colors
2. **Advanced Typography Presets**: T-shirt size system with user-defined scales
3. **Component Variants**: Theme-aware component variations
4. **Export Pipeline**: CSS custom property output for external use
5. **Theme Validation**: Accessibility and contrast checking

### Integration Roadmap

1. **WordPress Theme.json Integration**: Direct theme.json output generation
2. **GenerateBlocks Integration**: Component library synchronization
3. **AI Assistant Integration**: Intelligent theme suggestions and optimization
4. **Real-time Preview**: Live website preview with theme changes

---

## Conclusion

The Studio Plugin theme system represents a modern approach to design system management, combining the flexibility of CSS custom properties with the maintainability of per-component theme definitions. This architecture provides a solid foundation for building sophisticated, themeable interfaces while maintaining developer productivity and design consistency.

The system successfully bridges the gap between visual design tools and technical implementation, making professional design systems accessible through intuitive interfaces while maintaining the technical rigor required for production WordPress environments.

*Last Updated: June 26, 2025*
*Version: 1.0.0*
*Status: Production Ready*