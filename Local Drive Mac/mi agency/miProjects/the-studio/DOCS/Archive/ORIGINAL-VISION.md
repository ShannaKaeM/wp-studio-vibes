# Scoped BEM + Semantic Studio: Complete Integration


---

## **Core Architecture**

### **1. Variable Layers (Unified Naming)**

```css
:root {
  /* ===== BASE VARIABLES (Immutable Scales) ===== */
  /* Typography Scale */
  --text-xs: 0.75rem;
  --text-sm: 0.875rem;
  --text-base: 1rem;
  --text-lg: 1.125rem;
  --text-xl: 1.25rem;
  --text-2xl: 1.5rem;
  --text-3xl: 1.875rem;
  --text-4xl: 2.25rem;
  --text-5xl: 3rem;
  --text-6xl: 3.75rem;
  --text-7xl: 4.5rem;
  --text-8xl: 6rem;
  --text-9xl: 8rem;
  
  /* Spacing Scale */
  --space-0: 0;
  --space-1: 0.25rem;
  --space-2: 0.5rem;
  --space-4: 1rem;
  --space-6: 1.5rem;
  --space-8: 2rem;
  --space-12: 3rem;
  --space-16: 4rem;
  --space-20: 5rem;
  --space-24: 6rem;
  
  /* ===== SEMANTIC TOKENS (User Controls) ===== */
  /* Typography Semantics */
  --font-weight-light: 300;
  --font-weight-normal: 400;
  --font-weight-medium: 500;
  --font-weight-bold: 600;
  --font-weight-heavy: 800;
  
  /* Color Semantics */
  --color-primary: oklch(56.9% 0.042 198.223);
  --color-secondary: oklch(55.7% 0.047 44.053);
  --color-neutral: oklch(77.6% 0.024 93.421);
  --color-base: oklch(50% 0 263.283);
  
  /* Auto-generated content colors */
  --color-primary-content: oklch(98% 0 0);
  --color-secondary-content: oklch(98% 0 0);
  
  /* ===== PRESET SYSTEM (Swappable) ===== */
  /* Active Typography Preset */
  --preset-typography: "dramatic"; /* User's choice */
  
  /* Typography Hierarchy (from preset) */
  --text-display: var(--text-6xl);
  --text-title: var(--text-4xl);
  --text-subtitle: var(--text-2xl);
  --text-heading: var(--text-xl);
  --text-body: var(--text-base);
  --text-caption: var(--text-sm);
  --text-detail: var(--text-xs);
  
  /* Weight Hierarchy (from preset) */
  --weight-display: var(--font-weight-heavy);
  --weight-title: var(--font-weight-bold);
  --weight-subtitle: var(--font-weight-medium);
  --weight-heading: var(--font-weight-bold);
  --weight-body: var(--font-weight-normal);
  --weight-caption: var(--font-weight-normal);
  
  /* Active State Preset */
  --preset-state: "analogous"; /* User's choice */
  
  /* State Colors (from preset) */
  --state-rest: var(--color-primary);
  --state-hover: var(--color-primary-400);
  --state-active: var(--color-primary-600);
  --state-focus: var(--color-primary-300);
  --state-disabled: var(--opacity-light);
}
```

### **2. Component Classes (BEM Compatible)**

```css
/* ===== CORE SEMANTIC COMPONENTS ===== */
/* These work inside any scoped context */

/* Typography Components */
.__display {
  font-size: var(--text-display);
  font-weight: var(--weight-display);
  line-height: 1.1;
  color: var(--local-color, var(--color-base-content));
}

.__title {
  font-size: var(--text-title);
  font-weight: var(--weight-title);
  line-height: 1.25;
  color: var(--local-color, var(--color-base-content));
}

.__subtitle {
  font-size: var(--text-subtitle);
  font-weight: var(--weight-subtitle);
  line-height: 1.3;
  color: var(--local-color, var(--color-base-content));
}

.__heading {
  font-size: var(--text-heading);
  font-weight: var(--weight-heading);
  line-height: 1.4;
  color: var(--local-color, var(--color-base-content));
}

.__body {
  font-size: var(--text-body);
  font-weight: var(--weight-body);
  line-height: 1.6;
  color: var(--local-color, var(--color-base-content));
}

.__caption {
  font-size: var(--text-caption);
  font-weight: var(--weight-caption);
  line-height: 1.5;
  color: var(--local-color, var(--color-neutral-content));
}

/* Interactive Components */
.__button {
  /* Component variables for scoped overrides */
  --btn-background: var(--state-rest);
  --btn-background-hover: var(--state-hover);
  --btn-background-active: var(--state-active);
  --btn-padding: var(--space-3) var(--space-5);
  --btn-radius: var(--radius-md);
  
  /* Apply variables */
  display: inline-flex;
  align-items: center;
  padding: var(--btn-padding);
  background: var(--btn-background);
  border-radius: var(--btn-radius);
  font-weight: var(--font-weight-medium);
  cursor: pointer;
  transition: all 0.2s;
}

.__button:hover {
  background: var(--btn-background-hover);
}

.__button:active {
  background: var(--btn-background-active);
}
```

