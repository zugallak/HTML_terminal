**Terminal Portfolio**
======================

**Terminal Portfolio** est un site web interactif simulant une interface de terminal Linux, conçu pour présenter un portfolio professionnel et une expertise technique de manière immersive.

**🚀 Fonctionnalités Clés**
---------------------------

### **1\. Animation de Boot & Infos Système**

*   Séquence de démarrage style Arch Linux avec simulation de logs système.
    
*   Commande neofetch intégrée affichant des informations système personnalisées (Shell, Terminal, Uptime).
    
*   Affichage automatique de la liste des commandes après l'initialisation.
    

### **2\. Navigation & Commandes de Base**

*   Shell interactif complet avec prompt dynamique : guest@Delivlinux in \[directory\] $.
    
*   **Navigation** : cd, ls, ls -l, cd ...
    
*   **Contenu** : cat \[file\] (lecture de fichiers texte et articles de blog).
    
*   **Système** : clear, help, whoami, exit (redirection vers Google).
    
*   **Outils** : curl \[URL\] (ouverture de liens), cowsay, fortune.
    
*   **Dynamique** : weather \[city\], ip a (appels API en temps réel).
    

### **3\. 📧 Simulation SMTP & MTA (MTA Simulator)**

Une simulation haute fidélité d'une interaction avec un serveur ESMTP via Telnet, spécialement conçue pour les professionnels de la délivrabilité e-mail.

*   **Commande** : telnet port25.sh 25.
    
*   **Support du Protocole** : Implémente EHLO, MAIL FROM, RCPT TO, DATA, et QUIT.
    
*   **Sécurité & Validation** :
    
*   **Validation de Syntaxe** : Validation stricte par Regex pour les adresses MAIL FROM:.
    
*   **Restriction du Destinataire** : Accepte uniquement les messages pour alex@port25.sh (erreur 550 User unknown pour les autres).
    
*   **Sécurité HTML** : Échappement automatique des caractères < > pour un affichage sécurisé dans le terminal.
    
*   **Envoi Réel** : Intégration avec l'**API Tipimail** via un backend PHP sécurisé pour envoyer de vrais e-mails depuis la simulation.
    
*   **UX** : Bannière "Hint" intégrée (MOTD) fournissant un tutoriel du protocole lors de la connexion.
    

### **4\. ✍️ Système de Blog Intégré**

*   **Recherche Avancée** : Commande grep \[keyword\] qui parcourt de manière asynchrone tous les articles de blog basés sur JSON.
    
*   **Rendu Markdown** : Moteur personnalisé supportant les titres, gras/italique, listes, liens, blocs de code et images.
    
*   **SEO & Social** :
    
*   Injection dynamique de métadonnées **Schema.org** JSON-LD pour chaque article.
    
*   Commande share pour copier un permalien direct dans le presse-papier.
    

### **5\. Interactions Avancées**

*   **Autocomplétion** : Support de la touche **Tab** pour les commandes, dossiers et noms de fichiers.
    
*   **Historique de Commandes** : Navigation dans les entrées précédentes avec les flèches **Haut/Bas**.
    
*   **Moteur de Thèmes** : Switch entre dracula (défaut), hacker, light, et ubuntu. Le choix est persisté dans le localStorage.
    
*   **Routage** : Support des paramètres URL (?article=slug) pour lier directement un contenu spécifique.
    

**🛠️ Stack Technique**
-----------------------

*   **Frontend** : HTML5 Vanilla, CSS3 (Variables modernes/Root), JavaScript (ES6+).
    
*   **Backend** : PHP (Intégration CURL/API Tipimail).
    
*   **Stockage** : JSON pour le contenu du blog, LocalStorage pour la persistance du thème.
    

**📦 Installation**
-------------------

1.  Cloner ce dépôt.
    
2.  S'assurer d'avoir un environnement PHP pour utiliser la fonctionnalité d'envoi de mails.
    
3.  Configurer vos clés API Tipimail dans mailer.php.
    
4.  Ouvrir index.html dans votre navigateur.
    

**📜 Licence**
--------------

Ce travail est sous licence [Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License](https://creativecommons.org/licenses/by-nc-nd/4.0/).
