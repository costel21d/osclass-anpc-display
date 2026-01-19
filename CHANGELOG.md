# Changelog

All notable changes to the ANPC Display plugin will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [1.0.0] - 2026-01-19

### 🎉 Initial Release

First public release of ANPC Display plugin for Osclass.

### ✨ Added

#### Core Features

- Automatic display of ANPC SAL and SOL compliance icons
- Local asset storage (PNG images included)
- Configurable SAL and SOL link URLs
- Enable/disable toggle for the plugin
- Admin settings panel with modern UI

#### Display Options

- **Position Control**: Choose between footer or header placement
- **Icon Sizing**: Three size presets (Small: 150px, Medium: 250px, Large: 350px)
- **New Tab Control**: Option to open links in new browser tabs
- **Responsive Design**: Automatic mobile optimization

#### Customization

- **Custom CSS Field**: Add custom styling without editing files
- **Live Preview**: See icon appearance in admin panel before saving
- **Hover Effects**: Smooth scale animation on icon hover
- **Flexible Styling**: Override default styles with custom CSS

#### Admin Panel

- Clean, modern interface with organized sections
- Visual feedback with color-coded sections
- Help text for each setting
- Quick documentation reference
- Legal compliance information

#### Technical Features

- **Privacy-First**: No external requests, all assets local
- **GDPR Compliant**: No tracking, cookies, or data collection
- **Lightweight**: Minimal performance impact
- **Hook-Based**: Uses standard Osclass hooks (footer/header)
- **Sanitized Input**: All user inputs properly sanitized
- **Preference System**: Uses Osclass preference API

### 📚 Documentation

- Comprehensive README.md (bilingual: Romanian/English)
- Complete DOCUMENTATION.md with troubleshooting guide
- Inline code comments
- Plugin README.txt for Osclass marketplace

### 🔒 Security

- Input sanitization for all user-provided data
- `nofollow noopener noreferrer` on external links
- No SQL injection vulnerabilities
- No XSS vulnerabilities

### 🎨 Design

- Modern, clean admin interface
- Responsive layout for all screen sizes
- Consistent with Osclass admin design patterns
- Accessible color schemes
- Professional icon presentation

### 🌍 Compliance

- Meets ANPC Order no. 449/2022 requirements
- GDPR compliant (local assets only)
- EU ODR platform integration
- Romanian consumer protection law compliance

### 📦 Package Contents

- `index.php` - Main plugin file with hooks and logic
- `admin.php` - Admin settings panel
- `README.txt` - Plugin information for Osclass
- `assets/sal.png` - SAL icon (250x50px)
- `assets/sol.png` - SOL icon (250x50px)

---

## [Unreleased]

### Planned Features

- [ ] Multi-language support for admin panel
- [ ] Widget support for sidebar placement
- [ ] Icon alignment options (left/center/right)
- [ ] Animation customization
- [ ] Icon upload functionality
- [ ] Shortcode support for manual placement
- [ ] Cache optimization
- [ ] Analytics integration (optional)

### Under Consideration

- [ ] Dark mode support for admin panel
- [ ] Export/import settings
- [ ] Multiple icon sets
- [ ] A/B testing for icon placement
- [ ] Accessibility improvements (WCAG 2.1)

---

## Version History

| Version | Release Date | Status     | Notes                  |
| ------- | ------------ | ---------- | ---------------------- |
| 1.0.0   | 2026-01-19   | ✅ Current | Initial public release |

---

## Upgrade Guide

### From 0.x to 1.0.0

This is the first public release. No upgrade path needed.

---

## Breaking Changes

### Version 1.0.0

- None (initial release)

---

## Deprecations

### Version 1.0.0

- None (initial release)

---

## Known Issues

### Version 1.0.0

- None reported yet

To report issues, please visit: https://github.com/costel21d/osclass-anpc-display/issues

---

## Contributors

### Version 1.0.0

- **Constantin Onu** - Initial development and release

---

## Links

- **Repository**: https://github.com/costel21d/osclass-anpc-display
- **Issues**: https://github.com/costel21d/osclass-anpc-display/issues
- **Releases**: https://github.com/costel21d/osclass-anpc-display/releases
- **Documentation**: [DOCUMENTATION.md](DOCUMENTATION.md)
- **License**: [MIT License](LICENSE)

---

**Legend:**

- ✨ Added - New features
- 🔧 Changed - Changes in existing functionality
- 🐛 Fixed - Bug fixes
- 🗑️ Deprecated - Soon-to-be removed features
- ❌ Removed - Removed features
- 🔒 Security - Security improvements
- 📚 Documentation - Documentation updates

---

_Last updated: January 19, 2026_
