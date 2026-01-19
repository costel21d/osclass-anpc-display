# 🛡️ ANPC Display Plugin for OSClass

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Osclass](https://img.shields.io/badge/Osclass-3.0%2B-green.svg)](https://osclass.org/)
[![Version](https://img.shields.io/badge/version-1.0.0-orange.svg)](https://github.com/costel21d/osclass-anpc-display/releases)

Plugin Osclass pentru afișarea linkurilor obligatorii ANPC SAL și SOL în conformitate cu legislația românească.

**English:** Osclass plugin for displaying mandatory ANPC SAL and SOL compliance links required by Romanian law for online stores.

---

## 📋 Despre / About

### Română

Plugin-ul **ANPC Display** afișează automat iconițele și linkurile obligatorii SAL (Soluționarea Alternativă a Litigiilor) și SOL (Soluționarea Online a Litigiilor) conform **Ordinului ANPC nr. 449/2022**.

#### Caracteristici principale:

- ✅ **Conformitate legală** - Respectă cerințele ANPC
- 🔒 **Privacy-first** - Toate resursele sunt locale (GDPR compliant)
- ⚡ **Ușor** - Fără dependențe externe
- 🎨 **Personalizabil** - Opțiuni multiple de afișare
- 📱 **Responsive** - Funcționează pe toate dispozitivele
- 🎯 **Plug & Play** - Funcționează imediat după activare

### English

The **ANPC Display** plugin automatically displays mandatory SAL (Alternative Dispute Resolution) and SOL (Online Dispute Resolution) icons and links according to **ANPC Order no. 449/2022**.

#### Key features:

- ✅ **Legal compliance** - Meets ANPC requirements
- 🔒 **Privacy-first** - All assets stored locally (GDPR compliant)
- ⚡ **Lightweight** - No external dependencies
- 🎨 **Customizable** - Multiple display options
- 📱 **Responsive** - Works on all devices
- 🎯 **Plug & Play** - Works immediately after activation

---

## 🚀 Instalare / Installation

### Română

#### Metoda 1: Prin panoul de administrare Osclass (Recomandat)

1. Descarcă fișierul `anpc_display.zip` din [Releases](https://github.com/costel21d/osclass-anpc-display/releases)
2. Intră în panoul de administrare Osclass
3. Navighează la **Plugins** → **Add Plugin**
4. Click pe **Upload Plugin** și selectează fișierul ZIP
5. Click pe **Install**
6. Activează plugin-ul
7. Configurează setările din meniul **ANPC Display**

#### Metoda 2: Manual

1. Descarcă și extrage fișierele plugin-ului
2. Încarcă folderul `anpc_display` în:
   ```
   /oc-content/plugins/anpc_display/
   ```
3. Intră în panoul de administrare
4. Navighează la **Plugins**
5. Găsește **ANPC Display** și click pe **Install**
6. Activează plugin-ul

### English

#### Method 1: Via Osclass Admin Panel (Recommended)

1. Download `anpc_display.zip` from [Releases](https://github.com/costel21d/osclass-anpc-display/releases)
2. Log in to your Osclass admin panel
3. Navigate to **Plugins** → **Add Plugin**
4. Click **Upload Plugin** and select the ZIP file
5. Click **Install**
6. Activate the plugin
7. Configure settings from **ANPC Display** menu

#### Method 2: Manual Installation

1. Download and extract the plugin files
2. Upload the `anpc_display` folder to:
   ```
   /oc-content/plugins/anpc_display/
   ```
3. Log in to admin panel
4. Navigate to **Plugins**
5. Find **ANPC Display** and click **Install**
6. Activate the plugin

---

## ⚙️ Configurare / Configuration

### Setări disponibile / Available Settings

| Setare / Setting     | Opțiuni / Options      | Implicit / Default                 |
| -------------------- | ---------------------- | ---------------------------------- |
| **Enable Plugin**    | On/Off                 | On                                 |
| **Display Position** | Footer / Header        | Footer                             |
| **Icon Size**        | Small / Medium / Large | Medium                             |
| **Open in New Tab**  | Yes / No               | Yes                                |
| **SAL Link URL**     | Custom URL             | https://anpc.ro/ce-este-sal/       |
| **SOL Link URL**     | Custom URL             | https://ec.europa.eu/consumers/odr |
| **Custom CSS**       | CSS Code               | -                                  |

### Captură de ecran / Screenshot

![Admin Panel](https://via.placeholder.com/800x400?text=ANPC+Display+Admin+Panel)

---

## 🎨 Personalizare / Customization

### CSS Personalizat / Custom CSS

Exemplu de CSS personalizat pentru a schimba aspectul iconițelor:

```css
/* Schimbă fundalul containerului */
.anpc-display-container {
  background: #f5f5f5;
  padding: 30px 0;
  border-top: 2px solid #0073aa;
}

/* Adaugă bordură la iconițe */
.anpc-item img {
  border: 2px solid #0073aa;
  border-radius: 8px;
  padding: 10px;
  background: white;
}

/* Efect hover personalizat */
.anpc-item:hover {
  transform: scale(1.1) rotate(2deg);
}
```

### Înlocuirea iconițelor / Replacing Icons

Pentru a folosi iconițe personalizate:

1. Navighează la: `/oc-content/plugins/anpc_display/assets/`
2. Înlocuiește `sal.png` și/sau `sol.png`
3. Păstrează aceleași nume de fișiere
4. Dimensiuni recomandate: 250x50px
5. Format: PNG cu transparență

---

## 📚 Documentație / Documentation

Pentru documentație completă, consultă:

- **[DOCUMENTATION.md](DOCUMENTATION.md)** - Ghid complet (English)
- **[CHANGELOG.md](CHANGELOG.md)** - Istoric versiuni

---

## 🔧 Compatibilitate / Compatibility

- **Osclass:** 3.0+, 4.x, 8.x
- **PHP:** 5.6+, 7.x, 8.x
- **Themes:** Toate temele standard Osclass / All standard Osclass themes
- **Browsers:** Chrome, Firefox, Safari, Edge

---

## 📖 Cerințe legale / Legal Requirements

### Română

Conform **Ordinului ANPC nr. 449/2022**, toate magazinele online din România trebuie să afișeze:

1. **SAL** - Soluționarea Alternativă a Litigiilor
2. **SOL** - Soluționarea Online a Litigiilor

Acest plugin asigură conformitatea automată cu aceste cerințe.

### English

According to **ANPC Order no. 449/2022**, all online stores in Romania must display:

1. **SAL** - Alternative Dispute Resolution
2. **SOL** - Online Dispute Resolution

This plugin ensures automatic compliance with these requirements.

---

## 🐛 Raportare probleme / Bug Reports

Dacă întâmpini probleme, te rugăm să:

1. Verifici [documentația completă](DOCUMENTATION.md)
2. Cauți în [Issues existente](https://github.com/costel21d/osclass-anpc-display/issues)
3. Deschizi un [Issue nou](https://github.com/costel21d/osclass-anpc-display/issues/new)

If you encounter issues, please:

1. Check the [complete documentation](DOCUMENTATION.md)
2. Search [existing Issues](https://github.com/costel21d/osclass-anpc-display/issues)
3. Open a [new Issue](https://github.com/costel21d/osclass-anpc-display/issues/new)

---

## 🤝 Contribuții / Contributing

Contribuțiile sunt binevenite! / Contributions are welcome!

1. Fork repository-ul / Fork the repository
2. Creează un branch pentru feature / Create a feature branch
3. Commit modificările / Commit your changes
4. Push la branch / Push to the branch
5. Deschide un Pull Request / Open a Pull Request

---

## 📄 Licență / License

Acest plugin este licențiat sub **MIT License**.

This plugin is licensed under the **MIT License**.

Vezi fișierul [LICENSE](LICENSE) pentru detalii.

See the [LICENSE](LICENSE) file for details.

---

## 👨‍💻 Autor / Author

**Constantin Onu**

- 🌐 Website: [onu.ro](https://www.onu.ro)
- 📧 Email: costel21d@yahoo.com
- 💼 GitHub: [@costel21d](https://github.com/costel21d)

---

## ⭐ Suport / Support

Dacă acest plugin ți-a fost util, te rugăm să:

- ⭐ Dai o stea pe GitHub
- 🐛 Raportezi bug-uri
- 💡 Sugerezi îmbunătățiri
- 🔄 Distribui cu alții

If this plugin was helpful, please:

- ⭐ Star it on GitHub
- 🐛 Report bugs
- 💡 Suggest improvements
- 🔄 Share with others

---

## 📊 Statistici / Stats

![GitHub stars](https://img.shields.io/github/stars/costel21d/osclass-anpc-display?style=social)
![GitHub forks](https://img.shields.io/github/forks/costel21d/osclass-anpc-display?style=social)
![GitHub issues](https://img.shields.io/github/issues/costel21d/osclass-anpc-display)
![GitHub downloads](https://img.shields.io/github/downloads/costel21d/osclass-anpc-display/total)

---

**Versiune / Version:** 1.0.0  
**Ultima actualizare / Last updated:** 19 Ianuarie 2026 / January 19, 2026
