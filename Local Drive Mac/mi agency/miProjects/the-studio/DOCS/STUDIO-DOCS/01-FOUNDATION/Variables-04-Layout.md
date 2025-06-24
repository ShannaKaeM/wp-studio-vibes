# Foundation Variables: Layout & Containers

## From V2 (VARIABLES-V2.md)

```css
/* ===== BREAKPOINTS & CONTAINERS ===== */
/* Breakpoints */
--breakpoint-sm: 40rem;
--breakpoint-md: 48rem;
--breakpoint-lg: 64rem;
--breakpoint-xl: 80rem;
--breakpoint-2xl: 96rem;

/* Containers */
--container-3xs: 16rem;
--container-2xs: 18rem;
--container-xs: 20rem;
--container-sm: 24rem;
--container-md: 28rem;
--container-lg: 32rem;
--container-xl: 36rem;
--container-2xl: 42rem;
--container-3xl: 48rem;
--container-4xl: 56rem;
--container-5xl: 64rem;
--container-6xl: 72rem;
--container-7xl: 80rem;
--container-8xl: 88rem;
--container-9xl: 96rem;

/* ===== LAYOUT & POSITIONING ===== */
/* Grid Template Columns */
--grid-cols-1: repeat(1, minmax(0, 1fr));
--grid-cols-2: repeat(2, minmax(0, 1fr));
--grid-cols-3: repeat(3, minmax(0, 1fr));
--grid-cols-4: repeat(4, minmax(0, 1fr));
--grid-cols-5: repeat(5, minmax(0, 1fr));
--grid-cols-6: repeat(6, minmax(0, 1fr));
--grid-cols-7: repeat(7, minmax(0, 1fr));
--grid-cols-8: repeat(8, minmax(0, 1fr));
--grid-cols-9: repeat(9, minmax(0, 1fr));
--grid-cols-10: repeat(10, minmax(0, 1fr));
--grid-cols-11: repeat(11, minmax(0, 1fr));
--grid-cols-12: repeat(12, minmax(0, 1fr));
--grid-cols-none: none;

/* Grid Template Rows */
--grid-rows-1: repeat(1, minmax(0, 1fr));
--grid-rows-2: repeat(2, minmax(0, 1fr));
--grid-rows-3: repeat(3, minmax(0, 1fr));
--grid-rows-4: repeat(4, minmax(0, 1fr));
--grid-rows-5: repeat(5, minmax(0, 1fr));
--grid-rows-6: repeat(6, minmax(0, 1fr));
--grid-rows-none: none;

/* Gap Scale */
--gap-px: 1px;
--gap-0: 0;
--gap-0_5: 0.125rem;
--gap-1: 0.25rem;
--gap-1_5: 0.375rem;
--gap-2: 0.5rem;
--gap-2_5: 0.625rem;
--gap-3: 0.75rem;
--gap-3_5: 0.875rem;
--gap-4: 1rem;
--gap-5: 1.25rem;
--gap-6: 1.5rem;
--gap-7: 1.75rem;
--gap-8: 2rem;
--gap-9: 2.25rem;
--gap-10: 2.5rem;
--gap-11: 2.75rem;
--gap-12: 3rem;
--gap-14: 3.5rem;
--gap-16: 4rem;
--gap-20: 5rem;
--gap-24: 6rem;
--gap-28: 7rem;
--gap-32: 8rem;
--gap-36: 9rem;
--gap-40: 10rem;
--gap-44: 11rem;
--gap-48: 12rem;
--gap-52: 13rem;
--gap-56: 14rem;
--gap-60: 15rem;
--gap-64: 16rem;
--gap-72: 18rem;
--gap-80: 20rem;
--gap-96: 24rem;

/* Z-Index Scale */
--z-auto: auto;
--z-0: 0;
--z-10: 10;
--z-20: 20;
--z-30: 30;
--z-40: 40;
--z-50: 50;
--z-60: 60;
--z-70: 70;
--z-80: 80;
--z-90: 90;
--z-100: 100;
```

## From V3 (VARIABLES-V3-Daniels.md)

```css
/* ===== LAYOUT ===== */

/* Breakpoints */
--breakpoint-sm: 40rem;
--breakpoint-md: 48rem;
--breakpoint-lg: 64rem;
--breakpoint-xl: 80rem;
--breakpoint-2xl: 96rem;

/* Container Sizes */
--container-3xs: 16rem;
--container-2xs: 18rem;
--container-xs: 20rem;
--container-sm: 24rem;
--container-md: 28rem;
--container-lg: 32rem;
--container-xl: 36rem;
--container-2xl: 42rem;
--container-3xl: 48rem;
--container-4xl: 56rem;
--container-5xl: 64rem;
--container-6xl: 72rem;
--container-7xl: 80rem;
--container-8xl: 88rem;
--container-9xl: 96rem;

/* Aspect Ratios */
--aspect-square: 1 / 1;
--aspect-video: 16 / 9;
--aspect-photo: 4 / 3;
--aspect-ultrawide: 21 / 9;

/* ===== 3D & PERSPECTIVE ===== */

/* Perspective */
--perspective-dramatic: 100px;
--perspective-near: 300px;
--perspective-normal: 500px;
--perspective-midrange: 800px;
--perspective-distant: 1200px;
```

## Analysis & Recommendations

### Key Differences:
1. **Core Layout Variables**:
   - Breakpoints and containers are identical in both versions
   - Both use the same rem-based scale

2. **Grid System**:
   - Only in V2 (grid-cols, grid-rows)
   - V3 doesn't include grid template variables

3. **Gap Scale**:
   - Only in V2
   - Comprehensive numeric scale

4. **Z-Index Scale**:
   - Only in V2
   - Standard 0-100 scale

5. **Unique to V3**:
   - Aspect ratios (square, video, photo, ultrawide)
   - 3D perspective values

### Recommendations:
1. **Use V2's comprehensive layout system** (includes grid and gap)
2. **Add from V3**:
   - Aspect ratios (useful for media containers)
   - Perspective values (for 3D effects)
3. **Keep the identical breakpoints and containers** from both
