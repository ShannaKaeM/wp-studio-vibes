# Typography System Architecture Overview

## System Philosophy
The Studio typography system is built on **flexible input methods** at every level. Users can work visually or with code, use semantic names or exact values, and mix approaches as needed.

## Four-Layer Architecture

### 1. Foundation Layer (Core Variables)
**Location**: `THE STUDIO > CORE > Typography`
**Purpose**: Raw design tokens available for use

**What's Included**:
- Font size scale (xs through 6xl)
- Line height scale (none through loose)
- Letter spacing scale (tighter through wider)
- Font weight scale (thin through black)
- Font families (primary, secondary, accent, mono)

**Key Feature**: Semantic naming for human-friendly selection

### 2. Theme Settings Layer
**Location**: `THE STUDIO > THEME > Typography`
**Purpose**: Essential base values that presets calculate from

**What's Included**:
- Base font size (typically 16px/1rem)
- Base font family (primary selection)
- Base text color (for calculations)

**Key Feature**: Minimal settings that anchor the entire system

### 3. Design Presets Layer
**Location**: `THE STUDIO > PRESETS > Typography Scales`
**Purpose**: Define relationships between typography elements

**What's Included**:
- Size relationships (multipliers or direct values)
- Style properties for each element type
- Color calculations from base
- Multiple input methods for every property

**Key Feature**: Complete flexibility in how values are set

### 4. Component Styles Layer
**Location**: `THE STUDIO > COMPONENTS > Text Styles`
**Purpose**: Apply presets to specific use cases

**What's Included**:
- Default components (display, title, body, etc.)
- Custom components with selective overrides
- Inheritance from active preset
- Context-specific adjustments

**Key Feature**: Inherit everything, override anything

## Input Flexibility

### For Every Typography Property
Users can input values using:

1. **Semantic Selection**
   ```css
   line-height: var(--leading-tight);  /* From foundation */
   ```

2. **Direct Values**
   ```css
   line-height: 1.25;  /* Exact number */
   ```

3. **Calculations**
   ```css
   font-size: calc(var(--theme-base-size) * 2.25);  /* Relative to base */
   ```

4. **Percentages**
   ```css
   font-size: 225%;  /* Percentage of base */
   ```

### Visual Builder Interface
```
PROPERTY CONTROLS
├── [Dropdown] Semantic values
├── [Input] Direct value entry
├── [Slider] Visual adjustment
└── [Formula] Calculation builder
```

## Inheritance Flow

```
Foundation Variables
    ↓
Theme Base Settings
    ↓
Active Design Preset ←── [User selects/customizes]
    ↓
Component Styles ←────── [Optional overrides]
    ↓
Rendered Typography
```

## Example: Setting Display Text Size

### Method 1: Semantic
Select from dropdown: `6xl` → Uses `var(--text-6xl)`

### Method 2: Direct
Type value: `3.75rem` → Sets exact size

### Method 3: Calculated
Use multiplier: `×3.75` → Creates `calc(var(--theme-base-size) * 3.75)`

### Method 4: Percentage
Enter percent: `375%` → Converts to calculation

All methods achieve the same 60px result (with 16px base).

## Benefits of This Architecture

### For Designers
- Visual controls for everything
- See relationships clearly
- Test ideas instantly
- No coding required

### For Developers
- Clean variable structure
- Predictable inheritance
- Easy overrides
- Calculation flexibility

### For Teams
- Consistent terminology
- Shareable presets
- Clear documentation
- Version control friendly

## Quick Start Guide

1. **Set Base Values** (Theme Settings)
   - Choose base font size
   - Select primary font family
   - Set base text color

2. **Choose or Create Preset** (Design Presets)
   - Start with default (Minimal, Dramatic, Compact)
   - Adjust using any input method
   - Save custom presets

3. **Apply to Components** (Component Styles)
   - Use default components
   - Create custom components
   - Override specific properties

4. **Use in Content**
   - Apply component classes
   - Presets update globally
   - Components maintain overrides

## Integration Points

### With WordPress
- Generates theme.json typography settings
- Syncs with block editor
- Creates block style variations

### With GenerateBlocks
- Injects design tokens into GB interface
- Provides utility classes
- Enables visual selection

### With AI Features
- AI can suggest preset adjustments
- Analyzes content for optimal typography
- Maintains system constraints

## Future Enhancements

### Planned Features
- Responsive preset variations
- Context-aware adjustments
- Advanced calculation formulas
- Typography animation presets
- Accessibility optimization

### Expansion Pattern
This typography architecture serves as the model for:
- Color system (with similar flexibility)
- Spacing system (with calculations)
- Border system (with presets)
- Effects system (shadows, transforms)
