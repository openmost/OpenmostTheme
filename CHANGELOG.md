# Changelog

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
