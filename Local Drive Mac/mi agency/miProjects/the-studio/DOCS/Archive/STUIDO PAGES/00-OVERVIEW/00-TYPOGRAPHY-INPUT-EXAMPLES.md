# Typography Input System - Visual Examples

## The Power of Flexible Input

Every typography property in The Studio can be set using multiple methods. This document shows real examples of how each input method works.

## Font Size Examples

### Display Text Size (60px target with 16px base)

#### Method 1: Semantic Variable
```css
--preset-display-size: var(--text-6xl);
```
**UI**: `[6xl ▼]` dropdown selection
**Result**: 60px (3.75rem)
**Best for**: Using predefined scale

#### Method 2: Direct Value
```css
--preset-display-size: 3.75rem;
--preset-display-size: 60px;
```
**UI**: `[3.75rem]` text input
**Result**: 60px
**Best for**: Exact control

#### Method 3: Calculation
```css
--preset-display-size: calc(var(--theme-base-size) * 3.75);
```
**UI**: `[×3.75]` multiplier input
**Result**: 60px (scales with base)
**Best for**: Maintaining proportions

#### Method 4: Percentage
```css
--preset-display-size: 375%;
```
**UI**: `[375%]` percentage input
**Result**: 60px (375% of 16px)
**Best for**: Relative sizing

## Line Height Examples

### For Body Text

#### Method 1: Semantic Variable
```css
--preset-body-height: var(--leading-normal);
```
**UI**: `[Normal ▼]` dropdown
**Result**: 1.5
**Best for**: Standard spacing

#### Method 2: Direct Value
```css
--preset-body-height: 1.5;
--preset-body-height: 24px;  /* for 16px text */
```
**UI**: `[1.5]` number input
**Result**: 1.5× font size
**Best for**: Precise control

#### Method 3: Calculation
```css
--preset-body-height: calc(1 + (8 / var(--preset-body-size)));
```
**UI**: Formula builder
**Result**: Dynamic based on font size
**Best for**: Advanced relationships

#### Method 4: Percentage
```css
--preset-body-height: 150%;
```
**UI**: `[150%]` percentage input
**Result**: 1.5× font size
**Best for**: Quick adjustments

## Letter Spacing Examples

### For Display Text

#### Method 1: Semantic Variable
```css
--preset-display-spacing: var(--tracking-tight);
```
**UI**: `[Tight ▼]` dropdown
**Result**: -0.025em
**Best for**: Consistent tracking

#### Method 2: Direct Value
```css
--preset-display-spacing: -0.025em;
--preset-display-spacing: -1px;
```
**UI**: `[-0.025em]` text input
**Result**: Negative tracking
**Best for**: Exact spacing

#### Method 3: Calculation
```css
--preset-display-spacing: calc(-0.01em * var(--preset-display-size));
```
**UI**: Formula builder
**Result**: Scales with font size
**Best for**: Proportional tracking

#### Method 4: Percentage
```css
--preset-display-spacing: -2.5%;
```
**UI**: `[-2.5%]` percentage input
**Result**: -0.025em equivalent
**Best for**: Intuitive input

## Font Weight Examples

### For Title Text

#### Method 1: Semantic Variable
```css
--preset-title-weight: var(--font-bold);
```
**UI**: `[Bold ▼]` dropdown
**Result**: 700
**Best for**: Named weights

#### Method 2: Direct Value
```css
--preset-title-weight: 700;
```
**UI**: `[700]` number input
**Result**: Bold weight
**Best for**: Specific weights

#### Method 3: Named Value
```css
--preset-title-weight: bold;
```
**UI**: `[bold]` text input
**Result**: Browser bold
**Best for**: CSS keywords

## Color Examples

### For Subtitle Text

#### Method 1: Theme Relative
```css
--preset-subtitle-color: color-mix(in oklch, var(--theme-text-color), black 20%);
```
**UI**: `[Base -20%]` slider
**Result**: 20% darker than base
**Best for**: Consistent hierarchy

#### Method 2: Direct Value
```css
--preset-subtitle-color: #333333;
--preset-subtitle-color: rgb(51, 51, 51);
```
**UI**: `[■]` color picker
**Result**: Specific color
**Best for**: Brand colors

#### Method 3: OKLCH Calculation
```css
--preset-subtitle-color: oklch(from var(--theme-text-color) calc(l - 0.2) c h);
```
**UI**: OKLCH editor
**Result**: Reduced lightness
**Best for**: Perceptual adjustments

## Visual Builder Interface

### Compact View
```
DISPLAY TYPOGRAPHY
Size:    [6xl ▼] = 60px
Height:  [Tight ▼] = 1.25
Spacing: [Tight ▼] = -0.025em
Weight:  [Heavy ▼] = 800
```

### Expanded View
```
DISPLAY TYPOGRAPHY
┌─ Size ──────────────────────────┐
│ [Semantic ▼] [Direct] [Calc] [%]│
│ [6xl      ▼]                    │
│ = 60px (3.75rem)                │
└─────────────────────────────────┘
```

### Input Toggle Interface
```
Font Size: [●Semantic ○Direct ○Calc ○%]
           [6xl ▼]
           
Click radio to switch input method
```

## Real-World Preset Example

### "Editorial" Preset Using Mixed Methods

```css
/* Display - Using semantic */
--preset-display-size: var(--text-5xl);
--preset-display-height: 1.2;  /* Direct */
--preset-display-spacing: calc(-0.02em);  /* Calculation */

/* Title - Using calculations */
--preset-title-size: calc(var(--theme-base-size) * 2.5);
--preset-title-height: var(--leading-tight);  /* Semantic */
--preset-title-weight: 600;  /* Direct */

/* Body - Using percentages */
--preset-body-size: 112.5%;  /* 18px with 16px base */
--preset-body-height: var(--leading-relaxed);
--preset-body-spacing: normal;  /* CSS keyword */

/* Caption - Mixed methods */
--preset-caption-size: var(--text-sm);
--preset-caption-color: color-mix(in oklch, var(--theme-text-color), white 40%);
--preset-caption-spacing: 0.05em;
```

## Benefits of Flexible Input

### For Different Users
- **Designers**: Use semantic dropdowns and sliders
- **Developers**: Enter exact values or calculations
- **Content Editors**: Pick from presets
- **Power Users**: Mix all methods

### For Different Situations
- **Quick Setup**: Use semantic values
- **Precise Design**: Use direct values
- **Scalable System**: Use calculations
- **Responsive Design**: Use percentages

### For Different Preferences
- **Visual Thinkers**: Sliders and previews
- **Number People**: Direct input fields
- **System Thinkers**: Calculation builders
- **Efficient Users**: Keyboard shortcuts

## Conversion Helper

The system automatically shows conversions:
```
Input: 1.5rem
Shows: = 24px (with 16px base)

Input: 150%
Shows: = 1.5 line height

Input: var(--text-lg)
Shows: = 1.125rem (18px)
```

This helps users understand relationships between different input methods.
