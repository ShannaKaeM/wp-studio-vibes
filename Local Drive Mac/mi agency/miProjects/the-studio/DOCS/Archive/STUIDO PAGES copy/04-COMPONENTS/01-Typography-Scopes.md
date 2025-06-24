# Component Library - Typography Scopes

## What Typography Scopes Do
Define all available typography components with their default styling properties. Each typography scope inherits size and color from the active Typography Preset, but includes all other styling like line-height, font-weight, margins, etc.

## Typography Scope Components

### Display Typography
```css
.__display {
  /* Size & Color from Preset System */
  font-size: var(--text-display);           /* From typography preset */
  color: var(--color-text-primary);         /* From color preset */
  
  /* Component-specific styling */
  font-weight: var(--font-weight-bold);     /* 700 */
  line-height: 1.1;                         /* Tight for headlines */
  letter-spacing: -0.025em;                 /* Slightly tighter */
  margin: 0 0 var(--space-6) 0;            /* Bottom margin */
  font-family: var(--font-family-display);  /* Display font from theme */
}
```

### Title Typography
```css
.__title {
  /* Size & Color from Preset System */
  font-size: var(--text-title);
  color: var(--color-text-primary);
  
  /* Component-specific styling */
  font-weight: var(--font-weight-semibold); /* 600 */
  line-height: 1.25;                        /* Balanced readability */
  letter-spacing: -0.015em;                 
  margin: 0 0 var(--space-4) 0;
  font-family: var(--font-family-display);
}
```

### Subtitle Typography
```css
.__subtitle {
  /* Size & Color from Preset System */
  font-size: var(--text-subtitle);
  color: var(--color-text-secondary);       /* Secondary color */
  
  /* Component-specific styling */
  font-weight: var(--font-weight-medium);   /* 500 */
  line-height: 1.3;
  letter-spacing: 0;
  margin: 0 0 var(--space-3) 0;
  font-family: var(--font-family-primary);
}
```

### Heading Typography
```css
.__heading {
  /* Size & Color from Preset System */
  font-size: var(--text-heading);
  color: var(--color-text-primary);
  
  /* Component-specific styling */
  font-weight: var(--font-weight-semibold); /* 600 */
  line-height: 1.4;
  letter-spacing: 0;
  margin: 0 0 var(--space-3) 0;
  font-family: var(--font-family-primary);
}
```

### Body Typography
```css
.__body {
  /* Size & Color from Preset System */
  font-size: var(--text-body);
  color: var(--color-text-primary);
  
  /* Component-specific styling */
  font-weight: var(--font-weight-normal);   /* 400 */
  line-height: 1.6;                         /* Optimal for reading */
  letter-spacing: 0;
  margin: 0 0 var(--space-4) 0;
  font-family: var(--font-family-primary);
}
```

### Caption Typography
```css
.__caption {
  /* Size & Color from Preset System */
  font-size: var(--text-caption);
  color: var(--color-text-muted);           /* Muted color */
  
  /* Component-specific styling */
  font-weight: var(--font-weight-normal);   /* 400 */
  line-height: 1.5;
  letter-spacing: 0.025em;                  /* Slightly wider for small text */
  margin: 0 0 var(--space-2) 0;
  font-family: var(--font-family-primary);
}
```

### Link Typography
```css
.__link {
  /* Size & Color from Preset System */
  font-size: inherit;                       /* Inherits from parent */
  color: var(--color-link-primary);         /* Link color from preset */
  
  /* Component-specific styling */
  font-weight: inherit;
  line-height: inherit;
  text-decoration: underline;
  text-decoration-thickness: 1px;
  text-underline-offset: 2px;
  transition: color var(--duration-150) var(--ease-out);
  font-family: inherit;
}

.__link:hover {
  color: var(--color-link-hover);           /* Hover color from preset */
  text-decoration-thickness: 2px;
}
```

### Code Typography
```css
.__code {
  /* Size & Color from Preset System */
  font-size: calc(var(--text-body) * 0.875); /* Slightly smaller than body */
  color: var(--color-text-code);             /* Code color from preset */
  
  /* Component-specific styling */
  font-weight: var(--font-weight-normal);
  line-height: 1.4;
  font-family: var(--font-family-mono);      /* Monospace font */
  background: var(--color-background-code);  /* Code background */
  padding: 0.125rem 0.25rem;
  border-radius: var(--radius-sm);
  border: 1px solid var(--color-border-subtle);
}
```

### Quote Typography
```css
.__quote {
  /* Size & Color from Preset System */
  font-size: var(--text-subtitle);
  color: var(--color-text-muted);
  
  /* Component-specific styling */
  font-weight: var(--font-weight-normal);
  line-height: 1.5;
  font-style: italic;
  margin: var(--space-6) 0;
  padding-left: var(--space-4);
  border-left: 4px solid var(--color-border-accent);
  font-family: var(--font-family-primary);
}
```

### Lead Typography (Intro Paragraphs)
```css
.__lead {
  /* Size & Color from Preset System */
  font-size: calc(var(--text-body) * 1.125); /* 12.5% larger than body */
  color: var(--color-text-secondary);
  
  /* Component-specific styling */
  font-weight: var(--font-weight-normal);
  line-height: 1.5;
  letter-spacing: 0;
  margin: 0 0 var(--space-5) 0;
  font-family: var(--font-family-primary);
}
```

## Scoped Context Overrides

### Card Context
```css
.card .__title {
  font-size: calc(var(--text-title) * var(--card-title-scale, 0.8)); /* 80% in cards */
  margin-bottom: var(--space-2);  /* Tighter spacing in cards */
}

.card .__body {
  line-height: 1.5;  /* Slightly tighter in cards */
}
```

### Hero Context
```css
.hero .__display {
  font-size: calc(var(--text-display) * var(--hero-display-scale, 1.2)); /* 20% larger in hero */
  text-align: center;
  margin-bottom: var(--space-8);
}

.hero .__subtitle {
  text-align: center;
  max-width: 60ch;  /* Optimal reading width */
  margin-left: auto;
  margin-right: auto;
}
```

### Navigation Context
```css
.nav .__link {
  font-weight: var(--font-weight-medium);
  text-decoration: none;
  padding: var(--space-2) var(--space-3);
}

.nav .__link:hover {
  background: var(--color-background-hover);
}
```

## Usage Examples

### Basic Typography
```html
<h1 class="__display">Main Display Heading</h1>
<h2 class="__title">Section Title</h2>
<p class="__subtitle">Supporting subtitle text</p>
<p class="__body">Main body content goes here.</p>
<p class="__caption">Small caption or metadata</p>
```

### Scoped Typography
```html
<div class="card">
  <h3 class="__title">Card Title</h3>
  <p class="__body">Card content automatically uses card-scoped styling.</p>
  <a href="#" class="__link">Card Link</a>
</div>

<section class="hero">
  <h1 class="__display">Hero Display</h1>
  <p class="__subtitle">Hero subtitle with automatic centering</p>
</section>
```

## Key Benefits

### Preset Integration
- **Size & Color**: Automatically inherit from active Typography and Color presets
- **Easy Swapping**: Change presets and all typography updates automatically
- **Consistent Scaling**: All sizes scale proportionally from base text size

### Scoped Flexibility  
- **Context-Aware**: Typography adapts to different component contexts
- **Override-Friendly**: Developers can fine-tune specific contexts
- **Maintainable**: Changes to base typography flow through all scopes

### Developer Control
- **Preset-Based**: Use typography presets for consistency
- **Scope-Specific**: Override individual contexts as needed
- **Calculation-Based**: Fine-tune with multipliers and calculations