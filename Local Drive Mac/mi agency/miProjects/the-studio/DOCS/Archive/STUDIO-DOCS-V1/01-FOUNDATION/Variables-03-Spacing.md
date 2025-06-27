# Foundation Variables: Spacing & Sizing

## From V2 (VARIABLES-V2.md)

```css
/* ===== SPACING & SIZING ===== */
/* Base Spacing Variable */
--spacing: 0.25rem;

/* Spacing Calculations */
--spacing-xs: calc(var(--spacing) * 0.25);
--spacing-sm: calc(var(--spacing) * 0.5);
--spacing-md: calc(var(--spacing) * 0.75);
--spacing-lg: calc(var(--spacing) * 1);
--spacing-xl: calc(var(--spacing) * 1.5);
--spacing-2xl: calc(var(--spacing) * 2);
--spacing-3xl: calc(var(--spacing) * 3);
--spacing-4xl: calc(var(--spacing) * 4);

/* Fluid Spacing */
--spacing-fluid-xxs: clamp(.5rem, 1vw, 1rem);
--spacing-fluid-xs: clamp(1rem, 2vw, 1.5rem);
--spacing-fluid-sm: clamp(1.5rem, 3vw, 2rem);
--spacing-fluid-md: clamp(2rem, 4vw, 3rem);
--spacing-fluid-lg: clamp(4rem, 5vw, 5rem);
--spacing-fluid-xl: clamp(5rem, 7vw, 7.5rem);
--spacing-fluid-2xl: clamp(7.5rem, 10vw, 10rem);
--spacing-fluid-3xl: clamp(10rem, 20vw, 15rem);
--spacing-fluid-4xl: clamp(15rem, 30vw, 20rem);
--spacing-fluid-5xl: clamp(20rem, 40vw, 30rem);

/* Width Scale (Tailwind-inspired) */
--width-scale-1: 0.25rem;
--width-scale-2: 0.5rem;
--width-scale-3: 0.75rem;
--width-scale-4: 1rem;
--width-scale-5: 1.25rem;
--width-scale-6: 1.5rem;
--width-scale-8: 2rem;
--width-scale-10: 2.5rem;
--width-scale-12: 3rem;
--width-scale-16: 4rem;
--width-scale-20: 5rem;
--width-scale-24: 6rem;
--width-scale-32: 8rem;
--width-scale-40: 10rem;
--width-scale-48: 12rem;
--width-scale-56: 14rem;
--width-scale-64: 16rem;
--width-scale-72: 18rem;
--width-scale-80: 20rem;
--width-scale-96: 24rem;

/* Height Scale */
--height-scale-1: 0.25rem;
--height-scale-2: 0.5rem;
--height-scale-3: 0.75rem;
--height-scale-4: 1rem;
--height-scale-5: 1.25rem;
--height-scale-6: 1.5rem;
--height-scale-8: 2rem;
--height-scale-10: 2.5rem;
--height-scale-12: 3rem;
--height-scale-16: 4rem;
--height-scale-20: 5rem;
--height-scale-24: 6rem;
--height-scale-32: 8rem;
--height-scale-40: 10rem;
--height-scale-48: 12rem;
--height-scale-56: 14rem;
--height-scale-64: 16rem;
--height-scale-72: 18rem;
--height-scale-80: 20rem;
--height-scale-96: 24rem;

/* Common Fractions */
--size-f-tenth: 10%;
--size-f-third: 33.333333%;
--size-f-half: 50%;
--size-f-two-thirds: 66.666667%;
--size-f-three-quarters: 75%;
--size-f-full: 100%;

/* Max Block Size */
--size-full: 100%;

/* Max Inline Size */
--size-content-sm: 20ch;
--size-content-md: 45ch;
--size-content-lg: 60ch;

/* Max Width Scale (Tailwind) */
--max-width-none: none;
--max-width-xs: 20rem;
--max-width-sm: 24rem;
--max-width-md: 28rem;
--max-width-lg: 32rem;
--max-width-xl: 36rem;
--max-width-2xl: 42rem;
--max-width-3xl: 48rem;
--max-width-4xl: 56rem;
--max-width-5xl: 64rem;
--max-width-6xl: 72rem;
--max-width-7xl: 80rem;
--max-width-full: 100%;
--max-width-screen: 100vw;
```

## From V3 (VARIABLES-V3-Daniels.md)

