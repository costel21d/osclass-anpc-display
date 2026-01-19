# 📝 GitHub Release Creation Guide

## Steps to Create v1.0.0 Release on GitHub

### 1. Navigate to Releases

1. Go to: https://github.com/costel21d/osclass-anpc-display
2. Click on **"Releases"** (right sidebar or top menu)
3. Click **"Create a new release"** or **"Draft a new release"**

### 2. Configure Release

#### Tag Version

- **Tag:** `v1.0.0` (already pushed to GitHub)
- **Target:** `main` branch

#### Release Title

```
🎉 ANPC Display v1.0.0 - First Official Release
```

#### Release Description

Copy the content from `RELEASE_NOTES.md` or use this summary:

```markdown
## 🚀 What's New

First official release of **ANPC Display** - a comprehensive Osclass plugin for displaying mandatory SAL and SOL compliance links required by Romanian law (ANPC Order no. 449/2022).

### ✨ Features

- ✅ Automatic SAL/SOL icon display
- 🎯 Display position control (footer/header)
- 📏 Icon sizing (small/medium/large)
- 🎨 Custom CSS support
- 🔗 Configurable URLs and link behavior
- 👁️ Live preview in admin panel
- 🖥️ Modern admin UI
- 🔒 GDPR compliant (local assets)
- 📱 Responsive design

### 📦 Installation

1. Download `anpc_display.zip` below
2. Upload via Osclass admin: Plugins → Add Plugin
3. Install and activate
4. Configure from ANPC Display menu

### 📋 Requirements

- Osclass 3.0+ (tested up to 8.2.0)
- PHP 5.6+ (recommended: 7.4+)
- Compatible with all standard themes

### 📚 Documentation

- [Complete Documentation](https://github.com/costel21d/osclass-anpc-display/blob/main/DOCUMENTATION.md)
- [Changelog](https://github.com/costel21d/osclass-anpc-display/blob/main/CHANGELOG.md)
- [README](https://github.com/costel21d/osclass-anpc-display/blob/main/README.md)

### 🔒 Legal Compliance

Ensures compliance with ANPC Order no. 449/2022 for Romanian online stores.

---

**🇷🇴 Pentru utilizatori români:** Plugin complet pentru conformitate ANPC - afișare automată SAL și SOL.

**Author:** Constantin Onu | **License:** MIT
```

### 3. Attach Files

Click **"Attach binaries"** and upload:

- ✅ `anpc_display.zip` (from project root)

GitHub will automatically create source code archives (zip and tar.gz).

### 4. Release Options

- ✅ Check **"Set as the latest release"**
- ✅ Check **"Create a discussion for this release"** (optional)
- ⬜ Leave **"Set as a pre-release"** unchecked

### 5. Publish

Click **"Publish release"**

---

## ✅ Post-Release Checklist

After publishing:

1. **Verify Release Page**
   - Check that v1.0.0 appears in releases
   - Verify download link works
   - Confirm description displays correctly

2. **Update Repository**
   - Ensure README badges link to latest release
   - Check that documentation links work

3. **Test Download**
   - Download `anpc_display.zip` from release
   - Verify it contains all necessary files
   - Test installation on a clean Osclass instance

4. **Announce** (optional)
   - Share on Osclass forums
   - Post on relevant communities
   - Update your website

---

## 🔗 Quick Links

- **Repository:** https://github.com/costel21d/osclass-anpc-display
- **Releases:** https://github.com/costel21d/osclass-anpc-display/releases
- **New Release:** https://github.com/costel21d/osclass-anpc-display/releases/new

---

## 📋 Files to Upload

Location: `/Users/constantin.onu/Desktop/Projects/Personal/osclass-anpc-display/`

File: `anpc_display.zip` (already created and ready)

---

## 🎯 Expected Result

After publishing, users will be able to:

- View release at: `https://github.com/costel21d/osclass-anpc-display/releases/tag/v1.0.0`
- Download: `https://github.com/costel21d/osclass-anpc-display/releases/download/v1.0.0/anpc_display.zip`
- See release in the repository's main page

---

**Created:** 2026-01-19
**Version:** 1.0.0
