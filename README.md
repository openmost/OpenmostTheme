# Openmost Theme for Matomo

A modern, brand-aligned theme that brings the [Openmost](https://openmost.com) design system to your Matomo dashboard. Built on top of Matomo's native theming engine: no HTML structure changes, no functional overrides, just colors and CSS.

## Highlights

- **Light & Dark modes**: each user picks Light, Dark or Match browser in their personal settings, the Openmost palette follows.
- **Openmost design system**: Openmost blue (`#426CDA`), navy dark scale (deep `#0A0B1A` page with `#161830` cards), Openmost red for charts.
- **Sora headings**: page, report and widget titles use Sora, the Openmost brand font, bundled with the theme. Text keeps the system font for readability.
- **Native variables**: uses Matomo's `--theme-color-*` CSS variables throughout; override any of them to fine-tune the look.
- **Zero conflicts**: the theme is purely visual. Markup is untouched, so it stays compatible with every other Matomo plugin.

## Requirements

- Matomo **6** (Openmost Theme 6.x), PHP 8.1 or higher, MySQL 8.0+ or MariaDB 10.6+
- For Matomo 5.10 or later, install Openmost Theme **5.1.x**

## Installation

1. Open your Matomo administration panel.
2. Go to **Marketplace** and filter by **Themes**.
3. Search for **Openmost Theme**, install and activate it. The theme applies to the whole instance.
4. Each user picks **Light / Dark / Match browser** in their personal settings, the Openmost palette adapts to the choice.

## Customization

Every color is exposed as a CSS variable. To tweak the palette, override any `--theme-color-*` variable in a custom plugin:

```css
:root {
  --theme-color-brand: #00b4d8; /* your brand */
}
```

## Support

- Issues: <https://github.com/openmost/OpenmostTheme/issues>
- Email: ronan@openmost.com
- Want a custom theme or a Matomo agency? <https://openmost.com>

Thank you for installing, and enjoy the new look.
