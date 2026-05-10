# FAQ

### How do I install this theme?

Open your Matomo administration panel, go to **Marketplace**, filter by **Themes**, search for *Openmost Theme*, and install it. Then activate it in **Personal → Settings → General Settings**, or in **System → General Settings** to make it the default for the whole instance.

### Which Matomo versions are supported?

Matomo **5.10** or newer. The theme uses the light/dark `ThemeStyles` array API introduced in 5.10. Older versions will silently render the dark palette only and may look incorrect in light mode.

### Does it work with light mode?

Yes. The plugin defines a full light palette alongside the canonical Openmost dark palette. Use Matomo's theme switcher (**Auto / Light / Dark**) — Auto follows your operating system, so users can move between modes without changing settings.

The Openmost brand identity is dark-first, so the dark palette is the most polished. The light variant keeps the same brand blue and Sora typography but uses lighter surfaces designed to feel at home on white.

### Will all users in my Matomo instance see this theme?

If you set it as the default in **System → General Settings**, yes — all users see it. Each user can also override the choice in their personal settings if you allow it.

### Can I customize the colors?

Yes — every color is exposed as a Matomo `--theme-color-*` CSS variable. Override any of them in `misc/user/user.css` or in a small companion plugin. See [docs/index.md](index.md#customizing-the-theme) for examples.

### Does this theme add any features or change Matomo's HTML?

No. The theme is purely visual. It defines theme variables and adds CSS — it does not modify Matomo's HTML structure, JavaScript, or behavior. That keeps it compatible with every other Matomo plugin.

### How can I contribute?

- Fork [the repository](https://github.com/openmost/OpenmostTheme), make your change in a small focused commit, and open a pull request.
- Or open an [issue](https://github.com/openmost/OpenmostTheme/issues) describing the problem or proposal.
- Email ronan@openmost.io for anything that doesn't fit GitHub.

### How long will this theme be maintained?

It's used in production by [Openmost](https://openmost.io) and on every Matomo instance the team operates, so it follows Matomo's own release cadence as closely as possible. Security and compatibility fixes are prioritized.

### I want a custom theme for my brand. Can you build one?

Yes. Openmost is a certified Matomo agency and builds custom themes and plugins for clients. Get in touch at <https://openmost.io>.
