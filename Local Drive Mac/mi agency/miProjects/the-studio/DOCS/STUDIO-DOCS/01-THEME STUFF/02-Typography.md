# Foundation - Typography Variables

## Purpose
Raw typography values that serve as the foundation for all typography in The Studio. These are static values that rarely change and provide the building blocks for Theme Settings and Presets.

## Typography Foundation Variables

### Font Stacks
```css
/* System Font Stacks - Always Available */
--font-system: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
--font-serif: Georgia, Cambria, "Times New Roman", Times, serif;
--font-mono: Consolas, Monaco, "Andale Mono", "Ubuntu Mono", monospace;

/* User-Defined Font Families (Set in Theme Settings) */
--font-primary: var(--font-system);    /* Default to system */
--font-secondary: var(--font-serif);   /* Default to serif */
--font-accent: var(--font-mono);      /* Default to mono */
```

### Size Scale
```css
/* Typography Size Scale - Static rem values */
--text-xs: 0.75rem;      /* 12px at 16px base */
--text-sm: 0.875rem;     /* 14px at 16px base */
--text-base: 1rem;       /* 16px at 16px base */
--text-lg: 1.125rem;     /* 18px at 16px base */
--text-xl: 1.25rem;      /* 20px at 16px base */
--text-2xl: 1.5rem;      /* 24px at 16px base */
--text-3xl: 1.875rem;    /* 30px at 16px base */
--text-4xl: 2.25rem;     /* 36px at 16px base */
--text-5xl: 3rem;        /* 48px at 16px base */
--text-6xl: 3.75rem;     /* 60px at 16px base */
```

### Weight Scale
```css
/* Font Weight Scale */
--font-thin: 100;
--font-light: 300;
--font-normal: 400;
--font-medium: 500;
--font-semibold: 600;
--font-bold: 700;
--font-heavy: 800;
--font-black: 900;
```

### Line Height Scale
```css
/* Line Height Scale with Semantic Names */
--leading-none: 1;
--leading-tight: 1.25;
--leading-snug: 1.375;
--leading-normal: 1.5;
--leading-relaxed: 1.625;
--leading-loose: 1.75;
--leading-double: 2;
```

### Letter Spacing Scale
```css
/* Letter Spacing (Tracking) Scale */
--tracking-tighter: -0.05em;
--tracking-tight: -0.025em;
--tracking-normal: 0;
--tracking-wide: 0.025em;
--tracking-wider: 0.05em;
--tracking-widest: 0.1em;
```

## How Foundation Variables Work

1. **Static Values Only** - No calculations or references to other variables
2. **Scale-Based** - Consistent mathematical relationships
3. **Semantic Naming** - Clear, predictable names
4. **Extensible** - Can add more sizes (--text-7xl, etc.) as needed

## Used By
- **Theme Settings** - As dropdown options
- **Design Presets** - As value options
- **Component Styles** - Through preset inheritance

## UI Representation
In The Studio interface, these appear as:
- Dropdown options in Theme Settings
- Preset builder options
- Visual scale reference

## Notes
- These are the ONLY typography variables in Foundation
- All other typography decisions happen in Theme Settings or Presets
- Custom fonts are added through Font Manager and appear here
