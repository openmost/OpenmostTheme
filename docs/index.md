# Openmost Theme — Documentation

The Openmost Theme converts the Matomo interface to match the [openmost.io](https://openmost.io) brand. It plugs into Matomo's native theming engine (5.10+) to define a complete light and dark palette, then layers component-level LESS tweaks on top.

## Design system

The dark palette is the canonical Openmost identity, lifted from openmost.io. The light palette is a sibling scale designed to feel native on white surfaces while keeping the same Openmost blue accent.

| Token | Light | Dark |
| --- | --- | --- |
| Brand | `#426CDA` | `#426CDA` |
| Background base | `#F5F6FB` | `#161830` |
| Surface (widgets) | `#FFFFFF` | `#1C1F41` |
| Surface hover | `#ECEFF8` | `#282A4B` |
| Text primary | `#1C1F41` | `#FFFFFF` |
| Text secondary | `#4A5169` | `#AEAFBB` |
| Border | `#E5E7F0` | `#1C1F41` |
| Chart base | `#DC3545` | `#DC3545` |

> openmost.io is dark-only by design. The light variant adapts the same brand vocabulary (Openmost blue, Sora, 1rem radii) for users who prefer light mode in their analytics tool.

**Typography:** [Sora](https://fonts.google.com/specimen/Sora), shipped with the plugin (variable + static weights).

**Shape:** 1rem corner radius on widgets and form controls, 1.5rem default padding.

## File structure

```
OpenmostTheme/
├── OpenmostTheme.php          # Registers theme variables (light + dark arrays)
├── plugin.json                # Matomo metadata, requires >=5.10
├── fonts/Sora/                # Sora font files
├── stylesheets/
│   ├── theme.less             # Entry point — imports everything
│   ├── _root.less             # Openmost-specific tokens (radius, padding)
│   ├── _variables.less        # Re-exports _root for back-compat
│   ├── _fonts.less            # @font-face declarations for Sora
│   ├── layout/
│   │   └── _main.less         # Scrollbar styling
│   ├── pages/
│   │   └── _login.less        # Login screen tweaks
│   └── components/            # One file per overridden component
└── docs/                      # This documentation
```

## How theming works

Matomo 5.10 ships a `Plugin\ThemeStyles` class with one property per theme color. Every property accepts either a single string or a `[light, dark]` array — Matomo emits the right CSS variable for each mode and switches via `data-theme-mode` plus `prefers-color-scheme`.

`OpenmostTheme.php` listens to the `Theme.configureThemeVariables` event and assigns `[light, dark]` arrays for every relevant property. The CSS files in `stylesheets/components/` then consume those tokens with `var(--theme-color-*)`, so the same component definition works in both modes.

## Overridden components

Component overrides live in `stylesheets/components/`:

- Activity log, admin pages, alerts, copy-to-clipboard
- Custom reports, dropdowns, entity lists, funnels
- Form inputs, jqPlot charts, multi-sites
- Notifications, period selector, scheduled reports
- Segment editor, sidebar, tag manager, transitions report
- Visitor profile, visits log, widgets

Each file is intentionally small — the goal is a minimal diff against Matomo defaults.

## Customizing the theme

You don't need to fork the plugin to tweak it. Override any `--theme-color-*` variable in a small companion plugin or in `misc/user/user.css`:

```css
:root {
  --theme-color-brand: #00b4d8;
}

[data-theme-mode="dark"] {
  --theme-color-background-base: #0b0d24;
}
```

Openmost-only tokens are also available for shape adjustments:

```css
:root {
  --o-component-border-radius: 0.5rem;
  --o-component-padding: 1rem;
}
```

## Contributing

Contributions are welcome. Keep changes scoped to one component per file and prefer `var(--theme-color-*)` over hard-coded hex values so your edits keep working in both light and dark modes.

- Repository: <https://github.com/openmost/OpenmostTheme>
- Issues: <https://github.com/openmost/OpenmostTheme/issues>
