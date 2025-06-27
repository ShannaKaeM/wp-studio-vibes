# Text Styles

## What This Does

Creates complete text styles using font scale presets and color presets. Text styles combine preset values with specific styling choices.

## How It Works

```
Font Scale Preset + Color Preset + Style Rules = Text Style
```

Text styles use preset values but add specific styling like font family, weight, line height, and spacing.

## Basic Text Styles

### Title Style
Uses title size from active font scale preset.
```css
.title {
  font-size: var(--scale-title-size);     /* From font scale preset */
  color: var(--color-text-primary);      /* From color preset */
  font-family: var(--font-primary);      /* Style choice */
  font-weight: 700;                      /* Style choice */
  line-height: 1.2;                      /* Style choice */
  margin-bottom: 1.25rem;                /* Style choice */
}
```

### Body Style
Uses body size from active font scale preset.
```css
.body {
  font-size: var(--scale-body-size);     /* From font scale preset */
  color: var(--color-text-secondary);    /* From color preset */
  font-family: var(--font-secondary);    /* Style choice */
  font-weight: 400;                      /* Style choice */
  line-height: 1.7;                      /* Style choice */
  margin-bottom: 1rem;                   /* Style choice */
}
```

### Caption Style
Uses caption size from active font scale preset.
```css
.caption {
  font-size: var(--scale-caption-size);  /* From font scale preset */
  color: var(--color-text-muted);        /* From color preset */
  font-family: var(--font-secondary);    /* Style choice */
  font-weight: 400;                      /* Style choice */
  line-height: 1.5;                      /* Style choice */
  letter-spacing: 0.02em;                /* Style choice */
}
```

## Scope Modifications

Scopes can scale text proportionally for different contexts.

### Card Scope
Scales all text down for card layouts.
```css
.card {
  --title-scale: 0.6;      /* 60% of original */
  --body-scale: 0.9;       /* 90% of original */
  --caption-scale: 0.8;    /* 80% of original */
}

.card .title {
  font-size: calc(var(--scale-title-size) * var(--title-scale));
}

.card .body {
  font-size: calc(var(--scale-body-size) * var(--body-scale));
}

.card .caption {
  font-size: calc(var(--scale-caption-size) * var(--caption-scale));
}
```

### Hero Scope
Emphasizes text for hero sections.
```css
.hero {
  --title-scale: 1.5;      /* 150% larger */
  --body-scale: 1.2;       /* 120% larger */
}

.hero .title {
  font-size: calc(var(--scale-title-size) * var(--title-scale));
  letter-spacing: -0.02em; /* Tighter for large text */
}
```

## How to Use

### In HTML
```html
<div class="hero">
  <h1 class="title">Hero Title</h1>
  <p class="body">Hero description</p>
</div>

<div class="card">
  <h3 class="title">Card Title</h3>
  <p class="body">Card content</p>
  <span class="caption">Card meta</span>
</div>
```

### What Happens
- **Hero title**: Uses title size × 1.5 scale
- **Card title**: Uses title size × 0.6 scale  
- **All other styling**: Stays the same (weight, color, spacing)

## Changing Font Scales

Users can switch font scale presets and all text updates:

1. **Default Scale**: Title = 4rem
2. **Title Pop Scale**: Title = 6rem
3. **Compact Scale**: Title = 2rem

When scale changes:
- Hero title: 6rem → 9rem → 3rem
- Card title: 2.4rem → 3.6rem → 1.2rem
- Proportions stay consistent

## Interface Design

### Font Style Controls
```
TITLE STYLE
├── Font Scale: [Default Scale ▼] [⚙️ Edit Scale]
├── Color Preset: [Text Primary ▼]
├── Font Family: [Primary ▼]
├── Font Weight: [Bold ▼]
├── Line Height: [1.2] [Context-aware ✓]
└── Letter Spacing: [-0.01em]
```

### Inline Scale Editing
```
Font Scale: [Default Scale ▼] [⚙️ Edit]

[⚙️ Edit] opens:
├── Title: [4rem] [400%] [4xl] [64px]
├── Subtitle: [2rem] [200%] [xl] [32px]
├── Body: [1rem] [100%] [base] [16px]
└── [Save Changes] [Cancel]
```

## Benefits

- **Consistent scaling** across all contexts
- **Easy preset switching** changes everything at once
- **Scope-based modifications** for different layouts
- **Inline editing** without leaving the page
- **Proportional relationships** maintained automatically
