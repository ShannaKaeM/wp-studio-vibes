# Foundation Variables: Effects (Shadows, Blur, Filters)

## From V2 (VARIABLES-V2.md)

```css
/* Component-specific variables */
--depth: 1;
--noise: 0;

/* Note: V2 has minimal effect variables */
```

## From V3 (VARIABLES-V3-Daniels.md)

```css
/* ===== SHADOWS & EFFECTS ===== */

/* Box Shadows */
--shadow-2xs: 0 1px rgb(0 0 0 / 0.05);
--shadow-xs: 0 1px 2px 0 rgb(0 0 0 / 0.05);
--shadow-sm: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
--shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
--shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
--shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
--shadow-2xl: 0 25px 50px -12px rgb(0 0 0 / 0.25);

/* Complex Shadows with Theme Colors */
--shadow-theme-sm: 0 1px 2px -1px hsl(var(--color-shadow-dark) / calc(var(--shadow-strength) + 9%));
--shadow-theme-md: 0 3px 5px -2px hsl(var(--color-shadow-dark) / calc(var(--shadow-strength) + 3%)), 0 7px 14px -5px hsl(var(--color-shadow-dark) / calc(var(--shadow-strength) + 5%));
--shadow-theme-lg: 0 -1px 3px 0 hsl(var(--color-shadow-dark) / calc(var(--shadow-strength) + 2%)), 0 1px 2px -5px hsl(var(--color-shadow-dark) / calc(var(--shadow-strength) + 2%)), 0 2px 5px -5px hsl(var(--color-shadow-dark) / calc(var(--shadow-strength) + 4%)), 0 4px 12px -5px hsl(var(--color-shadow-dark) / calc(var(--shadow-strength) + 5%)), 0 12px 15px -5px hsl(var(--color-shadow-dark) / calc(var(--shadow-strength) + 7%));

/* Inner Shadows */
--shadow-inner-highlight: inset 0 -0.5px 0 0 #fff, inset 0 0.5px 0 0 #0001;
--shadow-inner-xs: inset 0 0 0 1px hsl(var(--color-shadow-dark) / calc(var(--shadow-strength) + 9%));
--shadow-inner-sm: inset 0 1px 2px 0 hsl(var(--color-shadow-dark) / calc(var(--shadow-strength) + 9%)), var(--shadow-inner-highlight);
--shadow-inner-md: inset 0 1px 4px 0 hsl(var(--color-shadow-dark) / calc(var(--shadow-strength) + 9%)), var(--shadow-inner-highlight);
--shadow-inner-lg: inset 0 2px 8px 0 hsl(var(--color-shadow-dark) / calc(var(--shadow-strength) + 9%)), var(--shadow-inner-highlight);

/* Inset Shadows */
--inset-shadow-2xs: inset 0 1px rgb(0 0 0 / 0.05);
--inset-shadow-xs: inset 0 1px 1px rgb(0 0 0 / 0.05);
--inset-shadow-sm: inset 0 2px 4px rgb(0 0 0 / 0.05);

/* Drop Shadows */
--drop-shadow-xs: 0 1px 1px rgb(0 0 0 / 0.05);
--drop-shadow-sm: 0 1px 2px rgb(0 0 0 / 0.15);
--drop-shadow-md: 0 3px 3px rgb(0 0 0 / 0.12);
--drop-shadow-lg: 0 4px 4px rgb(0 0 0 / 0.15);
--drop-shadow-xl: 0 9px 7px rgb(0 0 0 / 0.1);
--drop-shadow-2xl: 0 25px 25px rgb(0 0 0 / 0.15);

/* Text Shadows */
--text-shadow-2xs: 0px 1px 0px rgb(0 0 0 / 0.15);
--text-shadow-xs: 0px 1px 1px rgb(0 0 0 / 0.2);
--text-shadow-sm: 0px 1px 0px rgb(0 0 0 / 0.075), 0px 1px 1px rgb(0 0 0 / 0.075), 0px 2px 2px rgb(0 0 0 / 0.075);
--text-shadow-md: 0px 1px 1px rgb(0 0 0 / 0.1), 0px 1px 2px rgb(0 0 0 / 0.1), 0px 2px 4px rgb(0 0 0 / 0.1);
--text-shadow-lg: 0px 1px 2px rgb(0 0 0 / 0.1), 0px 3px 2px rgb(0 0 0 / 0.1), 0px 4px 8px rgb(0 0 0 / 0.1);

/* Blur Effects */
--blur-xs: 4px;
--blur-sm: 8px;
--blur-md: 12px;
--blur-lg: 16px;
--blur-xl: 24px;
--blur-2xl: 40px;
--blur-3xl: 64px;
```

## Analysis & Recommendations

### Key Differences:
1. **Shadow System**:
   - V2: Only has `--depth` variable
   - V3: Comprehensive shadow system with multiple types

2. **Shadow Types in V3**:
   - Box shadows (standard elevation)
   - Theme-aware shadows (dynamic with color variables)
   - Inner shadows (inset effects)
   - Drop shadows (for filters)
   - Text shadows

3. **Blur Effects**:
   - V2: None
   - V3: Complete blur scale

4. **Special Features**:
   - V3's theme-aware shadows use `--color-shadow-dark` and `--shadow-strength`
   - Dynamic shadow calculations based on theme

### Recommendations:
1. **Adopt V3's comprehensive shadow system** entirely
2. **Keep V2's `--depth` variable** for backward compatibility
3. **The theme-aware shadow system** is particularly powerful for dynamic theming
4. **Consider adding**:
   - Opacity scale
   - Brightness/contrast filters
   - Backdrop blur values
