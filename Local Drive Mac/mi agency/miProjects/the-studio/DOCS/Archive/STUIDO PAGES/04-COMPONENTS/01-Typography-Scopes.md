# Component Library - Typography Scopes

## What Typography Scopes Do
Apply typography presets to specific components and optionally customize them. Component styles inherit all values from the active preset but can override specific properties for unique needs.

## How Component Styles Work

### Inheritance Flow
```
Foundation → Theme Settings → Active Preset → Component Style
```

Each component style automatically inherits ALL properties from the active preset:
- Size, line height, letter spacing, weight, color, margins
- When preset changes, all components update automatically
- Components can override any inherited property

### Component Style Structure
```css
/* Component inherits everything from preset */
.__display {
  font-size: var(--preset-display-size);
  line-height: var(--preset-display-height);
  letter-spacing: var(--preset-display-spacing);
  font-weight: var(--preset-display-weight);
  color: var(--preset-display-color);
  margin-bottom: var(--preset-display-margin);
  font-family: var(--theme-font-primary);
}

/* Component with overrides */
.__hero-title {
  /* Inherits from display preset */
  font-size: var(--preset-display-size);
  line-height: var(--preset-display-height);
  
  /* Custom overrides for this component */
  letter-spacing: 0.05em;  /* Wider than preset */
  text-transform: uppercase;
  margin-bottom: 3rem;     /* More space */
}
```

## Default Component Styles

### Display Typography
Large, impactful text for hero sections and major headings.
```css
.__display {
  /* Fully inherits from --preset-display-* */
}
```

### Title Typography  
Section headings and page titles.
```css
.__title {
  /* Fully inherits from --preset-title-* */
}
```

### Subtitle Typography
Secondary headings and section intros.
```css
.__subtitle {
  /* Fully inherits from --preset-subtitle-* */
}
```

### Body Typography
Main content text.
```css
.__body {
  /* Fully inherits from --preset-body-* */
}
```

### Caption Typography
Small text for labels, hints, and metadata.
```css
.__caption {
  /* Fully inherits from --preset-caption-* */
}
```

### Link Typography
```css
.__link {
  /* Size & Color from Preset System */
  font-size: var(--preset-link-size);
  line-height: var(--preset-link-height);
  letter-spacing: var(--preset-link-spacing);
  font-weight: var(--preset-link-weight);
  color: var(--preset-link-color);
  margin-bottom: var(--preset-link-margin);
  font-family: var(--theme-font-primary);
  text-decoration: underline;
  text-decoration-thickness: 1px;
  text-underline-offset: 2px;
  transition: color var(--duration-150) var(--ease-out);
}

.__link:hover {
  color: var(--preset-link-hover-color);           /* Hover color from preset */
  text-decoration-thickness: 2px;
}
```

### Code Typography
```css
.__code {
  font-size: var(--preset-code-size);
  line-height: var(--preset-code-height);
  letter-spacing: var(--preset-code-spacing);
  font-weight: var(--preset-code-weight);
  color: var(--preset-code-color);
  background: var(--preset-code-background);
  padding: var(--preset-code-padding);
  border-radius: var(--preset-code-border-radius);
  border: var(--preset-code-border);
}
```

### Quote Typography
```css
.__quote {
  font-size: var(--preset-quote-size);
  line-height: var(--preset-quote-height);
  letter-spacing: var(--preset-quote-spacing);
  font-weight: var(--preset-quote-weight);
  color: var(--preset-quote-color);
  font-style: var(--preset-quote-font-style);
  margin: var(--preset-quote-margin);
  padding-left: var(--preset-quote-padding-left);
  border-left: var(--preset-quote-border-left);
  font-family: var(--theme-font-primary);
}
```

### Lead Typography (Intro Paragraphs)
```css
.__lead {
  font-size: var(--preset-lead-size);
  line-height: var(--preset-lead-height);
  letter-spacing: var(--preset-lead-spacing);
  font-weight: var(--preset-lead-weight);
  color: var(--preset-lead-color);
  margin: var(--preset-lead-margin);
  font-family: var(--theme-font-primary);
}
```

### Hero Title
```css
.__hero-title {
  /* Base: Display preset */
  font-size: var(--preset-display-size);
  
  /* Overrides */
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin-bottom: 4rem;
}
```

### Card Heading
```css
.__card-heading {
  /* Base: Title preset */
  font-size: var(--preset-title-size);
  
  /* Overrides */
  line-height: 1.2;  /* Tighter */
  margin-bottom: 0.5rem;  /* Less space */
}
```

### Quote Text
```css
.__quote-text {
  /* Base: Body preset */
  font-size: calc(var(--preset-body-size) * 1.25);
  
  /* Overrides */
  font-style: italic;
  line-height: var(--leading-relaxed);
  padding-left: 2rem;
  border-left: 4px solid var(--color-primary);
}
```

### Button Text
```css
.__button {
  /* Base: Body preset */
  font-size: var(--preset-body-size);
  
  /* Overrides */
  font-weight: var(--font-semibold);
  letter-spacing: 0.025em;
  text-transform: uppercase;
}
```

## Component Style Interface

### Visual Builder
```
COMPONENT: Card Title
Base Preset: [Title ▼]

INHERITED PROPERTIES (from Title preset)
├── Size:     2.25rem (225%)
├── Height:   1.25
├── Spacing:  -0.025em
├── Weight:   700
└── Color:    Base -30%

OVERRIDES
├── Size:     [Use preset ✓] [Custom: ___]
├── Height:   [Use preset ✓] [Custom: ___]
├── Spacing:  [Use preset ✓] [Custom: ___]
├── Weight:   [Use preset ✓] [Custom: ___]
├── Color:    [Use preset ✓] [Custom: ___]
└── + Add Override
```

### Override Options
- **Use preset**: Inherit from active preset (default)
- **Custom value**: Override with specific value
- **Calculated**: Override with calculation
- **Remove override**: Return to preset inheritance

## Usage in Content

### HTML/WordPress
```html
<!-- Using component styles -->
<h1 class="__display">Welcome to Our Site</h1>
<h2 class="__title">About Us</h2>
<p class="__body">Content goes here...</p>

<!-- Custom components -->
<h1 class="__hero-title">MAKE AN IMPACT</h1>
<div class="card">
  <h3 class="__card-heading">Feature Title</h3>
  <p class="__body">Description...</p>
</div>
```

### Block Editor
Components appear in:
- Block style variations
- Typography dropdown
- Custom block patterns

## Benefits
- **Preset inheritance** - Change preset, all components update
- **Selective overrides** - Customize only what's needed
- **Reusable** - Create once, use everywhere
- **Maintainable** - Clear relationship to design system
- **Flexible** - Mix preset values with custom needs

## Relationships
- **Uses**: Active Typography Preset values
- **Affects**: Any element with component class
- **Updates**: When preset changes, unless overridden
