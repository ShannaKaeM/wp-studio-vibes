# Foundation Variables: Motion & Animation

## From V2 (VARIABLES-V2.md)

```css
/* No motion or animation variables in V2 */
```

## From V3 (VARIABLES-V3-Daniels.md)

```css
/* ===== MOTION & ANIMATION ===== */

/* Transition Curves */
--ease-linear: linear;
--ease-in: cubic-bezier(0.4, 0, 1, 1);
--ease-out: cubic-bezier(0, 0, 0.2, 1);
--ease-in-out: cubic-bezier(0.4, 0, 0.2, 1);

/* Duration */
--duration-75: 75ms;
--duration-100: 100ms;
--duration-150: 150ms;
--duration-200: 200ms;
--duration-300: 300ms;
--duration-500: 500ms;
--duration-700: 700ms;
--duration-1000: 1000ms;

/* Animations */
--animate-spin: spin 1s linear infinite;
--animate-ping: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
--animate-pulse: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
--animate-bounce: bounce 1s infinite;
```

## Analysis & Recommendations

### Key Differences:
1. **Motion Variables**:
   - V2: None
   - V3: Complete motion system

2. **V3 Includes**:
   - Easing curves (standard set)
   - Duration scale (75ms to 1000ms)
   - Pre-defined animations

### Missing Variables to Consider:
```css
/* Additional Easings */
--ease-bounce: cubic-bezier(0.68, -0.55, 0.265, 1.55);
--ease-elastic: cubic-bezier(0.68, -0.55, 0.265, 1.55);

/* Transition Properties */
--transition-all: all var(--duration-200) var(--ease-in-out);
--transition-colors: background-color, border-color, color, fill, stroke var(--duration-200) var(--ease-in-out);
--transition-opacity: opacity var(--duration-200) var(--ease-in-out);
--transition-transform: transform var(--duration-200) var(--ease-in-out);

/* Animation Delays */
--delay-75: 75ms;
--delay-100: 100ms;
--delay-150: 150ms;
--delay-200: 200ms;
--delay-300: 300ms;
--delay-500: 500ms;
--delay-700: 700ms;
--delay-1000: 1000ms;
```

### Recommendations:
1. **Adopt V3's motion system entirely** (V2 has none)
2. **Consider adding**:
   - More easing curves (bounce, elastic)
   - Pre-composed transition properties
   - Animation delay scale
3. **Note**: Animation keyframes (@keyframes) need to be defined separately
