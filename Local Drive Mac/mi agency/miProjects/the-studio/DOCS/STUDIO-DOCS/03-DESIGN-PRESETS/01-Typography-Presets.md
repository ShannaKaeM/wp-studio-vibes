# Typography Presets

## What This Does

Creates font size scales and color systems that text styles can use. Presets are the building blocks, not complete styles.

## Font Scale Presets

Font scales define size relationships. All sizes scale from base font size of 1rem.

### Default Scale
```
- Display: 5rem, 500%, 5xl, 80px
- Title: 4rem, 400%, 4xl, 64px  
- Subtitle: 2rem, 200%, xl, 32px
- Description: 1.5rem, 150%, lg, 24px
- Body: 1rem, 100%, base, 16px
- Caption: 0.875rem, 87.5%, sm, 14px
- Helper: 0.75rem, 75%, xs, 12px
```

### Title Pop Scale
```
- Display: 8rem, 800%, 8xl, 128px
- Title: 6rem, 600%, 6xl, 96px
- Subtitle: 3rem, 300%, 2xl, 48px
- Description: 2rem, 200%, xl, 32px
- Body: 1rem, 100%, base, 16px
- Caption: 0.875rem, 87.5%, sm, 14px
- Helper: 0.75rem, 75%, xs, 12px
```

### Compact Scale
```
- Display: 3rem, 300%, 2xl, 48px
- Title: 2rem, 200%, xl, 32px
- Subtitle: 1.5rem, 150%, lg, 24px
- Description: 1.25rem, 125%, md, 20px
- Body: 1rem, 100%, base, 16px
- Caption: 0.875rem, 87.5%, sm, 14px
- Helper: 0.75rem, 75%, xs, 12px
```

## Color Presets

### Text Colors
```
- Primary: neutral-900, 90%, rgba(0,0,0,0.9)
- Secondary: neutral-700, 70%, rgba(0,0,0,0.7)
- Muted: neutral-500, 50%, rgba(0,0,0,0.5)
- Light: neutral-400, 40%, rgba(0,0,0,0.4)
- Accent: primary-600, 100%, rgba(59,130,246,1)
```

### Background Colors
```
- Default: white, 100%, rgba(255,255,255,1)
- Subtle: neutral-50, 100%, rgba(249,250,251,1)
- Muted: neutral-100, 100%, rgba(243,244,246,1)
- Accent: primary-50, 100%, rgba(239,246,255,1)
```

## Input Methods

Users can input values as:
- **Semantic**: xs, sm, base, lg, xl, 2xl, 3xl, 4xl, 5xl
- **Percentage**: 75%, 100%, 150%, 200%, 400%
- **Relative**: 0.75rem, 1rem, 1.5rem, 2rem, 4rem
- **Exact**: 12px, 16px, 24px, 32px, 64px

All convert to rem values for consistency.

## How Scales Work

1. **Pick a scale preset** (Default, Title Pop, Compact)
2. **Text styles use the scale** (Title uses scale's title size)
3. **Scopes can modify** (Cards scale everything down 60%)
4. **Users can customize** scales inline without leaving the page

## Creating Custom Scales

Users can:
- Start with existing scale
- Adjust individual sizes
- Save as new preset
- Use liquid/fluid typography for responsive scaling
