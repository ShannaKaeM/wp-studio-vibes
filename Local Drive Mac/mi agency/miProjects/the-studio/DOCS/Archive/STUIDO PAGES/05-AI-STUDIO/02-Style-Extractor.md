# AI Studio - Style Extractor

## What This Does
Analyzes images and existing designs to automatically extract design tokens. Like taking a photo of a beautiful website or brand and instantly getting the colors, fonts, and spacing used.

## Simple Explanation
- Upload an image of a design you like
- AI automatically extracts the colors, typography, and spacing
- System creates matching design tokens for your design system
- Get inspired by existing designs and recreate their style

## Key Features
- **Image Analysis**: Extract design elements from any image
- **Brand Asset Analysis**: Analyze logos and brand materials
- **Website Screenshot Analysis**: Extract design systems from existing websites
- **Style Matching**: Create design tokens that match analyzed styles

## What You Get
```javascript
// Example Style Extractor results

// Upload image of a website hero section
const extractedStyle = {
  colors: {
    primary: "oklch(64.2% 0.087 264.8)",      // Extracted purple
    secondary: "oklch(87.5% 0.045 197.2)",   // Extracted light blue
    neutral: "oklch(96.8% 0.002 286.4)",     // Extracted light gray
    accent: "oklch(71.2% 0.156 29.8)"        // Extracted orange
  },
  
  typography: {
    headingFont: "font-geometric-humanist",   // Detected as Montserrat-like
    bodyFont: "font-system-ui",               // Detected as system font
    displaySize: "var(--text-6xl)",          // Large heading detected
    bodySize: "var(--text-lg)"               // Larger body text detected
  },
  
  spacing: {
    sectionPadding: "var(--space-spacious)",   // Generous spacing detected
    elementGap: "var(--space-comfortable)",    // Medium spacing between elements
    heroHeight: "60vh"                         // Hero section height
  },
  
  effects: {
    cardShadow: "var(--shadow-md)",           // Medium shadow detected
    buttonRadius: "var(--radius-lg)",         // Rounded buttons detected
    hoverScale: "var(--scale-105)"            // Subtle hover effects
  }
};
```

## Style Extractor Capabilities
- **Color Extraction**: Identify primary, secondary, and accent colors
- **Typography Analysis**: Detect font families, sizes, and hierarchy
- **Spacing Pattern Recognition**: Understand layout spacing and rhythm
- **Effect Detection**: Identify shadows, borders, and visual effects

## Development Todo
- [ ] Build image analysis and color extraction
- [ ] Create typography pattern recognition
- [ ] Add spacing and layout analysis
- [ ] Make design token generation from extracted styles

---

## Technical Details

### AI Image Processing
```javascript
// Style extraction workflow
const image = await uploadImage(file);
const analysis = await ai.analyzeDesign(image);
const tokens = await ai.convertToTokens(analysis, userPreferences);

// Apply extracted tokens to design system
await designSystem.applyTokens(tokens);
```

### Analysis Types
- **Color Palette**: Dominant colors and color relationships
- **Typography**: Font detection and size hierarchy analysis  
- **Layout Patterns**: Spacing, alignment, and composition analysis
- **Visual Effects**: Shadow, border, and interaction effect detection

### Feeds Into
- Foundation layer (extracted colors become foundation colors)
- Design Tokens (extracted styles become brand choices)
- Inspiration for new presets and design variations