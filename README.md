# Openmost Theme

The Openmost design system for Matomo, in light and dark mode.

## Features

- **Openmost design system**: Openmost blue accent (`#426CDA`, lighter `#7A96E8` in dark mode), white cards on a soft background in light mode, brand navy cards (`#161830`) on a deep page (`#0A0B1A`) in dark mode, Openmost red (`#F84B5C`) for charts.
- **Light and dark mode**: every color is defined as a `[light, dark]` pair. Each user keeps choosing Light, Dark or Match browser in their personal settings.
- **Sora headings**: page, report and widget titles use Sora, the Openmost brand font, bundled with the theme. Body text keeps the system font for readability.
- **Native theme API**: colors are set through Matomo's `Theme.configureThemeVariables` event, so core and third party plugins pick them up, and every color can be overridden with a `--theme-color-*` CSS variable.
- **Purely visual**: no JavaScript and no markup change, compatible with every other Matomo plugin.

## Requirements

- Matomo 6 (`>=6.0.0-b1,<7.0.0-b1`)
- PHP 8.1 or higher
- On Matomo 5.10 or later, install Openmost Theme 5.1.x instead.

## Installation / Configuration

1. Go to *Administration > Platform > Marketplace*, filter by **Themes** and search for "Openmost Theme".
2. Click **Install**, then **Activate**. A theme applies to the whole Matomo instance.
3. Each user picks the light or dark mode in their personal settings.

There are no settings. To tweak the palette, override any `--theme-color-*` variable from a small companion plugin:

```css
:root {
  --theme-color-brand: #00b4d8;
}
```

See [docs/index.md](docs/index.md) for the full palette.

## Need help with Matomo?

Openmost is an official Matomo Implementation Partner. We also build [custom Matomo themes](https://openmost.com/matomo/services/custom-theme?utm_source=matomo_marketplace&utm_medium=referral&utm_campaign=services&utm_content=openmosttheme) in your own brand colours and fonts, on the official theme API, in light and dark mode.

## Support

- Homepage: https://openmost.com/matomo/extensions/openmost-theme
- Issues: https://github.com/openmost/OpenmostTheme/issues
- Email: ronan@openmost.com

## Screenshots

See the `screenshots/` folder, or the plugin page on the Matomo Marketplace.

## License

GPL v3 or later. The Sora font is bundled under the SIL Open Font License (`fonts/Sora/OFL.txt`).
