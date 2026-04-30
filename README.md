# Terminal Portfolio

**Terminal Portfolio** is an interactive website simulating a terminal interface, designed to present a portfolio in a fun way. This project uses only **HTML**, **CSS**, and **JavaScript** to provide an immersive user experience.

## Current Features

### 1. Boot Animation
- Arch Linux-style boot animation with simulated log lines
- Displays system information similar to neofetch
- Lists available commands after boot

### 2. Terminal Navigation & Commands
- Interactive terminal with prompt displayed as `guest@Delivlinux in [directory] $`
- Supported commands:
  - `cd [directory]`: Navigate directories
  - `ls -l` or `ls`: List files and directories
  - `cat [file]`: Display file contents or articles
  - `clear`: Clear the terminal screen
  - `help`: Display available commands
  - `whoami`, `neofetch`: Display user and system info
  - `curl [URL]`: Open an external link in a new tab
  - `cowsay [message]`: Fun ASCII art cow display
  - `fortune`, `weather [city]`, `ip a`: Dynamic tools using external APIs
  - `last`: Directly load the most recent blog article
  - `exit`: Redirect to Google

### 3. Advanced Interactions
- **Autocompletion**: Use the **Tab** key for command and file/directory name suggestions
- **Dynamic Display**: Real-time simulation of command outputs and clickable links

### 4. Integrated Blog System
- Articles dynamically loaded from local **JSON** files
- Custom **Markdown** rendering engine supporting:
  - Images, links, and emojis
  - Code blocks and inline code
  - Headers, lists, bold, and italic text
- SEO optimization via dynamic injection of Schema.org metadata

## Upcoming Features (V3)

### 1. Direct Article Linking (Routing)
- Support for URL parameters (e.g., `?article=slug`) to load a specific article automatically on page load.

### 2. Command History
- Use **Up** and **Down** arrow keys to navigate through previously entered commands.

### 3. Custom Themes
- Implementation of a `theme [name]` command to switch between different color schemes (Retro, Hacker, Light, etc.) using CSS variables.

### 4. Search Engine (Grep)
- A `search [keyword]` command to find specific terms across all blog articles.

## Installation

1. Clone this repository.
2. Open `index.html` in your browser.

## Usage

Simply enter commands in the terminal interface to navigate and explore the portfolio content. Use the `help` command to see all available commands.

## License

This work is licensed under the [Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License](https://creativecommons.org/licenses/by-nc-nd/4.0/).
