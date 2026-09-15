# Changelog

## v6.0.0

- Compatibility with Matomo 6.x (`>=6.0.0-b1,<7.0.0-b1`), requires PHP 8.1+ and MySQL 8.0+ (or MariaDB 10.6+).
- Changed: palettes aligned with the Openmost design system of openmost.com. Dark mode now uses a deep `#0A0B1A` page with brand navy `#161830` cards and a lighter Openmost blue (`#7A96E8`), borders `#282A4B`. Charts use the Openmost red `#F84B5C`.
- Added: the colors introduced in Matomo 6 (success, input placeholder, alternative border, overlay shadow), in light and dark mode.
- Changed: Sora is reserved for headings (page, report and widget titles), text uses the system font.
- Fixed: Sora is loaded with a relative URL, so it also loads when Matomo is served from a subdirectory.
- Fixed: disabled radio buttons were forced to white text in light mode.
- Fixed: login page overrides are loaded again.
- Changed: stylesheets use the Matomo 6 theme variables instead of the deprecated `widget-*`, `menu-contrast-*` and `border` ones.
- Removed: overrides of elements gone in Matomo 6 (legacy selector dropdown, Transitions text), the unused `--o-component-*` tokens, the static Sora files (the variable font covers every weight) and the empty config files.
- Docs: plugin homepage and support on openmost.com.

## v5.1.0

- Added: full **light & dark mode** support via Matomo 5.10's `[light, dark]` `ThemeStyles` array API.
- Added: light palette aligned with the Openmost brand (Openmost blue, Sora, 1rem radii on white surfaces).
- Changed: dark palette tightened against the [openmost.io](https://openmost.io) design system (brand `#426CDA`, panels `#1C1F41`, chart base `#DC3545`).
- Changed: `plugin.json` now requires Matomo `>=5.10.0`.
- Changed: scrollbar colors switched to native `--theme-color-*` variables so they adapt to the active mode.
- Removed: orphaned `--o-body-bg`, `--o-primary`, `--o-success`/`--o-warning`/`--o-danger`, `--o-component-bg(-hover)` tokens — superseded by Matomo's native `--theme-color-*` variables. The shape tokens (`--o-component-border-radius`, `--o-component-padding`) are kept.
- Removed: hard-coded `color-scheme: dark` on `:root` — Matomo now drives the color scheme.
- Docs: README, FAQ, and documentation rewritten.

## Older releases

- **v5.0.3** — marketplace cover update.
- **v5.0.2** — fix: realtime header.
- **v5.0.1** — added screenshots.
- **v5.0.0** — initial Theme v1 release.