### **3. Scoped BEM Contexts**

```css
/* ===== HERO COMPONENT (Scoped BEM) ===== */
.hero {
  /* Root component styles */
  display: grid;
  gap: var(--space-12);
  padding: var(--space-20) var(--space-4);
}

/* Scoped elements with semantic mapping */
.hero .hero__title {
  /* Inherit from semantic component */
  @extend .__title;
  
  /* Hero-specific overrides */
  font-size: var(--text-display); /* Larger in heroes */
  
  /* WordPress safety */
  display: block;
}

.hero .hero__subtitle {
  @extend .__subtitle;
  opacity: 0.9;
}

.hero .hero__body {
  @extend .__body;
  max-width: 65ch;
}

.hero .hero__button {
  @extend .__button;
  
  /* Hero context overrides */
  --btn-padding: var(--space-5) var(--space-7);
  --btn-radius: var(--radius-xl);
}

/* ===== CARD COMPONENT (Scoped BEM) ===== */
.card {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  padding: var(--space-6);
  background: var(--color-base-100);
  border-radius: var(--radius-lg);
}

.card .card__title {
  @extend .__title;
  
  /* Card-specific overrides */
  font-size: var(--text-heading); /* Smaller in cards */
}

.card .card__subtitle {
  @extend .__subtitle;
  font-size: var(--text-lg);
}

.card .card__body {
  @extend .__body;
}

.card .card__button {
  @extend .__button;
  
  /* Full width in cards */
  width: 100%;
}
```

### **4. Tag Assignment System**

```css
/* ===== TAG RULES (Context-based) ===== */
/* Define which HTML tag each semantic class should use in each context */

:root {
  /* Default tag assignments */
  --tag-title-default: "h2";
  --tag-subtitle-default: "h3";
  --tag-heading-default: "h4";
  --tag-body-default: "p";
  
  /* Context-specific overrides */
  --tag-hero-title: "h1";
  --tag-hero-subtitle: "p";
  
  --tag-section-title: "h2";
  --tag-section-subtitle: "h3";
  
  --tag-card-title: "h3";
  --tag-card-subtitle: "h4";
  
  --tag-widget-title: "h4";
  --tag-list-title: "h5";
}
```

### **5. Color Application System**

```css
/* ===== COLOR MODIFIER CLASSES ===== */
/* Apply to any component for color treatment */

.primary {
  --local-color: var(--color-primary);
  --local-color-content: var(--color-primary-content);
}

.secondary {
  --local-color: var(--color-secondary);
  --local-color-content: var(--color-secondary-content);
}

.neutral {
  --local-color: var(--color-neutral);
  --local-color-content: var(--color-neutral-content);
}

/* Usage: <div class="hero primary"> */
```

---

## **Implementation Examples**

### **1. Hero Section**

```html
<!-- Semantic HTML Template -->
<section class="hero primary">
  <div class="hero__content">
    <element class="hero__title" tag="h1">Welcome to Our Platform</element>
    <element class="hero__subtitle" tag="p">Build better experiences with our tools</element>
    <element class="hero__body" tag="p">Start creating amazing things today with our comprehensive suite of development tools.</element>
    <button class="hero__button hero__button--primary">Get Started</button>
  </div>
</section>
```

```css
/* Generated CSS with full system */
.hero .hero__title {
  /* From semantic system */
  font-size: var(--text-display); /* 3.75rem from preset */
  font-weight: var(--weight-display); /* 800 from preset */
  
  /* From color modifier */
  color: var(--local-color, var(--color-base-content));
  
  /* WordPress safety */
  display: block;
}

/* Primary color modifier applied */
.hero.primary .hero__title {
  color: var(--color-primary);
}
```

