# Terminal Portfolio - port25.sh

**Terminal Portfolio** est un site web interactif simulant une interface de terminal Linux (Arch Linux style), conçu pour présenter une expertise technique en délivrabilité e-mail et infrastructure système de manière immersive.

## 🚀 État Actuel (V4)

### 1. 🖥️ Expérience Shell Immersive
* **Séquence de démarrage** : Boot style Arch Linux avec logs système et logo ASCII.
* **Prompt Dynamique** : `guest@Delivlinux in [directory] $`.
* **Commandes Système** : `ls -l`, `cd`, `cat`, `clear`, `whoami`, `neofetch`, `exit`.
* **Autocomplétion (Tab)** : Gestion intelligente des titres longs et des slugs dans le dossier blog.
* **Gestion des Thèmes** : Switch dynamique entre `dracula` (défaut), `hacker`, `light`, et `ubuntu`.

### 2. 🔍 Outils Réseau & Diagnostic (Nouveauté V4)
* **`ip a` (Dual Stack)** : Affiche simultanément les adresses IPv4 et IPv6 publiques de l'utilisateur avec un formatage `iproute2` authentique.
* **`dig [domain] [type]`** : Véritable outil de requête DNS interrogeant Google DNS (A, MX, TXT, CNAME, etc.) avec support de l'inversion des arguments (`dig TXT domain.tld`).
* **`curl [URL]`** : Outil pour ouvrir des liens externes proprement.

### 3. 📧 Simulation SMTP & MTA (MTA Simulator)
* **`telnet port25.sh 25`** : Simulation haute fidélité d'une session ESMTP.
* **Support Protocole** : Implémente `EHLO`, `MAIL FROM`, `RCPT TO`, `DATA`, et `QUIT`.
* **Backend PHP** : Envoi réel d'e-mails via l'API Tipimail avec validation syntaxique stricte.

### 4. ✍️ Système de Blog Dynamique
* **Smart Resolving** : La commande `cat` retrouve automatiquement le bon fichier JSON à partir d'un titre complet ou d'un slug.
* **Rendu Markdown** : Support complet des titres, gras/italique, listes, liens, et blocs de code.
* **Social** : Commande `share` pour copier le permalien de l'article courant dans le presse-papier.
* **Recherche** : Commande `grep` asynchrone sur l'ensemble des contenus.

---

## 📜 Historique des Versions

### V2 - Fondations du Blog
* Introduction du système de fichiers virtuel.
* Premier moteur de rendu Markdown basique.
* Persistance du thème via `localStorage`.

### V3 - Connectivité & SMTP
* Ajout du simulateur SMTP Telnet pour envoyer un (vrais) mail à l'adresse de votre choix défini dans `mailer.php`.
* Première version de la commande `dig`.
* Intégration de l'API OpenWeather pour la commande `weather`.

### V4 - Robustesse & Network (Actuelle)
* **Dual Stack IP** : Support IPv4/IPv6 pour `ip a`.
* **Intelligence Autocomplétion** : Gestion des espaces et des titres complexes.
* **Routage Direct** : Support des paramètres URL (`?article=slug`) fonctionnel dès le boot.
* **Refonte de l'aide** : Commande `help` dynamique synchronisée sur le boot.
* **Stabilité** : Correction des bugs de redirection `exit` et d'encodage des URL.

---

## 🔮 Prochainement (Upcoming)

* **`whois` tool** : Intégration d'un outil de recherche d'informations de domaine.

---

## 🛠️ Stack Technique
* **Frontend** : HTML5 Vanilla, CSS3 (Custom Properties), JavaScript (ES6+).
* **Backend** : PHP 8.x (CURL, API Tipimail).
* **Données** : JSON pour les articles et la configuration du blog.
* **APIs Externes** : Google DNS-over-HTTPS, Ipify, OpenWeatherMap.

## 📦 Installation
1. Cloner le dépôt.
2. Configurer vos clés API dans `index.html` (Weather) et `mailer.php` (Tipimail).
3. Déployer sur un serveur supportant PHP.

## 📜 Licence
Ce travail est sous licence [Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License](https://creativecommons.org/licenses/by-nc-nd/4.0/).

This means you can share this work with proper attribution,
but cannot use it commercially or create derivative works.
