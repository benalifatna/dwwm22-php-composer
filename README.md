# Composer

# Comment initialiser proprement un projet php?
 - Initialisation de GIT et GIT HUB
 - Initialisation de composer
 - Sécurisation du point d'entrée de l'application
 - Installer un paquet important 

# Bien démarrer un projet en PHP orienté objet (POO)

## Objectif

Mettre en place une **base propre, sécurisée et maintenable** pour démarrer un projet PHP en programmation orientée objet.

---

## 1️. Initialisation du dépôt Git

1. Créer un nouveau dépôt sur **GitHub**
2. Créer un nouveau dossier local et y initialiser GIT :
```bash
git init
```
3. Réaliser une première version de l’application
4. Lier le dépôt local au dépôt GitHub :
```bash
git add .
git commit -m "Initialisation du projet"
git remote add origin <url-du-dépôt>
git push -u origin main
```

---

## 2️. Initialisation de Composer

1. Initialiser Composer :
```bash
composer init
```
2. Suivre les instructions proposées
3. Créer un fichier `.gitignore` et y ajouter :
```
/vendor
```
4. Configurer l’autoload dans le fichier `composer.json` (PSR-4 recommandé) :
```json
"autoload": {
    "psr-4": {
        "App\\": "src/"
    }
}
```
5. Générer l’autoload :
```bash
composer dump-autoload
```

---

## 3️. Sécurisation des dépendances

Installer le paquet permettant de bloquer l’utilisation de dépendances vulnérables :

```bash
composer require --dev roave/security-advisories:dev-latest
```

📌 Référence :  
https://github.com/Roave/SecurityAdvisories

---

## 4️. Sécurisation du point d’entrée

- Utiliser un **front controller** unique : `public/index.php`
- Interdire l’accès direct aux dossiers sensibles (`src`, `vendor`, etc.)
- Centraliser la gestion des erreurs et des exceptions

---

## 5️. Démarrage du serveur PHP intégré

Depuis la racine du projet :

```bash
php -S localhost:8000 -t public
```

L’application sera accessible à l’adresse :  
http://localhost:8000

---

## 6️. Organisation du code

### 📁 `/src/`
- Interfaces
- Classes abstraites
- Classes concrètes
- Respect des principes **SOLID**

### 📁 `/public/index.php`
- Charger en premier l’autoload de Composer :
```php
require_once __DIR__ . '/../vendor/autoload.php';
```
- Instancier et utiliser les classes nécessaires

---

## 📂 Arborescence

```
7-composer/
├── public/
│   └── index.php
└── src/
    ├── AbstractClasses/
    ├── Classes/
    ├── Interfaces/
├── vendor/
├── .gitignore
├── composer.json
├── composer.lock
├── README.md
├── serve
```

---
