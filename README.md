# Terminal Portfolio

**Terminal Portfolio** est un site web interactif simulant une interface de terminal, conçu pour présenter un portfolio de manière ludique. Ce projet utilise uniquement du **HTML**, **CSS** et **JavaScript** pour offrir une expérience utilisateur immersive.

## Fonctionnalités Actuelles (V1)

### 1. **Boot Animation**
- Animation de démarrage façon Arch Linux avec des lignes de log simulées (ex. : "Mounted /boot", "Network Manager started").
- L'écran de démarrage présente une expérience fluide avant d'atteindre l'interface du terminal.

### 2. **Navigation Terminal**
- Un **terminal interactif** où l'utilisateur peut entrer des commandes.
- Le prompt est affiché sous la forme `guest@Delivlinux in [dossier] $`.
- Commandes principales supportées :
  - **`cd [dossier]`** : Naviguer dans les dossiers (par exemple `about` et `blog`).
  - **`ls -l`** : Lister les fichiers du répertoire courant.
  - **`cat [fichier]`** : Afficher le contenu d'un fichier texte, comme la présentation de l'utilisateur.
  - **`clear`** : Effacer le terminal pour repartir à zéro.
  - **`help`** : Affiche un message d'aide "Are you blacklisted on Spamhaus?"
  - **`whoami`** : Affiche "You only knows..."
  - **`neofetch`** : Affiche les infos système simulées (similaire à la commande `neofetch`).
  
### 3. **Auto-complétion**
- Utilisation de la touche **`Tab`** pour auto-compléter les commandes disponibles, avec une suggestion affichée en **italique**.

### 4. **Affichage Dynamique**
- La sortie de chaque commande est simulée en temps réel via la modification du DOM avec JavaScript.
- Affichage des fichiers en **`ls -l`** et liens cliquables pour accéder aux fichiers ou aux dossiers.

### 5. **Affichage du CV et de la Présentation**
- La commande **`cat presentation.txt`** affiche la présentation textuelle de l'utilisateur.
- La commande **`cat cv.pdf`** ouvre un lien vers le **CV LinkedIn** dans un nouvel onglet.

## Fonctionnalités à venir (V2)

### 1. **Ajout d'articles de blog depuis une variable JSON locale**
- Dans la V2, les articles de blog seront ajoutés via des fichiers JSON locaux.
- Chaque article de blog contiendra des informations comme le titre, la date, une bannière d'image et le contenu en Markdown (avec des titres H1, H2, des listes à puces, etc.).
- Ces articles seront accessibles via la commande **`cat [article_slug]`** (par exemple : `cat microsoft-durcit-emailing`).
  
### 2. **Affichage du contenu des articles**
- Lors de l'exécution de la commande **`cat [slug_article]`**, le contenu du fichier JSON sera extrait et affiché dans le terminal.
- La bannière de l'article sera simulée par un texte ou une miniature, et le contenu sera formaté avec du Markdown simple (titres, bullet points, liens, etc.).

## Installation

1. Clonez ce projet dans votre répertoire local :
   ```bash
   git clone https://github.com/username/terminal-portfolio.git
