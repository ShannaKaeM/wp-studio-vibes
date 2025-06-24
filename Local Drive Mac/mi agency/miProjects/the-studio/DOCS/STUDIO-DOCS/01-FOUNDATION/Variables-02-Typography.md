# Foundation Variables: Typography

## From V2 (VARIABLES-V2.md)

```css
/* ===== TYPOGRAPHY ===== */
/* Extended Font Families - Professional Typography */
--font-system-ui: system-ui, sans-serif;
--font-transitional: Charter, Bitstream Charter, Sitka Text, Cambria, serif;
--font-old-style: Iowan Old Style, Palatino Linotype, URW Palladio L, P052, serif;
--font-humanist: Seravek, Gill Sans Nova, Ubuntu, Calibri, DejaVu Sans, source-sans-pro, sans-serif;
--font-geometric-humanist: Avenir, Montserrat, Corbel, URW Gothic, source-sans-pro, sans-serif;
--font-classical-humanist: Optima, Candara, Noto Sans, source-sans-pro, sans-serif;
--font-neo-grotesque: Inter, Roboto, Helvetica Neue, Arial Nova, Nimbus Sans, Arial, sans-serif;
--font-monospace-slab-serif: Nimbus Mono PS, Courier New, monospace;
--font-monospace-code: Dank Mono, Operator Mono, Inconsolata, Fira Mono, ui-monospace, SF Mono,Monaco, Droid Sans Mono, Source Code Pro, Cascadia Code,Menlo, Consolas, DejaVu Sans Mono, monospace;
--font-industrial: Bahnschrift, DIN Alternate, Franklin Gothic Medium, Nimbus Sans Narrow, sans-serif-condensed, sans-serif;
--font-rounded-sans: ui-rounded, Hiragino Maru Gothic ProN, Quicksand, Comfortaa, Manjari, Arial Rounded MT, Arial Rounded MT Bold, Calibri, source-sans-pro, sans-serif;
--font-slab-serif: Rockwell, Rockwell Nova, Roboto Slab, DejaVu Serif, Sitka Small, serif;
--font-antique: Superclarendon, Bookman Old Style, URW Bookman, URW Bookman L, Georgia Pro, Georgia, serif;
--font-didone: Didot, Bodoni MT, Noto Serif Display, URW Palladio L, P052, Sylfaen, serif;
--font-handwritten: Segoe Print, Bradley Hand, Chilanka, TSCu_Comic, casual, cursive;

/* Basic Font Families (Tailwind-compatible) */
--font-sans: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
--font-serif: Georgia, Cambria, "Times New Roman", Times, serif;
--font-mono: "Fira Code", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;

/* Note: V2 does not include:
   - Font sizes
   - Font weights
   - Line heights
   - Letter spacing
*/
```

## From V3 (VARIABLES-V3-Daniels.md)

```css
/* ===== TYPOGRAPHY ===== */

/* Font Families */
--font-sans: system-ui, sans-serif;
--font-serif: Charter, Bitstream Charter, Sitka Text, Cambria, serif;
--font-mono: Dank Mono, Operator Mono, Inconsolata, Fira Mono, ui-monospace, SF Mono, Monaco, Droid Sans Mono, Source Code Pro, Cascadia Code, Menlo, Consolas, DejaVu Sans Mono, monospace;
--font-display: Avenir, Montserrat, Corbel, URW Gothic, source-sans-pro, sans-serif;
--font-handwriting: Segoe Print, Bradley Hand, Chilanka, TSCu_Comic, casual, cursive;

/* Font Sizes - Semantic Naming */
--text-xs: 0.75rem;
--text-xs--line-height: calc(1 / 0.75);
--text-sm: 0.875rem;
--text-sm--line-height: calc(1.25 / 0.875);
--text-base: 1rem;
--text-base--line-height: calc(1.5 / 1);
--text-lg: 1.125rem;
--text-lg--line-height: calc(1.75 / 1.125);
--text-xl: 1.25rem;
--text-xl--line-height: calc(1.75 / 1.25);
--text-2xl: 1.5rem;
--text-2xl--line-height: calc(2 / 1.5);
--text-3xl: 1.875rem;
--text-3xl--line-height: calc(2.25 / 1.875);
--text-4xl: 2.25rem;
--text-4xl--line-height: calc(2.5 / 2.25);
--text-5xl: 3rem;
--text-5xl--line-height: 1;
--text-6xl: 3.75rem;
--text-6xl--line-height: 1;
--text-7xl: 4.5rem;
--text-7xl--line-height: 1;
--text-8xl: 6rem;
--text-8xl--line-height: 1;
--text-9xl: 8rem;
--text-9xl--line-height: 1;

/* Fluid Font Sizes */
--text-fluid-xs: clamp(0.75rem, 2vw, 1rem);
--text-fluid-sm: clamp(1rem, 4vw, 1.5rem);
--text-fluid-md: clamp(1.5rem, 6vw, 2.5rem);
--text-fluid-lg: clamp(2rem, 9vw, 3.5rem);

/* Font Weights */
--font-weight-thin: 100;
--font-weight-extralight: 200;
--font-weight-light: 300;
--font-weight-normal: 400;
--font-weight-medium: 500;
--font-weight-semibold: 600;
--font-weight-bold: 700;
--font-weight-extrabold: 800;
--font-weight-black: 900;

/* Letter Spacing */
--tracking-tighter: -0.05em;
--tracking-tight: -0.025em;
--tracking-normal: 0em;
--tracking-wide: 0.025em;
--tracking-wider: 0.05em;
--tracking-widest: 0.1em;

/* Line Heights */
--leading-none: 1;
--leading-tight: 1.25;
--leading-snug: 1.375;
--leading-normal: 1.5;
--leading-relaxed: 1.625;
--leading-loose: 2;
```

## Analysis & Recommendations

### Key Differences:
1. **Font Families**: 
   - V2 has extensive professional typography categories
   - V3 has simpler, more practical set
   - Both share some common fonts but V2 is more comprehensive

2. **Font Sizes**: 
   - V2 has none
   - V3 has complete scale with paired line heights

3. **Font Weights, Letter Spacing, Line Heights**:
   - V2 has none
   - V3 has complete sets

4. **Fluid Typography**:
   - Only in V3

### Recommendations:
1. **Use V2's extensive font family categories** (more professional options)
2. **Add from V3**:
   - Font size scale with line heights
   - Font weights
   - Letter spacing
   - Line heights
   - Fluid font sizes
3. **Consider**: Creating a mapping between V2's font categories and V3's simpler names
