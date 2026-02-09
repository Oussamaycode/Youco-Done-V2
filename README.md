
# 🍽️ Youco'Done – Plateforme de réservation de restaurants

## 📌 Description du projet

**Youco'Done** est une plateforme web permettant aux **clients** de réserver des tables dans des restaurants en quelques clics, tout en offrant aux **restaurateurs** et **administrateurs** des outils simples pour gérer restaurants, réservations et statistiques.

Ce projet vise à poser des bases solides en **Laravel**, en respectant un **cahier des charges fonctionnel et technique**, avec une évolution progressive en plusieurs versions.

---

## 🎯 Objectifs principaux

* Mettre en place une **authentification sécurisée**
* Gérer les **restaurants**, **utilisateurs** et **réservations**
* Implémenter un **système de rôles et permissions**
* Fournir une **interface simple et responsive**
* Préparer une architecture évolutive (paiement, notifications, jobs, statistiques)

---

## 🧱 Stack technique

* **Backend** : Laravel
* **Frontend** : Blade + Tailwind CSS
* **Authentification** : Laravel Breeze ou Jetstream
* **Base de données** : MySQL
* **Gestion des rôles** : Spatie Laravel Permission ou Gates/Policies
* **Paiement (v2)** : Stripe ou PayPal (mode test)
* **Emails** : Laravel Mail
* **PDF** : FPDF
* **QR Code** : Simple QrCode
* **Dates & horaires** : Carbon
* **Jobs & Queues** : Laravel Queue
* **Tests** : PHPUnit

---

## 👥 Rôles utilisateurs

* **Client**
* **Restaurateur**
* **Administrateur**

Chaque rôle dispose de permissions spécifiques définies par le système d’autorisation.

---

## 🚀 Version 1 – Fonctionnalités de base

### 🔐 Authentification & profils

* Inscription et connexion sécurisées
* Gestion du profil utilisateur (consultation / modification)

### 🏠 Gestion des restaurants (restaurateur)

* Création d’un restaurant
* Informations :

  * Nom
  * Localisation
  * Type de cuisine
  * Capacité
  * Horaires
  * Photos
  * Menus
* Modification et suppression de ses propres restaurants

### 🔍 Recherche & consultation (client)

* Recherche par :

  * Ville
  * Type de cuisine
  * Plage horaire
  * Nom du restaurant
* Consultation :

  * Détails du restaurant
  * Menus
  * Photos
  * Avis
  * Disponibilités
* Ajout de restaurants aux favoris ⭐

### 🛡️ Administration

* Suppression de restaurants
* Tableau de bord :

  * Nombre de restaurants actifs
  * Statistiques globales

### 🔑 Permissions

* Les restaurateurs ne modifient que leurs restaurants
* Les clients ne réservent que pour eux-mêmes
* Les administrateurs ont un contrôle total

---

## 🚀 Version 2 – Fonctionnalités avancées

### 🗓️ Réservations

* Sélection d’une date et d’un créneau via un calendrier interactif
* Vérification des créneaux :

  * Pas dans le passé
  * Pas de chevauchement
  * Respect des horaires du restaurant

### 📆 Gestion des disponibilités (restaurateur)

* Heures de service
* Fermetures exceptionnelles
* Créneaux complets

### 🔔 Notifications

* Notification (email ou dashboard) lors d’une nouvelle réservation

### 💳 Paiement en ligne

* Paiement d’un acompte ou du montant total
* Intégration Stripe / PayPal (mode test)
* Gestion des erreurs de paiement

### 📧 Confirmation & documents

* Email de confirmation après paiement
* Génération d’une facture PDF (FPDF)
* Téléchargement d’un **QR Code unique** contenant :

  * Nom du restaurant
  * Date
  * Heure
  * Numéro de table

### ⚙️ Jobs & performance

* Génération du QR Code via **Job Queue asynchrone**
* Nettoyage automatique des réservations de plus de 30 jours (Cron Job)

### 📊 Dashboard administrateur

* Suivi :

  * Réservations
  * Paiements
  * Statuts
* Statistiques :

  * Top restaurants
  * Pics horaires
  * Réservations confirmées
* Requête spécifique :

  * Nombre de restaurants par ville (**Query Builder uniquement**)

---

## 🧪 Tests & qualité

* Tests unitaires avec PHPUnit :

  * Authentification
  * Création de restaurant
  * Réservation
* Validation backend avancée :

  * Emails
  * Téléphone
  * Dates & horaires
  * Paiements

---

## 📁 Installation (exemple)

```bash
git clone https://github.com/your-username/youcodone.git
cd youcodone
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

---

## 📌 Statut du projet

🟡 **En cours de développement**
✔️ Version 1 : Fondations fonctionnelles
🔜 Version 2 : Réservations, paiements et automatisations


