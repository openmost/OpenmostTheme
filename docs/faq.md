# FAQ

### How do I install this theme?

Open your Matomo administration panel, go to **Marketplace**, filter by **Themes**, search for *Openmost Theme*, install and activate it. A theme applies to the whole Matomo instance.

### Which Matomo versions are supported?

- Openmost Theme **6.x** supports Matomo 6.
- Openmost Theme **5.1.x** supports Matomo 5.10 or newer.

### Does it work with light mode?

Yes. The plugin defines a full light palette and a full dark palette. Each user picks **Light**, **Dark** or **Match browser** in their personal settings; Match browser follows the operating system, so users can move between modes without changing settings.

### Will all users in my Matomo instance see this theme?

Yes. Once activated, every user sees the Openmost Theme, in the light or dark mode they picked.

### Can I customize the colors?

Yes. Every color is exposed as a Matomo `--theme-color-*` CSS variable. Override any of them in a small companion plugin. See [docs/index.md](index.md#customizing-the-theme) for examples.

### Does this theme add any features or change Matomo's HTML?

No. The theme is purely visual. It defines theme variables and adds CSS: it does not modify Matomo's HTML structure, JavaScript, or behavior. That keeps it compatible with every other Matomo plugin.

### Does the theme load fonts from an external service?

No. Sora is bundled with the theme and served from your own Matomo instance, under the SIL Open Font License.

### How can I contribute?

- Fork [the repository](https://github.com/openmost/OpenmostTheme), make your change in a small focused commit, and open a pull request.
- Or open an [issue](https://github.com/openmost/OpenmostTheme/issues) describing the problem or proposal.
- Email ronan@openmost.com for anything that doesn't fit GitHub.

### How long will this theme be maintained?

It's used in production by [Openmost](https://openmost.com) and on every Matomo instance the team operates, so it follows Matomo's own release cadence as closely as possible. Security and compatibility fixes are prioritized.

### I want a custom theme for my brand. Can you build one?

Yes. Openmost is a Matomo agency and builds custom themes and plugins for clients. Get in touch at <https://openmost.com>.
