# MJC - Site Portfolio

Un site web portfolio moderne développé avec Symfony présentant des réalisations d'artisanat professionnel incluant carrelage, rénovations de salles de bain, travaux extérieurs et projets sur mesure.

## 🚀 Fonctionnalités

- **Galerie Portfolio** : Affichage des projets réalisés avec gestion d'images
- **Tableau de Bord Admin** : Interface d'administration sécurisée pour la gestion de contenu avec EasyAdmin
- **Upload d'Images** : Gestion professionnelle d'images avec VichUploader
- **Système de Contact** : Page de contact pour les demandes clients
- **Authentification** : Système d'authentification admin sécurisé

## 🛠️ Stack Technique

- **Framework** : Symfony 7.3
- **Base de Données** : Doctrine ORM avec support MySQL/PostgreSQL
- **Interface Admin** : EasyAdmin Bundle 4.24
- **Upload de Fichiers** : VichUploader Bundle 2.7
- **Frontend** : Stimulus + Turbo
- **PHP** : >=8.2

## 📋 Prérequis

- PHP 8.2 ou supérieur
- Composer
- Node.js & npm (pour la gestion des assets)
- Base de données MySQL/PostgreSQL
- Serveur web (Apache/Nginx) ou Symfony CLI

## 🔧 Installation

1. **Cloner le dépôt**

```bash
git clone <url-du-depot>
cd mjc
```

2. **Installer les dépendances PHP**

```bash
composer install
```

3. **Configurer l'environnement**

```bash
cp .env .env.local
# Éditer .env.local avec vos identifiants de base de données
```

4. **Créer la base de données et exécuter les migrations**

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

5. **Installer et construire les assets**

```bash
php bin/console importmap:install
```

6. **Créer un utilisateur admin** (optionnel)

```bash
php bin/console doctrine:fixtures:load
# ou créer manuellement via le panel admin
```

## 🚀 Utilisation

### Serveur de Développement

```bash
# Avec Symfony CLI (recommandé)
symfony server:start

# Avec le serveur PHP intégré
php -S localhost:8000 -t public/
```

### Accès Admin

- Naviguer vers `/admin`
- Se connecter avec vos identifiants administrateur
- Gérer les images et le contenu via l'interface EasyAdmin

### Docker (Optionnel)

```bash
# Démarrer les services
docker-compose up -d

# Accéder à l'application
# Web : http://localhost:8080
# Base de données : localhost:3306
```

## 📁 Structure du Projet

```
mjc/
├── src/
│   ├── Controller/          # Contrôleurs de l'application
│   │   ├── Admin/           # Contrôleurs EasyAdmin
│   │   ├── HomeController.php
│   │   ├── RealisationsController.php
│   │   └── ContactController.php
│   ├── Entity/              # Entités Doctrine
│   │   ├── Image.php        # Entité Image avec VichUploader
│   │   └── User.php         # Authentification utilisateur
│   └── Repository/          # Dépôts de base de données
├── templates/               # Templates Twig
│   ├── home/
│   ├── realisations/
│   ├── contact/
│   └── admin/
├── public/
│   ├── images/             # Images statiques
│   └── uploads/            # Contenu uploadé par les utilisateurs
├── migrations/             # Migrations de base de données
└── config/                 # Configuration Symfony
```

## 🎨 Personnalisation

### Ajouter de Nouvelles Réalisations

1. **Via le Panel Admin** (Recommandé) :

    - Aller sur `/admin`
    - Naviguer vers "Mes Images"
    - Uploader de nouvelles images avec descriptions

2. **Par Programmation** :
    - Ajouter des images dans `public/uploads/images/`
    - Créer des entités Image via fixtures ou commandes

### Styles

- Styles principaux : `assets/styles/app.css`
- Templates : répertoire `templates/`
- Classes Bootstrap disponibles partout

### Configuration

- Base de données : `config/packages/doctrine.yaml`
- Upload de fichiers : `config/packages/vich_uploader.yaml`
- Panel admin : `src/Controller/Admin/DashboardController.php`

## 🔒 Sécurité

- Authentification utilisateur via Symfony Security
- Routes admin protégées par contrôles d'accès
- Validation et assainissement d'upload de fichiers
- Protection CSRF activée

## 📧 Intégration Contact

La page de contact est prête pour l'intégration avec :

- Symfony Mailer (configuré)
- Formulaires de contact
- Notifications email

Pour implémenter le formulaire de contact :

1. Créer une classe de formulaire ContactType
2. Ajouter la gestion de formulaire au ContactController
3. Configurer les paramètres de mailer dans .env.local

## 🧪 Tests

```bash
# Exécuter les tests PHPUnit
php bin/phpunit

# Exécuter avec couverture
php bin/phpunit --coverage-html coverage/
```

## 🚀 Déploiement

### Configuration Production

1. **Définir l'environnement**

```bash
APP_ENV=prod
APP_DEBUG=false
```

2. **Optimiser pour la production**

```bash
composer install --no-dev --optimize-autoloader
php bin/console cache:clear --env=prod
php bin/console asset-map:compile
```

3. **Configurer le serveur web**

- Configurer la racine du document vers le répertoire `public/`
- S'assurer que le répertoire uploads est accessible en écriture
- Définir les permissions de fichiers appropriées

### Variables d'Environnement

Requis dans `.env.local` :

```bash
DATABASE_URL="mysql://user:password@127.0.0.1:3306/mjc_db"
MAILER_DSN="smtp://localhost"
```

## 📝 Licence

Ce projet est un logiciel propriétaire. Tous droits réservés.

## 🤝 Contribution

Ceci est un projet privé. Pour toute modification ou amélioration, veuillez contacter l'équipe de développement.

## 📞 Support

Pour le support technique ou les questions :

- Créer une issue dans le dépôt du projet
- Contacter l'équipe de développement

---

**Note** : N'oubliez pas de configurer correctement votre environnement de production et de maintenir vos dépendances à jour pour la sécurité.
