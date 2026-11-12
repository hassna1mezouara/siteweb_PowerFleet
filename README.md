# 🚛 Site web Power Fleet

Site web vitrine et interactif développé pour **Power Fleet**, société marocaine spécialisée dans la géolocalisation des véhicules, la gestion de flotte et le développement informatique.

> Projet réalisé dans le cadre d'un **stage d'initiation** (du 01/07 au 01/08, année universitaire 2024/2025) à **Marrakech**.

---

## 📋 Table des matières

- [À propos](#-à-propos)
- [Contexte du projet](#-contexte-du-projet)
- [Fonctionnalités](#-fonctionnalités)
- [Pages du site](#-pages-du-site)
- [Technologies et outils](#-technologies-et-outils)
- [Conception de la base de données](#-conception-de-la-base-de-données-merise)
- [Structure du projet](#-structure-du-projet)
- [Installation en local](#-installation-en-local)
- [Auteur](#-auteur)

---

## 📖 À propos

**Power Fleet** est une entreprise basée à Marrakech qui propose :

- 📍 Géolocalisation des véhicules (suivi en temps réel, gestion des maintenances)
- 🌐 Création de sites web (vitrine, extranet)
- 💻 Logiciels sur mesure
- 🖥️ Vente de matériel informatique
- 🎨 Infographie et design
- 🎓 Formation professionnelle

Ce projet est le **nouveau site web** de l'entreprise, plus moderne, plus dynamique et plus interactif.

## 🎯 Contexte du projet

**Problématique :** concevoir et développer un site web interactif et informatif pour Power Fleet, en s'inspirant des meilleures pratiques observées chez la concurrence (Rewire Security, STG Telematics, etc.), afin d'améliorer l'expérience utilisateur.

**Objectifs :**
- Améliorer l'engagement des visiteurs
- Renforcer l'image de marque de l'entreprise
- Faciliter le contact et le support client

**Recommandations issues de l'analyse concurrentielle :**
1. Simplifier la page d'accueil et mettre en avant l'essentiel
2. Ajouter des vidéos démonstratives
3. Ajouter une section FAQ

Le design a été réalisé avec **Figma**, en reprenant les couleurs du logo Power Fleet.

## ✨ Fonctionnalités

- Menu de navigation sur toutes les pages (Accueil, Power Fleet, Nos services, Blogs, FAQ, Contact)
- Page d'accueil riche : services, chiffres clés, témoignages, vidéo, actualités, clients
- Pages de services en *Card Layout* (cartes cliquables)
- Blog avec 5 articles
- Section FAQ
- **Formulaire de contact** : envoi d'e-mails via PHP et **PHPMailer** (SMTP)
- **Système de tickets d'assistance** :
  - créer un ticket (stocké en base de données)
  - consulter la liste de ses tickets à partir de son e-mail
  - afficher un ticket à partir de son ID de suivi
- Espace client avec formulaire de connexion (en cours de développement)

## 🗂️ Pages du site

| Section | Pages |
|---|---|
| **Accueil** | Page d'accueil, pied de page |
| **Power Fleet** | À propos de la société, Nos offres, Nos recrutements |
| **Nos services** | Géolocalisation de véhicules, Création de sites web, Logiciels sur mesure, Vente de matériel informatique, Infographie et design, Formation professionnelle |
| **Blogs** | Lutter contre l'immigration clandestine, Comment réaliser un site web en 10 étapes, Comment choisir une solution de gestion de flotte, La gestion de carburant, Solution CANbus pour le suivi de la consommation de carburant |
| **FAQ** | Questions fréquentes sur les produits et services |
| **Contact** | Formulaire de contact et coordonnées |
| **Espace client** | Connexion client |
| **Aide** | Créer un ticket, Voir la liste de mes tickets, Afficher un ticket par ID de suivi |

## 🛠️ Technologies et outils

**Langages**

![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)

**Outils**

- **Figma** : maquettes et design UI/UX
- **XAMPP** : serveur local (Apache, MySQL, PHP)
- **Visual Studio Code** : éditeur de code
- **PhotoRoom** : retouche d'images (suppression d'arrière-plan)
- **PHPMailer** : envoi d'e-mails via SMTP
- **Git / GitHub** : versionnement du code

## 🗄️ Conception de la base de données (Merise)

La conception suit la méthode **Merise** (MCD, MLD, MPD).

**Relation :** un contact peut être associé à plusieurs tickets (0,n) ; chaque ticket est lié à un seul contact (1,1).

**Modèle physique :**

```
Contact (ID_Contact PK, Nom, Email, Téléphone, Entreprise, Message)

Ticket  (ID_Ticket PK, Email, Type de demande, Groupe de ticket,
         Sévérité, Sujet, Message, ID_Contact FK)
```

## 📁 Structure du projet

```
SITEPOWERFLEET/
└── pages/
    ├── *.php              # Pages du site (accueil, services, blogs, FAQ, contact, tickets...)
    ├── fichiercss/        # Feuilles de style CSS et scripts JavaScript
    ├── statics/           # Images, logos et vidéo
    └── phpmailer/         # Bibliothèque PHPMailer
```

## 🚀 Installation en local

### Prérequis
- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL + PHP)
- Un navigateur web

### Étapes

1. **Cloner le dépôt** dans le dossier `htdocs` de XAMPP :
   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/hassna1mezouara/siteweb_PowerFleet.git SITEPOWERFLEET
   ```

2. **Démarrer** Apache et MySQL depuis le panneau de contrôle XAMPP.

3. **Créer la base de données** dans phpMyAdmin (`http://localhost/phpmyadmin`) avec les tables `contact` et `ticket` décrites ci-dessus.

4. **Configurer la connexion** à la base de données dans les fichiers PHP concernés (hôte, nom de la base, utilisateur, mot de passe).

5. **Configurer PHPMailer** (serveur SMTP, adresse et mot de passe d'application) dans le script du formulaire de contact.

6. **Ouvrir le site** dans le navigateur :
   ```
   http://localhost/SITEPOWERFLEET/pages/accuiel.php
   ```

> ⚠️ **Sécurité :** ne publiez jamais de vrais identifiants (base de données, SMTP) sur GitHub. Utilisez des valeurs d'exemple dans le code partagé.

## 📚 Références

- [Slider Revolution : CSS slideshow](https://www.sliderrevolution.com/resources/css-slideshow/)
- [CodingNepal : Responsive card slider](https://www.codingnepalweb.com/responsive-card-slider-javascript/)
- [Rewire Security](https://www.rewiresecurity.co.uk/)
- [STG Telematics](https://stgtelematics.com/en/accueil-english/)
- [Site Power Fleet](https://www.powerfleet.ma/)

## 👩‍💻 Auteur

**Hassna Mezouara**
Étudiante en Informatique décisionnelle et science des données
Université Cadi Ayyad, École Supérieure de Technologie d'Essaouira

**Encadrant de stage :** M. Said Raid

---

⭐ N'hésitez pas à mettre une étoile au dépôt si ce projet vous plaît !
