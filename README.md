# 🧱 MJC - Site vitrine pour artisan carreleur

Projet réalisé dans le cadre d’un portfolio développeur web.

## 🚀 Stack technique

- PHP (Symfony)
- Doctrine ORM (base de données)
- Twig (templating)
- HTML / CSS / JavaScript
- EasyAdmin (back-office)
- Fixtures (données de test)

---

## 📸 Fonctionnalités

- Site vitrine responsive
- Galerie de réalisations (images dynamiques depuis base de données)
- Back-office sécurisé (EasyAdmin)
- Gestion des images via entités Symfony

---

## 🧠 Architecture

- MVC Symfony
- Entités Doctrine pour la gestion des données
- Fixtures pour initialisation automatique de la base
- Upload et gestion des images avec VichUploaderBundle côté serveur

---

## 🔐 Accès admin (démo locale)

Pour tester le back-office :

- Username : `admin`
- Password : `admin123`

⚠️ Projet de démonstration uniquement

---

## ⚙️ Installation

```bash
git clone <repo>
cd projet
composer install
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
php -S 127.0.0.1:8000 -t public
```
---

## 📸 Aperçu
![screen1(assets/screenshot1.png)
![screen1(assets/screenshot2.png)
![screen1(assets/screenshot3.png)
