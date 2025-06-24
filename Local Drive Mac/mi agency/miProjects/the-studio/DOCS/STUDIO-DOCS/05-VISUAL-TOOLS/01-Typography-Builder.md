# Tools - Typography Visual Builder

## Tab Location
`THE STUDIO > TOOLS > Typography Builder`

## Purpose
Visual interface for building and testing typography configurations across all system layers. See relationships in real-time and export configurations.

## Builder Interface

### Layer Navigation
```
[Foundation] [Theme] [Presets] [Components]
     ↓         ↓         ↓          ↓
  Variables  Settings  Scales    Styles
```

### Visual Hierarchy Display
Shows live preview of all typography elements:

```
DISPLAY TEXT (60px)
Title Text (36px)
Subtitle Text (24px)
Body Text (16px)
Caption Text (14px)
```

## Foundation Layer Tools

### Variable Inspector
View and test foundation variables:
```
FONT SIZES
├── xs:    0.75rem  (12px)
├── sm:    0.875rem (14px)
├── base:  1rem     (16px)
├── lg:    1.125rem (18px)
├── xl:    1.25rem  (20px)
└── ...more

LINE HEIGHTS
├── none:    1
├── tight:   1.25
├── snug:    1.375
├── normal:  1.5
└── ...more
```

### Semantic Mapping Tool
Map semantic names to values:
```
"Tight" → 1.25
"Normal" → 1.5
"Relaxed" → 1.75
[+ Add Custom Mapping]
```

## Theme Settings Tools

### Base Value Calculator
Interactive controls for base settings:
```
BASE FONT SIZE
[────●────] 16px
↓ Updates all calculations

BASE FONT FAMILY
[Inter ▼] [System ▼] [Custom...]

BASE TEXT COLOR
[■] #1a1a1a → oklch(20% 0 0)
```

### Impact Preview
Shows how base changes affect entire system:
```
Change base from 16px → 18px:
• Display: 60px → 67.5px
• Title: 36px → 40.5px
• Body: 16px → 18px
```

## Preset Builder Tools

### Visual Preset Editor
```
PRESET: Minimal (Active)

DISPLAY ELEMENT
├── Size:    [×3.75] [60px] [375%] [6xl ▼]
├── Height:  [Tight ▼] [1.25] [Custom...]
├── Spacing: [-0.025em ▼] [Tight] [Custom...]
├── Weight:  [800 ▼] [Heavy] [Black]
└── Color:   [Base -40%] [■] [oklch(...)]

[Live Preview]
[Save Changes] [Save as New] [Reset]
```

### Calculation Builder
Visual formula editor:
```
Font Size = Base Size × [3.75]
            ↓
         16px × 3.75 = 60px
         
[Test with different base sizes]
```

### Preset Comparison
Side-by-side preset comparison:
```
[Minimal] vs [Dramatic]
Display: 60px     96px
Title:   36px     60px
Body:    16px     16px
```

## Component Tools

### Component Creator
```
NEW COMPONENT
Name: [Hero Title]
Base: [Display ▼]

INHERIT FROM PRESET
☑ Size (60px)
☑ Line Height (1.25)
☐ Letter Spacing (override)
☐ Weight (override)

OVERRIDES
Letter Spacing: [0.1em]
Text Transform: [UPPERCASE ▼]
Margin Bottom: [4rem]

[Preview] [Create Component]
```

### Override Manager
Visual display of inheritance:
```
CARD TITLE
├── From Preset: Title
│   ├── Size: 2.25rem ✓
│   ├── Weight: 700 ✓
│   └── Color: Base -30% ✓
└── Overrides:
    ├── Line Height: 1.2 ⚡
    └── Margin: 0.5rem ⚡
```

## Testing Tools

### Responsive Preview
```
[Desktop] [Tablet] [Mobile]

DISPLAY TEXT
Desktop: 60px
Tablet:  48px (auto)
Mobile:  36px (auto)
```

### Content Tester
Test with real content:
```
[Load Sample Text] [Paste Content]

Preview shows actual paragraphs,
headings, and mixed content with
current typography settings applied.
```

### Accessibility Checker
```
CONTRAST RATIOS
Display on BG: 12.5:1 ✓ AAA
Body on BG: 8.2:1 ✓ AAA
Caption on BG: 4.8:1 ✓ AA

READABILITY
Line Length: 65ch ✓ Optimal
Font Size: 16px ✓ Readable
```

## Export Tools

### Code Generator
```
EXPORT FORMAT
[CSS Variables] [SCSS] [JSON] [Theme.json]

[Include Comments] [Minify]
[Copy to Clipboard] [Download]
```

### Documentation Generator
Auto-generate docs from current config:
```
[Generate Typography Guide]
- Shows all elements
- Includes usage examples
- Lists all variables
- Shows calculations
```

## Workflow Integration

### Quick Actions
- **Test Drive**: Apply preset temporarily
- **A/B Compare**: Split screen comparison
- **History**: Undo/redo with timeline
- **Favorites**: Save preset combinations
- **Share**: Export shareable config URL

### AI Assistant Integration
```
"Make headers more dramatic"
→ AI adjusts multipliers
→ Preview changes
→ Accept/Modify/Reject
```

## Benefits
- **Visual Understanding**: See relationships clearly
- **Rapid Testing**: Try ideas instantly
- **No Code Required**: Visual controls for everything
- **Safe Experimentation**: Preview before applying
- **Learning Tool**: Understand system by using it