### **2. Card Component**

```html
<article class="card secondary">
  <element class="card__title" tag="h3">Feature Card</element>
  <element class="card__subtitle" tag="h4">Subtitle here</element>
  <element class="card__body" tag="p">Description content goes here.</element>
  <button class="card__button">Learn More</button>
</article>
```

### **3. Badge Variations (Preset-based)**

```css
/* Badge preset system */
.badge {
  --badge-preset: "analogous"; /* User's choice */
}

/* Auto-generated variations */
.badge--variant-1 {
  background: var(--color-primary-200);
  color: var(--color-primary-800);
}

.badge--variant-2 {
  background: var(--color-primary-300);
  color: var(--color-primary-900);
}

/* Usage */
.card .card__badge--new { @extend .badge--variant-1; }
.card .card__badge--featured { @extend .badge--variant-2; }
```

---

## **Studio Interface Integration**

### **1. Preset Manager**
```
┌─ TYPOGRAPHY PRESET ────────────────────────────────┐
│ Active Preset: [Dramatic Scale ▼]                  │
│                                                    │
│ Display: 6xl (3.75rem) - Heavy (800)              │
│ Title:   4xl (2.25rem) - Bold (600)               │
│ Subtitle: 2xl (1.5rem) - Medium (500)             │
│                                                    │
│ [Create Custom] [Save] [Export]                    │
└────────────────────────────────────────────────────┘
```

### **2. Tag Assignment Editor**
```
┌─ TAG ASSIGNMENT RULES ─────────────────────────────┐
│ Context         Element         HTML Tag           │
│ ─────────────────────────────────────────────────  │
│ .hero          .__title     →   H1                 │
│ .section       .__title     →   H2                 │
│ .card          .__title     →   H3                 │
│ .widget        .__title     →   H4                 │
│                                                    │
│ [+ Add Rule] [Reset Defaults]                      │
└────────────────────────────────────────────────────┘
```

### **3. State Preset Selector**
```
┌─ BUTTON STATE PRESET ──────────────────────────────┐
│ Active Preset: [Analogous ▼]                       │
│                                                    │
│ Rest:     Primary (base)                          │
│ Hover:    Primary-400                             │
│ Active:   Primary-600                             │
│ Focus:    Primary-300                             │
│                                                    │
│ Preview: [Button Preview]                          │
└────────────────────────────────────────────────────┘
```

---

## **AI Parsing Integration**

### **Stage 1: AI parses to Scoped BEM**
```css
/* AI generates */
.hero .hero__title { font-size: 60px; font-weight: 800; }
.hero .hero__subtitle { font-size: 24px; font-weight: 500; }
```

### **Stage 2: Map to Semantic System**
```javascript
// Automatic mapping
const aiToSemantic = {
  'font-size: 60px': '--text-display',
  'font-size: 24px': '--text-subtitle',
  'font-weight: 800': '--weight-heavy',
  'font-weight: 500': '--weight-medium'
};
```

### **Stage 3: Apply User's Presets**
```css
/* Final output uses user's semantic choices */
.hero .hero__title {
  font-size: var(--text-display); /* User's preset value */
  font-weight: var(--weight-display); /* User's preset value */
  display: block; /* WordPress safety */
}
```

### **Stage 4: PHP Filter Integration**
```php
// User's semantic values flow into WordPress
add_filter('wp_theme_json_data_theme', function($theme_json) {
    // Detect theme's variables and fill with our semantic values
    // No CSS fights - just smart value injection
});
```

---

## **WordPress Integration via PHP Filters**

### **The Problem**
WordPress theme.json creates highly specific selectors that win even against Scoped BEM:
```css
/* WordPress generates */
:is(.is-layout-flow,.is-layout-constrained) :where(h1,h2,h3,h4,h5,h6) {
  /* Specificity too high to override cleanly */
}
```

### **The Solution: Fill, Don't Fight**
Instead of CSS overrides, use PHP filters to inject our semantic values into WordPress's existing variable system:

