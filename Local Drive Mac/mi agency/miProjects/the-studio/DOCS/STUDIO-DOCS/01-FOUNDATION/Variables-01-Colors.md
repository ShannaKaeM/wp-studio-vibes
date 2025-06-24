# Foundation Variables: Colors

## From V2 (VARIABLES-V2.md)

```css
/* ===== THEME COLORS ===== */
/* Base brand colors */
--color-primary: oklch(56.9% 0.042 198.223);
--color-primary-content: oklch(48.9% 0 263.283);
--color-secondary: oklch(55.7% 0.047 44.053);
--color-secondary-content: oklch(100% 0 263.283);
--color-neutral: oklch(77.6% 0.024 93.421);
--color-neutral-content: oklch(100% 0 263.283);
--color-base: oklch(50% 0 263.283);
--color-base-content: oklch(100% 0 263.283);

/* Notification colors */
--color-success: oklch(75.6% 0.135 147.012);
--color-warning: oklch(85.3% 0.145 85.833);
--color-error: oklch(68.8% 0.178 22.933);
--color-info: oklch(71.3% 0.097 247.132);
--color-notifications-content: oklch(100% 0 263.283);

/* Utility colors */
--color-dark: oklch(0% 0 263.283);
--color-light: oklch(100% 0 263.283);
--color-transparent: transparent;
--color-current: currentColor;
```

## From V3 (VARIABLES-V3-Daniels.md)

```css
/* ===== BASE SEMANTIC VARIABLES ===== */

/* Core Colors */
--color-core-dark: #000;
--color-core-light: #fff;

/* Shadow Colors */
--color-shadow-dark: 220 3% 15%;
--shadow-strength: 1%;

/* ===== THEME COLORS (Shadcn/UI Light Theme) ===== */
/* Note: These are HSL values, different from V2's OKLCH approach */
--background: 240 4.8% 95.9%;
--foreground: 222.2 84% 4.9%;
--card: 0 0% 100%;
--card-foreground: 222.2 84% 4.9%;
--popover: 0 0% 100%;
--popover-foreground: 222.2 84% 4.9%;
--primary: 220 13% 18%;
--primary-foreground: 210 40% 98%;
--secondary: 210 40% 96%;
--secondary-foreground: 222.2 84% 4.9%;
--muted: 210 40% 96%;
--muted-foreground: 215.4 16.3% 46.9%;
--accent: 210 40% 96%;
--accent-foreground: 222.2 84% 4.9%;
--destructive: 0 84.2% 60.2%;
--destructive-foreground: 210 40% 98%;
--border: 214.3 31.8% 91.4%;
--input: 214.3 31.8% 91.4%;
--ring: 222.2 84% 4.9%;
--chart-1: 12 76% 61%;
--chart-2: 173 58% 39%;
--chart-3: 197 37% 24%;
--chart-4: 43 74% 66%;
--chart-5: 27 87% 67%;
```

## Analysis & Recommendations

### Key Differences:
1. **Color Format**: V2 uses OKLCH (perceptually uniform), V3 uses HSL
2. **Naming Convention**: 
   - V2: `--color-primary`, `--color-secondary`
   - V3: `--primary`, `--secondary` (shorter)
3. **Content Colors**: V2 explicitly defines content colors for each theme color
4. **Unique to V3**:
   - Core colors (`--color-core-dark`, `--color-core-light`)
   - Shadow system with strength variable
   - Shadcn/UI semantic colors (background, foreground, card, etc.)
   - Chart colors

### Recommendations:
1. **Keep V2's OKLCH approach** for brand colors (aligns with our color system)
2. **Add from V3**:
   - Core colors as absolute references
   - Shadow color system (useful for dynamic theming)
3. **Consider**: Whether to adopt Shadcn/UI semantic naming for components
