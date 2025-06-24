# AI Studio - Preset Generator

## What This Does
Automatically creates design system presets based on your goals and industry. Like having an AI designer create "Healthcare Website" or "Tech Startup" design presets for you.

## Simple Explanation
- Tell AI what kind of website you're building
- AI generates complete design presets that match your industry
- Get ready-made combinations of colors, typography, spacing, and effects
- Start with professional design systems instead of building from scratch

## Key Features
- **Industry Presets**: Ready-made design systems for different industries
- **Goal-Based Generation**: Presets based on what you want to achieve
- **Style Variation**: Generate multiple options in different styles
- **Custom Preset Creation**: Create new presets based on your specifications

## What You Get
```javascript
// Example AI-generated presets

// Healthcare Website Preset
const healthcarePreset = {
  name: "Healthcare Professional",
  description: "Trustworthy, clean, accessible design for healthcare",
  
  colors: {
    primary: "oklch(58.2% 0.135 196.8)",      // Trustworthy blue
    secondary: "oklch(68.1% 0.142 142.5)",    // Calming green
    accent: "oklch(76.3% 0.098 76.4)",        // Warm orange for CTAs
    neutral: "oklch(96.8% 0.002 286.4)"       // Clean light gray
  },
  
  typography: {
    preset: "readable-professional",
    bodyFont: "font-system-ui",                 // Accessible system fonts
    headingFont: "font-humanist",               // Friendly but professional
    scale: "comfortable"                        // Larger text for accessibility
  },
  
  spacing: {
    preset: "spacious",                         // Plenty of breathing room
    sectionSpacing: "var(--space-spacious)",
    contentSpacing: "var(--space-comfortable)"
  },
  
  effects: {
    preset: "subtle-professional",
    shadows: "minimal",                         // Clean, not flashy
    animations: "gentle",                       // Calm, accessible motion
    interactions: "clear"                       // Obvious interactive states
  }
};

// Tech Startup Preset  
const techStartupPreset = {
  name: "Tech Startup Modern",
  description: "Bold, innovative, modern design for tech companies",
  
  colors: {
    primary: "oklch(51.8% 0.137 264.8)",      // Bold purple
    secondary: "oklch(64.2% 0.168 29.8)",     // Energetic orange
    accent: "oklch(71.5% 0.142 142.5)",       // Fresh green
    neutral: "oklch(15.2% 0.012 286.4)"       // Dark, modern gray
  },
  
  typography: {
    preset: "dramatic-modern",
    bodyFont: "font-neo-grotesque",             // Clean, modern
    headingFont: "font-geometric-humanist",     // Bold, distinctive
    scale: "dramatic"                           // High contrast sizes
  },
  
  spacing: {
    preset: "dynamic",
    sectionSpacing: "var(--space-fluid-lg)",   // Responsive spacing
    contentSpacing: "var(--space-comfortable)"
  },
  
  effects: {
    preset: "modern-interactive",
    shadows: "prominent",                       // Bold depth
    animations: "energetic",                    // Dynamic motion
    interactions: "playful"                     // Engaging hover states
  }
};
```

## Preset Categories
- **Industry-Specific**: Healthcare, finance, education, tech, retail
- **Style-Based**: Minimal, dramatic, playful, professional, luxury
- **Purpose-Driven**: Landing pages, blogs, portfolios, e-commerce
- **Accessibility-Focused**: High contrast, large text, reduced motion

## Development Todo
- [ ] Build preset generation AI system
- [ ] Create industry-specific preset templates
- [ ] Add style variation generator
- [ ] Make preset customization interface

---

## Technical Details

### AI Preset Generation
```javascript
// Generate preset based on user input
const preset = await ai.generatePreset({
  industry: "healthcare",
  style: "modern",
  accessibility: "high",
  target_audience: "patients and professionals"
});

// Apply generated preset to design system
await designSystem.applyPreset(preset);
```

### Preset Types
- **Complete System Presets**: Full design system configurations
- **Layer-Specific Presets**: Just typography, just colors, just spacing
- **Component Presets**: Styling for specific component types
- **Mood Presets**: Emotional/feeling-based design combinations

### Feeds Into
- All design system layers (presets configure entire system)
- Quick start workflows (begin with professional presets)
- Design exploration (try different styles quickly)