```css
/* ===== SPACING & SIZING ===== */

/* Base Spacing Unit */
--spacing: 0.25rem;

/* Spacing Scale - Semantic */
--space-px: 1px;
--space-0: 0;
--space-0_5: calc(var(--spacing) * 0.5);
--space-1: calc(var(--spacing) * 1);
--space-1_5: calc(var(--spacing) * 1.5);
--space-2: calc(var(--spacing) * 2);
--space-2_5: calc(var(--spacing) * 2.5);
--space-3: calc(var(--spacing) * 3);
--space-3_5: calc(var(--spacing) * 3.5);
--space-4: calc(var(--spacing) * 4);
--space-5: calc(var(--spacing) * 5);
--space-6: calc(var(--spacing) * 6);
--space-7: calc(var(--spacing) * 7);
--space-8: calc(var(--spacing) * 8);
--space-9: calc(var(--spacing) * 9);
--space-10: calc(var(--spacing) * 10);
--space-11: calc(var(--spacing) * 11);
--space-12: calc(var(--spacing) * 12);
--space-14: calc(var(--spacing) * 14);
--space-16: calc(var(--spacing) * 16);
--space-20: calc(var(--spacing) * 20);
--space-24: calc(var(--spacing) * 24);
--space-28: calc(var(--spacing) * 28);
--space-32: calc(var(--spacing) * 32);
--space-36: calc(var(--spacing) * 36);
--space-40: calc(var(--spacing) * 40);
--space-44: calc(var(--spacing) * 44);
--space-48: calc(var(--spacing) * 48);
--space-52: calc(var(--spacing) * 52);
--space-56: calc(var(--spacing) * 56);
--space-60: calc(var(--spacing) * 60);
--space-64: calc(var(--spacing) * 64);
--space-72: calc(var(--spacing) * 72);
--space-80: calc(var(--spacing) * 80);
--space-96: calc(var(--spacing) * 96);

/* Fluid Spacing */
--space-fluid-xs: clamp(0.5rem, 1vw, 1rem);
--space-fluid-sm: clamp(1rem, 2vw, 1.5rem);
--space-fluid-md: clamp(1.5rem, 3vw, 2rem);
--space-fluid-lg: clamp(2rem, 4vw, 3rem);
--space-fluid-xl: clamp(4rem, 5vw, 5rem);
--space-fluid-2xl: clamp(5rem, 7vw, 7.5rem);
--space-fluid-3xl: clamp(7.5rem, 10vw, 10rem);
--space-fluid-4xl: clamp(10rem, 20vw, 15rem);
--space-fluid-5xl: clamp(15rem, 30vw, 20rem);
--space-fluid-6xl: clamp(20rem, 40vw, 30rem);

/* Size Scale */
--size-0: 0;
--size-px: 1px;
--size-0_5: 0.125rem;
--size-1: 0.25rem;
--size-1_5: 0.375rem;
--size-2: 0.5rem;
--size-2_5: 0.625rem;
--size-3: 0.75rem;
--size-3_5: 0.875rem;
--size-4: 1rem;
--size-5: 1.25rem;
--size-6: 1.5rem;
--size-7: 1.75rem;
--size-8: 2rem;
--size-9: 2.25rem;
--size-10: 2.5rem;
--size-11: 2.75rem;
--size-12: 3rem;
--size-14: 3.5rem;
--size-16: 4rem;
--size-20: 5rem;
--size-24: 6rem;
--size-28: 7rem;
--size-32: 8rem;
--size-36: 9rem;
--size-40: 10rem;
--size-44: 11rem;
--size-48: 12rem;
--size-52: 13rem;
--size-56: 14rem;
--size-60: 15rem;
--size-64: 16rem;
--size-72: 18rem;
--size-80: 20rem;
--size-96: 24rem;

/* Content Widths */
--prose-sm: 20ch;
--prose-base: 45ch;
--prose-lg: 60ch;
--prose-xl: 75ch;

/* Fractions */
--w-1_2: 50%;
--w-1_3: 33.333333%;
--w-2_3: 66.666667%;
--w-1_4: 25%;
--w-3_4: 75%;
--w-1_5: 20%;
--w-2_5: 40%;
--w-3_5: 60%;
--w-4_5: 80%;
--w-full: 100%;
```

## Analysis & Recommendations

### Key Differences:
1. **Spacing Naming**:
   - V2: `--spacing-xs`, `--spacing-sm` (semantic names)
   - V3: `--space-1`, `--space-2` (numeric scale)

2. **Scale Coverage**:
   - V2: Limited spacing scale (xs to 4xl)
   - V3: Extensive numeric scale (0 to 96)

3. **Width/Height Scales**:
   - V2: Separate `--width-scale-*` and `--height-scale-*`
   - V3: Single `--size-*` scale

4. **Content Widths**:
   - V2: `--size-content-*` (ch units)
   - V3: `--prose-*` (ch units)

5. **Fractions**:
   - V2: `--size-f-*` naming
   - V3: `--w-*` naming

### Recommendations:
1. **Keep both naming systems** - semantic (V2) for common use, numeric (V3) for precise control
2. **Use V3's extensive numeric scale** for more granular control
3. **Combine width/height into single size scale** (V3 approach is cleaner)
4. **Keep both content width naming conventions** for different use cases
