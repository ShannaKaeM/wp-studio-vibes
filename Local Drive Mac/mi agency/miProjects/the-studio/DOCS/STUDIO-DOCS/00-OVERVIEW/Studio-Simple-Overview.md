# The Studio - Simple Overview

## What is The Studio?

The Studio is a WordPress plugin that makes it easy to control how your website looks. Think of it like a control panel for your site's design.

## How It Works (Like Building with Blocks)

### 1. Foundation (The Basic Pieces)
These are your basic building blocks - like LEGO pieces:
- **Colors**: primary, secondary, neutral
- **Sizes**: small, medium, large, xl
- **Spacing**: tight, normal, loose
- **Fonts**: heading font, body font

### 2. Settings (Your Choices)
This is where you pick what you want:
- Choose your brand colors
- Pick your fonts
- Set your sizes
- All with easy controls (dropdowns, sliders, inputs)

### 3. Components (The Things You Build)
These are the basic building blocks with **default styling**:
- **Title**: styled headings
- **Text**: styled paragraphs  
- **Button**: styled clickable elements
- **Image**: styled media elements

They look good out of the box!

### 4. Scopes (Contexts for Components)
These define **WHERE** your components live:
- **Card**: components inside a card box
- **Hero**: components inside a banner
- **Form**: components inside a form
- **Modal**: components inside a popup

Each scope gives its children specific styling!

### 5. Scope Modifiers (Special Themes)
These are like filters that change the **MOOD** of a scope:
- **Holiday**: makes any scope festive
- **Property**: real estate styling
- **Luxury**: premium look
- **Minimal**: clean and simple

Add these to ANY scope to change its theme!

## The Magic Part

You combine **SCOPES** + **MODIFIERS** to create themed sections:

```html
<!-- Card scope (default card styling) -->
<div class="card">
  <h2 class="title">Welcome</h2>
  <p class="text">This is a card</p>
</div>

<!-- Card scope + Holiday modifier -->
<div class="card holiday">
  <h2 class="title">Holiday Sale!</h2>
  <p class="text">Festive deals inside!</p>
</div>

<!-- Hero scope + Luxury modifier -->
<div class="hero luxury">
  <h1 class="title">Premium Experience</h1>
  <button class="button">Explore</button>
</div>
```

How it works:
- `card` = defines card context (padding, borders, shadows)
- `holiday` = adds festive theme (colors, decorations)
- `card holiday` = festive card!

## The Smart Typography System

Instead of confusing numbers, you get THREE ways to set sizes:

1. **T-Shirt Sizes**: Small, Medium, Large, XL
2. **Scale**: 1x, 1.25x, 1.5x, 2x
3. **Exact**: 16px, 20px, 24px

Pick ANY one and the others update automatically!

Example:
- You pick "Large" 
- It shows you: 1.25x scale
- It shows you: 20px

Now you understand that Large = 1.25x = 20px!

## How Components Work

### Step 1: Base Components
Components with **default styling** (look good already!):
- `.title` - styled heading (has font, size, color)
- `.text` - styled paragraph (has spacing, line-height)
- `.button` - styled button (has padding, colors, hover)
- `.wrapper` - styled container (has spacing)

### Step 2: Add Scope (Context)
Put them inside a scope for **contextual styling**:
- `.card .title` - title styled for cards
- `.hero .title` - title styled for heroes (bigger!)
- `.form .title` - title styled for forms

### Step 3: Add Modifier (Theme)
Add a modifier to change the **entire mood**:
- `.card holiday .title` - festive card title
- `.hero luxury .title` - premium hero title
- `.form minimal .title` - clean form title

## WordPress Integration

The Studio works WITH WordPress, not against it:

1. **Uses WordPress Filters**: We don't fight WordPress, we work with it
2. **Respects theme.json**: Your theme settings stay in control
3. **Clean and Simple**: No messy overrides or !important

## What Makes This Special?

1. **Educational**: Shows you HOW things work, not just what
2. **Flexible**: Use it simple or advanced - your choice
3. **Consistent**: Everything uses the same system
4. **WordPress Native**: Works with any theme

## Plugin Structure

The plugin has tabs that match our system:

1. **Foundation Tab**: Set your basic design tokens
2. **Theme Settings Tab**: Choose your preferences
3. **Component Styles Tab**: See and edit components
4. **Visual Tools Tab**: Helpful utilities

## Example Workflow

1. **Set Foundation**: Pick primary color = blue
2. **Configure Settings**: Set Large = 20px
3. **Use Components**: Add a card to your page
4. **Apply Scope**: Make it a "holiday card"
5. **Done!**: Your card has holiday styling with your blue color

## The Big Picture

The Studio lets you:
- Control your entire site's design from one place
- Make consistent designs without writing code
- Learn as you go with educational helpers
- Work with WordPress, not against it

That's it! The Studio makes design simple, consistent, and educational.
