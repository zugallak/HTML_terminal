 Terminal Portfolio - port25.sh

**Terminal Portfolio** is an interactive website that simulates a Linux terminal interface, Arch Linux style, designed to showcase technical expertise in email deliverability and system infrastructure in an immersive way.

## 🚀 Current Status (V4)

### 1. 🖥️ Immersive Shell Experience
* **Boot Sequence**: Arch Linux-style boot with system logs and an ASCII logo.
* **Dynamic Prompt**: `guest@Delivlinux in [directory] $`.
* **System Commands**: `ls -l`, `cd`, `cat`, `clear`, `whoami`, `neofetch`, `exit`.
* **Autocomplete (Tab)**: Smart handling of long titles and slugs in the blog directory.
* **Theme Management**: Dynamic switching between `dracula` (default), `hacker`, `light`, and `ubuntu`.

### 2. 🔍 Network & Diagnostic Tools (New in V4)
* **`ip a` (Dual Stack)**: Displays the user's public IPv4 and IPv6 addresses simultaneously, using authentic `iproute2`-style formatting.
* **`dig [domain] [type]`**: Real DNS query tool using Google DNS, supporting A, MX, TXT, CNAME, and other record types, with support for reversed arguments (`dig TXT domain.tld`).
* **`curl [URL]`**: Tool for cleanly opening external links.

### 3. 📧 SMTP & MTA Simulation (MTA Simulator)
* **`telnet port25.sh 25`**: High-fidelity simulation of an ESMTP session.
* **Protocol Support**: Implements `EHLO`, `MAIL FROM`, `RCPT TO`, `DATA`, and `QUIT`.
* **PHP Backend**: Sends real emails via the Tipimail API with strict syntax validation.

### 4. ✍️ Dynamic Blog System
* **Smart Resolving**: The `cat` command automatically finds the correct JSON file from either a full title or a slug.
* **Markdown Rendering**: Full support for headings, bold/italic text, lists, links, and code blocks.
* **Social**: `share` command to copy the permalink of the current article to the clipboard.
* **Search**: Asynchronous `grep` command across all content.

---

## 📜 Version History

### V2 - Blog Foundations
* Introduced the virtual file system.
* First basic Markdown rendering engine.
* Theme persistence via `localStorage`.

### V3 - Connectivity & SMTP
* Added the Telnet SMTP simulator to send a real email to the chosen address defined in `mailer.php`.
* First version of the `dig` command.
* Integrated the OpenWeather API for the `weather` command.

### V4 - Robustness & Network (Current)
* **Dual Stack IP**: IPv4/IPv6 support for `ip a`.
* **Autocomplete Intelligence**: Handles spaces and complex titles.
* **Direct Routing**: URL parameter support (`?article=slug`) working directly from boot.
* **Help Redesign**: Dynamic `help` command synchronized with the boot sequence.
* **arrow navigation**: Use the arrow to select past typed commands.
* **Stability**: Fixed `exit` redirection bugs and URL encoding issues.

---

## 🔮 Upcoming

* **`whois` tool**: Integration of a domain information lookup tool.

---

## 🛠️ Technical Stack
* **Frontend**: Vanilla HTML5, CSS3 custom properties, JavaScript ES6+.
* **Backend**: PHP 8.x, CURL, Tipimail API.
* **Data**: JSON for blog articles and blog configuration.
* **External APIs**: Google DNS-over-HTTPS, Ipify, OpenWeatherMap.

## 📦 Installation
1. Clone the repository.
2. Configure your API keys in `index.html` for Weather and `mailer.php` for Tipimail.
3. Deploy on a PHP-compatible server.

## 📜 License
This work is licensed under the [Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License](https://creativecommons.org/licenses/by-nc-nd/4.0/).

This means you can share this work with proper attribution,
but you cannot use it commercially or create derivative works.
