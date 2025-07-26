# Terminal Portfolio

**Terminal Portfolio** is an interactive website simulating a terminal interface, designed to present a portfolio in a fun way. This project uses only **HTML**, **CSS**, and **JavaScript** to provide an immersive user experience.

## Current Features (V1)

### 1. Boot Animation

- Arch Linux-style boot animation with simulated log lines
- Displays system information similar to neofetch
- Lists available commands after boot

### 2. Terminal Navigation

- Interactive terminal with command history
- Prompt displayed as `guest@Delivlinux in [directory] $`
- Supported commands:
  - `cd [directory]`: Navigate directories
  - `cd ..`: Go back to previous directory
  - `ls -l` or `ls`: List files in current directory
  - `cat [file]`: Display file contents
  - `clear`: Clear the terminal
  - `help`: Display available commands
  - `whoami`: Display username
  - `neofetch`: Display system information
  - `exit`: Close the terminal and redirect to Google
  - `curl [URL]`: Navigate to target URL
  - `cowsay [message]`: Display message in cow ASCII art
  - `fortune`: Display a random fortune
  - `weather [city]`: Get weather information
  - `ip a`: Show public IP address
  - `last`: Load the most recent blog article
  - `clearcache`: Clear local and session storage

### 3. Autocompletion

- Tab key for command and file/directory name autocompletion
- Visual suggestions displayed when typing commands

### 4. Dynamic Display

- Real-time command output simulation
- Clickable links for files and directories
- Markdown content rendering for articles

### 5. Content Display

- `cat presentation.txt`: Shows text presentation
- `cat cv.pdf`: Opens LinkedIn profile in new tab
- Blog article display with banners and formatted content

## Upcoming Features (V2)

### 1. Blog Articles from Local JSON

- Blog articles loaded from JSON files
- Each article contains title, date, banner image, and Markdown content
- Accessible via `cat [article_slug]` command

### 2. Enhanced Content Display

- Improved Markdown rendering with support for:
  - Images
  - Code blocks
  - Inline code
  - Bold and italic text
  - Headers
  - Lists
  - Links
  - Emojis

## Installation

1. Clone this repository
2. Open `index.html` in your browser

## Usage

Simply enter commands in the terminal interface to navigate and explore the portfolio content. Use the `help` command to see all available commands.

## Contributing

This project is not currently accepting contributions or pull requests. If you have suggestions or find issues, please open an issue to discuss them.

## License

This work is licensed under the [Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License](https://creativecommons.org/licenses/by-nc-nd/4.0/). This means:

- **You can share** - copy and redistribute the material in any medium or format
- **Under the following terms**:
  - **Attribution** - You must give appropriate credit, provide a link to the license, and indicate if changes were made. You may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
  - **NonCommercial** - You may not use the material for commercial purposes.
  - **NoDerivatives** - If you remix, transform, or build upon the material, you may not distribute the modified material.

For more information, please see the full license text at [Creative Commons BY-NC-ND 4.0](https://creativecommons.org/licenses/by-nc-nd/4.0/).
