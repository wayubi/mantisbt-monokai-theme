# MantisBT Monokai Theme Plugin

## Description

A dark theme for MantisBT based on the Monokai color scheme by Wimer Hazenberg. Transforms the entire MantisBT UI — navbar, sidebar, tables, forms, buttons, modals, alerts, and more — into a consistent dark interface with accent colors from the classic Monokai palette.

## Features

- **Full Dark Theme**: Covers navbar, sidebar, tables, forms, buttons, dropdowns, modals, alerts, tabs, pagination, tooltips, progress bars, and more
- **Monokai Color Palette**: Background `#272822`, pink `#F92672`, green `#A6E22E`, yellow `#E6DB74`, blue `#66D9EF`, purple `#AE81FF`, orange `#FD971F`
- **CSS Variables**: All colors are defined as CSS custom properties (`--mk-*`) for easy customization
- **Print-Friendly Mode**: Automatically switches to light colors when printing
- **Custom Scrollbars**: Webkit scrollbars styled to match the dark theme
- **Bootstrap Compatibility**: Built for MantisBT's Ace template and Bootstrap 3

## Requirements

- MantisBT 2.0.0 or higher

## Installation

1. Download the plugin files
2. Extract the `MonokaiTheme` folder
3. Upload the entire `MonokaiTheme` folder to your MantisBT `plugins` directory
4. Log in to MantisBT as an administrator
5. Navigate to **Manage** → **Manage Plugins**
6. Find "Monokai Theme" in the available plugins list
7. Click **Install**

## File Structure

```
MonokaiTheme/
├── MonokaiTheme.php            # Main plugin file
├── files/
│   └── monokai.css             # Full dark theme stylesheet
├── lang/
│   └── strings_english.txt     # Language strings
├── LICENSE                     # MIT License
└── README.md                   # This file
```

## Usage

Once installed and enabled, the theme applies automatically to all pages. No configuration is needed.

### Customizing Colors

Override any CSS variable in your own custom CSS or via the browser developer tools:

```css
:root {
    --mk-bg:      #1a1a1a;   /* Page background */
    --mk-surface: #2d2d2d;   /* Card/panel background */
    --mk-pink:    #ff4081;   /* Primary accent */
    --mk-green:   #69f0ae;   /* Link color */
}
```

### Print Mode

When printing, the theme automatically switches to light colors (white backgrounds, black text). The navbar, sidebar, and widget headers are hidden for clean print output.

## How It Works

1. On page load, the plugin injects `monokai.css` into the page head
2. CSS variables define the entire color palette at the `:root` level
3. Overrides target specific Bootstrap/Ace template selectors with `!important` (required to override MantisBT's built-in stylesheets)
4. A `@media print` section inverts colors for readable printouts

## Permissions

No special permissions required. The theme is applied globally to all users once the plugin is installed and enabled.

## Internationalization

Language strings can be customized in the `lang/strings_english.txt` file or by adding language-specific files (e.g., `strings_french.txt`).

## Troubleshooting

**Q: The theme doesn't apply or looks broken**
- Ensure the plugin is installed and enabled
- Clear your browser cache (the CSS file may be cached)
- Check that no other theme plugin is overriding the styles
- Verify you're using the default Ace template

**Q: Some elements still show white backgrounds**
- The theme targets the most common Bootstrap/Ace selectors, but some custom plugins may need additional overrides
- Open your browser's developer tools to inspect the element and find the offending CSS rule
- Add any needed overrides to your custom CSS or submit a pull request

**Q: Custom plugin X doesn't look right**
- Most Bootstrap-based plugins should work out of the box
- If a plugin uses non-standard markup, let me know and I'll add support

## Support

For issues or questions, please refer to the MantisBT documentation or community forums.

## License

This plugin is licensed under the MIT License. See the `LICENSE` file for details.

## Version History

**1.0** - Initial release
- Full Monokai dark theme covering all core MantisBT UI elements
- CSS variables for easy color customization
- Print-friendly light mode
- Custom webkit scrollbars
- Support for skin-3 variants