```php
// functions.php or plugin file
add_filter('wp_theme_json_data_theme', function($theme_json) {
    $theme_data = $theme_json->get_data();
    
    // Get user's semantic values from Studio
    $studio_values = get_option('studio_semantic_tokens');
    
    // Detect and map to existing theme variables
    if (isset($theme_data['settings']['color']['palette'])) {
        foreach ($theme_data['settings']['color']['palette'] as &$color) {
            if ($color['slug'] === 'primary') {
                // Fill with our semantic value
                $color['color'] = $studio_values['color-primary'] ?? $color['color'];
            }
        }
    }
    
    // Map typography
    if (isset($theme_data['settings']['typography']['fontSizes'])) {
        foreach ($theme_data['settings']['typography']['fontSizes'] as &$size) {
            if ($size['slug'] === 'x-large') {
                // Map to our semantic title size
                $size['size'] = $studio_values['text-title'] ?? $size['size'];
            }
        }
    }
    
    // Map custom properties
    if (isset($theme_data['settings']['custom'])) {
        // Fill existing variables with semantic values
        $theme_data['settings']['custom'] = array_merge(
            $theme_data['settings']['custom'],
            [
                'text-title' => 'var(--text-4xl)',
                'font-weight-bold' => '600',
                'color-primary' => $studio_values['color-primary']
            ]
        );
    }
    
    return $theme_json->update_with($theme_data);
});

// Also inject via wp_head for non-theme.json variables
add_action('wp_head', function() {
    $studio_values = get_option('studio_semantic_tokens');
    ?>
    <style id="studio-semantic-tokens">
        :root {
            /* User's semantic choices */
            --text-title: <?php echo esc_attr($studio_values['text-title'] ?? 'var(--text-4xl)'); ?>;
            --font-weight-bold: <?php echo esc_attr($studio_values['font-weight-bold'] ?? '600'); ?>;
            --color-primary: <?php echo esc_attr($studio_values['color-primary'] ?? 'oklch(56.9% 0.042 198.223)'); ?>;
            
            /* Fill WordPress preset variables */
            --wp--preset--font-size--x-large: var(--text-title);
            --wp--preset--color--primary: var(--color-primary);
        }
    </style>
    <?php
}, 5); // Early priority to establish base values
```

### **Benefits of PHP Filter Approach**
1. **No CSS Specificity Wars** - Inject values before CSS is generated
2. **Theme Compatibility** - Works with any theme's existing system
3. **Clean Integration** - No preflights or normalizers needed
4. **User Control** - Studio values flow into WordPress naturally
5. **Fallback Safe** - Preserves theme defaults if Studio values not set

---

## **WordPress Block Generation**

```html
<!-- Generated WordPress Block -->
<!-- wp:generateblocks/container {"globalClasses":["hero","primary"]} -->
<section class="gb-container hero primary">
  <!-- wp:generateblocks/element {"tagName":"h1","globalClasses":["hero__title"]} -->
  <h1 class="gb-element hero__title">Welcome to Our Platform</h1>
  <!-- /wp:generateblocks/element -->
</section>
<!-- /wp:generateblocks/container -->
```

---

## **Benefits of This Hybrid System**

1. **WordPress Safe**: Scoped BEM for custom components + PHP filters for theme integration
2. **AI Friendly**: BEM structure is predictable for parsing
3. **User Control**: Semantic presets flow into WordPress naturally
4. **SEO Optimized**: Proper tag hierarchy automatically
5. **No CSS Wars**: PHP injection avoids specificity battles
6. **Theme Compatible**: Works WITH any theme, not against it
7. **Scalable**: From simple sites to complex design systems

---

## **File Structure**

```
studio-system/
├── base/
│   ├── variables.css          # Base scales (immutable)
│   └── reset.css             # WordPress-safe reset
├── semantic/
│   ├── tokens.css            # User's semantic choices
│   ├── components.css        # Core .__component classes
│   └── modifiers.css         # Color/state modifiers
├── presets/
│   ├── typography/
│   │   ├── dramatic.css      # Typography preset
│   │   └── compact.css       # Typography preset
│   ├── states/
│   │   ├── analogous.css     # State preset
│   │   └── high-contrast.css # State preset
│   └── badges/
│       └── variations.css    # Badge color presets
├── scoped/
│   ├── hero.css              # Hero scoped BEM
│   ├── card.css              # Card scoped BEM
│   └── section.css           # Section scoped BEM
└── export/
    ├── wordpress.css         # Combined for WordPress
    └── components.json       # For block generation
```

This complete solution maintains Daniel's WordPress compatibility while adding our semantic enhancement layers!