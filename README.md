# Openmost Theme for Matomo

A modern, brand-aligned theme that brings the [openmost.io](https://openmost.io) visual identity to your Matomo dashboard. Built on top of Matomo's native theming engine — no HTML structure changes, no functional overrides, just CSS.

## Highlights

- **Light & Dark modes** — fully wired through Matomo's native `data-theme-mode` switching (auto / light / dark).
- **Openmost design system** — Sora typography, Openmost blue (`#426CDA`), navy panels (`#1C1F41`), 1rem rounded corners.
- **Native variables** — uses Matomo's `--theme-color-*` CSS variables throughout; override any of them in your own plugin to fine-tune the look.
- **Zero conflicts** — the theme is purely visual. Markup is untouched, so it stays compatible with every other Matomo plugin.

## Requirements

- Matomo **5.10** or newer (uses the light/dark `ThemeStyles` array API introduced in 5.10)

## Installation

1. Open your Matomo administration panel.
2. Go to **Marketplace** and filter by **Themes**.
3. Search for **Openmost Theme**, install it.
4. Activate it from **Personal → Settings → General Settings** (or **System → General Settings** for the instance default).
5. Pick **Auto / Light / Dark** in the theme mode selector — the Openmost palette adapts to the choice.

## Customization

Every color is exposed as a CSS variable. To tweak the palette, override any `--theme-color-*` variable in a custom plugin or in `misc/user/user.css`:

```css
:root {
  --theme-color-brand: #00b4d8; /* your brand */
}
```

Openmost-specific tokens (border radius, padding) are also available:

```css
:root {
  --o-component-border-radius: 0.75rem;
  --o-component-padding: 1.25rem;
}
```

## Support

- Issues: <https://github.com/openmost/OpenmostTheme/issues>
- Email: ronan@openmost.io
- Want a custom theme or a Matomo agency? <https://openmost.io>

Thank you for installing — and enjoy the new look.
