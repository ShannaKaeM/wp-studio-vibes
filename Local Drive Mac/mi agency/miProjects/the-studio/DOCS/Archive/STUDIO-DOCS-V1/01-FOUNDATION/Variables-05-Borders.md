# Foundation Variables: Borders & Radius

## From V2 (VARIABLES-V2.md)

```css
/* Component-specific variables (includes border/radius) */
--radius-selector: .5rem;
--radius-field: .25rem;
--radius-box: .5rem;
--size-selector: .25rem;
--size-field: .25rem;
--border: 1px;

/* Note: V2 has limited border/radius variables, mostly component-specific */
```

## From V3 (VARIABLES-V3-Daniels.md)

```css
/* Border Radius */
--radius-none: 0;
--radius-xs: 0.125rem;
--radius-sm: 0.25rem;
--radius-md: 0.375rem;
--radius-lg: 0.5rem;
--radius-xl: 0.75rem;
--radius-2xl: 1rem;
--radius-3xl: 1.5rem;
--radius-4xl: 2rem;
--radius-full: 9999px;

/* Note: V3 doesn't include border width or style variables */
```

## Analysis & Recommendations

### Key Differences:
1. **Border Radius**:
   - V2: Component-specific (selector, field, box)
   - V3: Comprehensive scale (xs to 4xl plus full)

2. **Border Width**:
   - V2: Single `--border: 1px`
   - V3: No border width variables

3. **Border Styles**:
   - Neither version includes border style variables

### Missing Variables to Consider:
```css
/* Border Widths */
--border-0: 0;
--border-1: 1px;
--border-2: 2px;
--border-4: 4px;
--border-8: 8px;

/* Border Styles */
--border-solid: solid;
--border-dashed: dashed;
--border-dotted: dotted;
--border-double: double;
--border-none: none;
```

### Recommendations:
1. **Use V3's comprehensive radius scale** as the foundation
2. **Keep V2's component-specific radius** for backward compatibility
3. **Add border width scale** (missing from both)
4. **Add border style constants** (missing from both)
5. **Consider adding outline variables** for accessibility
