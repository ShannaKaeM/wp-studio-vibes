/**
 * Studio Theme Variables - Comprehensive Design System
 * CSS Variables → Dynamic Controls System
 * "Variables for Controls essentially" - Daniel
 * Enhanced with Tailwind-compatible utilities
 */

:root {

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

    /* Component-specific variables */
    --radius-selector: .5rem;
    --radius-field: .25rem;
    --radius-box: .5rem;
    --size-selector: .25rem;
    --size-field: .25rem;
    --border: 1px;
    --depth: 1;
    --noise: 0;

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

    /* ===== LAYOUT & POSITIONING ===== */
    /* Grid Template Columns */
    --grid-cols-1: repeat(1, minmax(0, 1fr));
    --grid-cols-2: repeat(2, minmax(0, 1fr));
    --grid-cols-3: repeat(3, minmax(0, 1fr));
    --grid-cols-4: repeat(4, minmax(0, 1fr));
    --grid-cols-5: repeat(5, minmax(0, 1fr));
    --grid-cols-6: repeat(6, minmax(0, 1fr));
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
    --gap-0: 0;
    --gap-1: var(--width-scale-1);
    --gap-2: var(--width-scale-2);
    --gap-3: var(--width-scale-3);
    --gap-4: var(--width-scale-4);
    --gap-6: var(--width-scale-6);
    --gap-8: var(--width-scale-8);
    --gap-12: var(--width-scale-12);
    --gap-16: var(--width-scale-16);
    --gap-20: var(--width-scale-20);
    --gap-24: var(--width-scale-24);

    /* Flex Values */
    --flex-1: 1 1 0%;
    --flex-auto: 1 1 auto;
    --flex-initial: 0 1 auto;
    --flex-none: none;

    /* Z-Index Scale */
    --z-0: 0;
    --z-10: 10;
    --z-20: 20;
    --z-30: 30;
    --z-40: 40;
    --z-50: 50;
    --z-auto: auto;

    /* ===== TYPOGRAPHY ===== */
    /* Font Sizes */
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

    /* Fluid Text Sizes */
    --font-size-fluid-xs: clamp(.75rem, 2vw, 1rem);
    --font-size-fluid-sm: clamp(1rem, 4vw, 1.5rem);
    --font-size-fluid-md: clamp(1.5rem, 6vw, 2.5rem);
    --font-size-fluid-lg: clamp(2rem, 9vw, 3.5rem);

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

    /* Tracking and Leading */
    --tracking-tighter: -0.05em;
    --tracking-tight: -0.025em;
    --tracking-normal: 0em;
    --tracking-wide: 0.025em;
    --tracking-wider: 0.05em;
    --tracking-widest: 0.1em;
    --leading-tight: 1.25;
    --leading-snug: 1.375;
    --leading-normal: 1.5;
    --leading-relaxed: 1.625;
    --leading-loose: 2;

    /* ===== BORDERS & RADIUS ===== */
    /* Border Widths */
    --border-0: 0;
    --border-1: 1px;
    --border-2: 2px;
    --border-4: 4px;
    --border-8: 8px;

    /* Radius */
    --radius-xs: 0.125rem;
    --radius-sm: 0.25rem;
    --radius-md: 0.375rem;
    --radius-lg: 0.5rem;
    --radius-xl: 0.75rem;
    --radius-2xl: 1rem;
    --radius-3xl: 1.5rem;
    --radius-4xl: 2rem;
    --radius-full: 9999px;

    /* ===== SHADOWS & EFFECTS ===== */
    /* Box Shadows */
    --shadow-2xs: 0 1px rgb(0 0 0 / 0.05);
    --shadow-xs: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-sm: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
    --shadow-2xl: 0 25px 50px -12px rgb(0 0 0 / 0.25);

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
    --text-shadow-xs: 0px 1px 1px rgb(0 0 0 / 0.2);
    --text-shadow-sm: 0px 1px 0px rgb(0 0 0 / 0.075), 0px 1px 1px rgb(0 0 0 / 0.075), 0px 2px 2px rgb(0 0 0 / 0.075);
    --text-shadow-md: 0px 1px 1px rgb(0 0 0 / 0.1), 0px 1px 2px rgb(0 0 0 / 0.1), 0px 2px 4px rgb(0 0 0 / 0.1);
    --text-shadow-lg: 0px 1px 2px rgb(0 0 0 / 0.1), 0px 3px 2px rgba(0 0 0 / 0.1), 0px 4px 8px rgb(0 0 0 / 0.1);

    /* Opacity Scale */
    --opacity-0: 0;
    --opacity-5: 0.05;
    --opacity-10: 0.1;
    --opacity-20: 0.2;
    --opacity-25: 0.25;
    --opacity-30: 0.3;
    --opacity-40: 0.4;
    --opacity-50: 0.5;
    --opacity-60: 0.6;
    --opacity-70: 0.7;
    --opacity-75: 0.75;
    --opacity-80: 0.8;
    --opacity-90: 0.9;
    --opacity-95: 0.95;
    --opacity-100: 1;

    /* ===== TRANSITIONS & ANIMATIONS ===== */
    /* Transitions */
    --ease-in: cubic-bezier(0.4, 0, 1, 1);
    --ease-out: cubic-bezier(0, 0, 0.2, 1);
    --ease-in-out: cubic-bezier(0.4, 0, 0.2, 1);

    /* Animations */
    --animate-spin: spin 1s linear infinite;
    --animate-ping: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
    --animate-pulse: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    --animate-bounce: bounce 1s infinite;

    /* ===== TRANSFORM VALUES ===== */
    /* Scale */
    --scale-0: 0;
    --scale-50: 0.5;
    --scale-75: 0.75;
    --scale-90: 0.9;
    --scale-95: 0.95;
    --scale-100: 1;
    --scale-105: 1.05;
    --scale-110: 1.1;
    --scale-125: 1.25;
    --scale-150: 1.5;

    /* Rotate */
    --rotate-0: 0deg;
    --rotate-1: 1deg;
    --rotate-2: 2deg;
    --rotate-3: 3deg;
    --rotate-6: 6deg;
    --rotate-12: 12deg;
    --rotate-45: 45deg;
    --rotate-90: 90deg;
    --rotate-180: 180deg;

    /* ===== FILTERS ===== */
    /* Blur */
    --blur-xs: 4px;
    --blur-sm: 8px;
    --blur-md: 12px;
    --blur-lg: 16px;
    --blur-xl: 24px;
    --blur-2xl: 40px;
    --blur-3xl: 64px;

    /* Perspective */
    --perspective-dramatic: 100px;
    --perspective-near: 300px;
    --perspective-normal: 500px;
    --perspective-midrange: 800px;
    --perspective-distant: 1200px;

    /* ===== ASPECT RATIOS ===== */
    --aspect-auto: auto;
    --aspect-square: 1 / 1;
    --aspect-video: 16 / 9;
    --aspect-portrait: 3 / 4;
    --aspect-landscape: 4 / 3;
    --aspect-ultrawide: 21 / 9;
    --aspect-golden: 1.618 / 1;
    --aspect-photo: 3 / 2;
    --aspect-cinema: 2.39 / 1;

    /* ===== INTERACTIVITY ===== */
    /* Cursor */
    --cursor-auto: auto;
    --cursor-default: default;
    --cursor-pointer: pointer;
    --cursor-wait: wait;
    --cursor-text: text;
    --cursor-move: move;
    --cursor-not-allowed: not-allowed;

    /* User Select */
    --select-none: none;
    --select-text: text;
    --select-all: all;
    --select-auto: auto;

    /* Pointer Events */
    --pointer-events-none: none;
    --pointer-events-auto: auto;

    /* ===== DEFAULTS ===== */
    --default-transition-duration: 150ms;
    --default-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    --default-font-family: var(--font-sans);
    --default-mono-font-family: var(--font-mono);
}