# 📘 ANPC Display Plugin - Complete Documentation

## Table of Contents

1. [Overview](#overview)
2. [Features](#features)
3. [Installation](#installation)
4. [Configuration](#configuration)
5. [Customization](#customization)
6. [Troubleshooting](#troubleshooting)
7. [Legal Information](#legal-information)
8. [FAQ](#faq)
9. [Support](#support)

---

## Overview

**ANPC Display** is a lightweight Osclass plugin that automatically displays mandatory SAL (Soluționarea Alternativă a Litigiilor) and SOL (Soluționarea Online a Litigiilor) compliance links for Romanian online stores.

### Why This Plugin?

According to **ANPC Order no. 449/2022**, all e-commerce websites operating in Romania must display:

- **SAL** - Alternative Dispute Resolution link
- **SOL** - Online Dispute Resolution link

This plugin ensures your Osclass site complies with these legal requirements.

### Key Benefits

- ✅ **Legal Compliance** - Meet ANPC requirements automatically
- 🔒 **Privacy First** - All assets stored locally (GDPR compliant)
- ⚡ **Lightweight** - No external dependencies
- 🎨 **Customizable** - Multiple display options
- 📱 **Responsive** - Works on all devices

---

## Features

### Core Features

- **Automatic Display** - Icons appear in footer or header automatically
- **Local Assets** - Images stored locally (no hotlinking)
- **Configurable URLs** - Customize SAL/SOL destination links
- **Enable/Disable Toggle** - Turn on/off without uninstalling

### Advanced Features (v1.0.0+)

- **Display Position** - Choose between header or footer placement
- **Icon Sizing** - Three size presets (Small, Medium, Large)
- **Custom CSS** - Add your own styling
- **New Tab Control** - Choose whether links open in new tabs
- **Live Preview** - See changes before saving
- **Modern Admin UI** - Clean, intuitive settings panel

---

## Installation

### Method 1: Via Osclass Admin Panel (Recommended)

1. Download the `anpc_display.zip` file from the [GitHub Releases](https://github.com/costel21d/osclass-anpc-display/releases)
2. Log in to your Osclass admin panel
3. Navigate to **Plugins** → **Add Plugin**
4. Click **Upload Plugin** and select the downloaded ZIP file
5. Click **Install**
6. Activate the plugin
7. Configure settings from **ANPC Display** menu

### Method 2: Manual Installation

1. Download and extract the plugin files
2. Upload the `anpc_display` folder to your Osclass installation:
   ```
   /oc-content/plugins/anpc_display/
   ```
3. Log in to your Osclass admin panel
4. Navigate to **Plugins**
5. Find **ANPC Display** and click **Install**
6. Activate the plugin

### Verification

After installation, check your website footer (or header, depending on settings) to verify the SAL and SOL icons are displayed.

### Screenshots

#### Frontend Display

Here's how the plugin appears on a live Osclass site:

![ANPC Display Frontend](screenshots/anpc-display-frontend.png)

_The SAL and SOL compliance icons are automatically displayed in the footer, ensuring legal compliance with ANPC regulations._

---

## Configuration

### Accessing Settings

1. Log in to Osclass admin panel
2. Navigate to **Plugins** → **ANPC Display**
3. Configure your preferences

### General Settings

#### Enable Plugin

- **Description**: Master switch to enable/disable the plugin
- **Default**: Enabled
- **Usage**: Uncheck to temporarily disable without uninstalling

#### Display Position

- **Options**: Footer, Header
- **Default**: Footer
- **Description**: Choose where icons appear on your site
- **Recommendation**: Footer is standard for compliance badges

#### Icon Size

- **Options**:
  - Small (150px max width)
  - Medium (250px max width)
  - Large (350px max width)
- **Default**: Medium
- **Description**: Controls maximum width of displayed icons
- **Note**: Icons scale proportionally on mobile devices

#### Open Links in New Tab

- **Description**: Controls whether SAL/SOL links open in new browser tabs
- **Default**: Enabled (checked)
- **Recommendation**: Keep enabled for better user experience

### URL Configuration

#### SAL Link URL

- **Default**: `https://anpc.ro/ce-este-sal/`
- **Description**: Destination URL for SAL icon
- **Note**: Only change if ANPC updates the official URL

#### SOL Link URL

- **Default**: `https://ec.europa.eu/consumers/odr`
- **Description**: Destination URL for SOL icon
- **Note**: This is the official EU ODR platform

### Advanced Styling

#### Custom CSS

- **Description**: Add custom CSS to override default styles
- **Format**: Standard CSS syntax
- **Available Classes**:
  - `.anpc-display-container` - Main wrapper
  - `.anpc-item` - Individual link wrapper
  - `.anpc-item img` - Icon images

**Example Custom CSS:**

```css
/* Change background color */
.anpc-display-container {
  background: #f5f5f5;
  padding: 30px 0;
}

/* Add border to icons */
.anpc-item img {
  border: 2px solid #0073aa;
  border-radius: 8px;
  padding: 10px;
}

/* Change hover effect */
.anpc-item:hover {
  transform: scale(1.1) rotate(2deg);
}
```

---

## Customization

### Changing Icon Images

If you need to use different icon images:

1. Navigate to: `/oc-content/plugins/anpc_display/assets/`
2. Replace `sal.png` and/or `sol.png` with your images
3. Keep the same filenames
4. Recommended dimensions: 250x50px (or similar aspect ratio)
5. Format: PNG with transparency

### Theme Integration

The plugin automatically hooks into Osclass footer/header. If your theme has custom hooks:

**For developers:**

```php
// Add to your theme's footer.php or header.php
<?php osc_run_hook('footer'); ?>
// or
<?php osc_run_hook('header'); ?>
```

### Mobile Responsiveness

The plugin includes built-in responsive CSS. On screens smaller than 600px, icons stack vertically.

To customize mobile behavior, use this CSS:

```css
@media (max-width: 600px) {
  .anpc-display-container {
    gap: 10px;
    padding: 15px 0;
  }
  .anpc-item img {
    max-width: 180px !important;
  }
}
```

---

## Troubleshooting

### Icons Not Displaying

**Possible Causes:**

1. Plugin is disabled in settings
2. Theme doesn't include footer/header hooks
3. CSS conflicts with theme

**Solutions:**

1. Check **Enable Plugin** is checked in settings
2. Verify your theme includes `<?php osc_run_hook('footer'); ?>`
3. Add this to Custom CSS:
   ```css
   .anpc-display-container {
     display: flex !important;
   }
   ```

### Icons Too Large/Small

**Solution:**

1. Go to plugin settings
2. Change **Icon Size** option
3. Or use Custom CSS:
   ```css
   .anpc-item img {
     max-width: 200px !important;
     max-height: 40px !important;
   }
   ```

### Links Not Opening

**Check:**

1. URLs are correctly formatted (include `https://`)
2. No JavaScript errors in browser console
3. Links have proper `href` attribute (inspect element)

### Settings Not Saving

**Solutions:**

1. Check file permissions on `/oc-content/plugins/anpc_display/`
2. Verify Osclass database connection
3. Check for PHP errors in error logs
4. Try deactivating and reactivating the plugin

### Icons Appear Twice

**Cause:** Theme might have duplicate footer/header hooks

**Solution:**
Add this to Custom CSS:

```css
.anpc-display-container:not(:first-of-type) {
  display: none;
}
```

---

## Legal Information

### ANPC Order no. 449/2022

This plugin helps comply with Romanian consumer protection regulations requiring:

1. **SAL (Soluționarea Alternativă a Litigiilor)**
   - Alternative dispute resolution mechanism
   - Mandatory for all online sellers
   - Link to: https://anpc.ro/ce-este-sal/

2. **SOL (Soluționarea Online a Litigiilor)**
   - EU Online Dispute Resolution platform
   - Required for EU-based e-commerce
   - Link to: https://ec.europa.eu/consumers/odr

### Compliance Checklist

- ✅ Display SAL and SOL links prominently
- ✅ Links must be easily accessible
- ✅ Icons should be visible on all pages
- ✅ Links must direct to official ANPC/EU platforms

### GDPR Compliance

This plugin is GDPR compliant:

- ✅ No external requests (all assets local)
- ✅ No user data collection
- ✅ No cookies or tracking
- ✅ No third-party services

---

## FAQ

### Q: Is this plugin free?

**A:** Yes, completely free and open-source (MIT License).

### Q: Does it work with all Osclass themes?

**A:** Yes, as long as the theme includes standard Osclass hooks.

### Q: Can I use custom icons?

**A:** Yes, replace the PNG files in `/assets/` folder.

### Q: Will it slow down my site?

**A:** No, the plugin is extremely lightweight with minimal performance impact.

### Q: Can I change the icon URLs?

**A:** Yes, but only change them if ANPC updates official links.

### Q: Does it work with Osclass 3.x?

**A:** Yes, tested with Osclass 3.0+ and 4.x+

### Q: Can I display icons in sidebar?

**A:** Currently supports header/footer. For sidebar, you'd need custom theme integration.

### Q: Is it compatible with other plugins?

**A:** Yes, no known conflicts with other Osclass plugins.

### Q: Can I translate the admin panel?

**A:** The plugin uses English for admin. Frontend display is icon-based (no text to translate).

### Q: What if ANPC changes the icon design?

**A:** Simply replace the PNG files in the assets folder with new versions.

---

## Support

### Getting Help

1. **Documentation**: Read this guide thoroughly
2. **GitHub Issues**: [Report bugs or request features](https://github.com/costel21d/osclass-anpc-display/issues)
3. **Community**: Osclass forums and community

### Reporting Bugs

When reporting issues, please include:

- Osclass version
- Plugin version
- Theme name
- PHP version
- Description of the problem
- Steps to reproduce
- Screenshots (if applicable)

### Feature Requests

We welcome feature suggestions! Please open an issue on GitHub with:

- Clear description of the feature
- Use case / why it's needed
- Any implementation ideas

### Contributing

Contributions are welcome!

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

---

## Changelog

### Version 1.0.0 (2026-01-19)

- ✨ Initial release
- ✅ SAL and SOL icon display
- ✅ Configurable URLs
- ✅ Local asset storage
- ✅ Admin settings panel
- ✅ Display position control (header/footer)
- ✅ Icon size presets (small/medium/large)
- ✅ Custom CSS support
- ✅ New tab control
- ✅ Live preview in admin
- ✅ Responsive design
- ✅ GDPR compliant

---

## Credits

**Author:** Constantin Onu  
**Website:** https://www.onu.ro  
**GitHub:** https://github.com/costel21d/osclass-anpc-display  
**License:** MIT License

---

## License

MIT License - See LICENSE file for details.

You are free to:

- ✅ Use commercially
- ✅ Modify
- ✅ Distribute
- ✅ Private use

---

**Last Updated:** January 19, 2026  
**Plugin Version:** 1.0.0  
**Osclass Compatibility:** 3.0+
