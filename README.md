
# 🏥 Portail Santé Collaborateur CMSS  
### SRM Casablanca-Settat

![Laravel](https://img.shields.io/badge/Laravel-Framework-red?style=for-the-badge&logo=laravel)
![Filament](https://img.shields.io/badge/Filament-Admin%20Panel-orange?style=for-the-badge)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-Frontend-blue?style=for-the-badge&logo=tailwindcss)
![PHP](https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql)

Application web **Intranet** développée pour les collaborateurs de la **SRM Casablanca-Settat**, permettant un accès rapide aux **documents administratifs de santé** et à un **annuaire médical interactif des prestataires conventionnés**.

---

# 📌 À propos

Ce projet a été réalisé dans le cadre d’un **stage académique** au sein de :

**SRM Casablanca-Settat**  
*Société Régionale Multiservices*  
Division **Études Clientèle Privée**

L'objectif du projet est de **faciliter l'accès aux services de santé administratifs pour les collaborateurs** à travers une plateforme interne simple, rapide et intuitive.

Le portail permet notamment :

- le **téléchargement de documents administratifs CMSS**
- la **consultation d'un annuaire médical**
- une **gestion administrative complète via un panel d'administration**

---

# 🚀 Fonctionnalités

## 👨‍💻 Front-Office (Espace Collaborateur)

Interface destinée aux **employés de la SRM**.

✨ Fonctionnalités principales :

- 🎨 **Design moderne et responsive**
  - Couleurs officielles SRM  
  - Bleu `#2D9BD6`  
  - Orange `#F19740`

- 📄 **Téléchargement de documents administratifs**
  - Bulletins d’adhésion
  - Déclarations de perte
  - Autres documents CMSS
  - Formats : **PDF / Word**

- 🏥 **Annuaire médical interactif**
  organisé en **5 catégories** :

  - Cliniques
  - Médecins conventionnés
  - Médecins non conventionnés
  - Laboratoires
  - Pharmacies

- ⚡ **Recherche instantanée (Live Search)**  
  développée avec **Alpine.js**

  Permet de filtrer les médecins par :

  - Nom
  - Spécialité

  👉 **Sans rechargement de page**

---

## 🛠 Back-Office (Espace Administrateur)

Panel d'administration complet basé sur **Filament PHP v3**.

Fonctionnalités :

- 🔐 Interface **sécurisée**
- 🇫🇷 Interface **100% traduite en français**
- 🗂 Gestion complète des prestataires de santé

CRUD complet :

- ➕ Créer
- 👁 Lire
- ✏ Modifier
- ❌ Supprimer

pour les catégories suivantes :

- Cliniques
- Médecins conventionnés
- Médecins non conventionnés
- Laboratoires
- Pharmacies

📂 Gestion des documents administratifs :

- Upload sécurisé
- Stockage Laravel
- Génération de **liens symboliques**

```bash
php artisan storage:link
````

---

# 🧰 Technologies utilisées

## Backend

* ⚙ **Laravel (PHP)**

## Admin Panel

* 🧩 **Filament PHP v3**

## Frontend

* 🎨 **Laravel Blade**
* 💨 **Tailwind CSS**
* ⚡ **Alpine.js**

## Base de données

* 🗄 **MySQL**

## Environnement de développement

* 🖥 **Laragon**
* 💻 **Windows**

---

# ⚙ Installation en local

Suivez les étapes suivantes pour exécuter le projet en local.

---

## 1️⃣ Cloner le projet

```bash
git clone https://github.com/jbira01/SRM-CS-Portail-DOCS-Sante.git
```

Entrer dans le dossier :

```bash
cd SRM-CS-Portail-DOCS-Sante
```

---

## 2️⃣ Installer les dépendances

```bash
composer install
```

---

## 3️⃣ Créer le fichier d'environnement

```bash
cp .env.example .env
```

---

## 4️⃣ Générer la clé Laravel

```bash
php artisan key:generate
```

---

## 5️⃣ Configurer la base de données

Modifier le fichier **.env**

```env
DB_DATABASE=nom_de_la_base
DB_USERNAME=root
DB_PASSWORD=
```

Créer la base de données dans **MySQL**.

---

## 6️⃣ Exécuter les migrations

```bash
php artisan migrate
```

---

## 7️⃣ Créer le lien de stockage

```bash
php artisan storage:link
```

---

## 8️⃣ Lancer le serveur

```bash
php artisan serve
```

Le projet sera accessible sur :

```
http://127.0.0.1:8000
```

---

## 9️⃣ Créer un compte administrateur Filament

```bash
php artisan make:filament-user
```

Puis accéder à l'administration :

```
http://127.0.0.1:8000/admin
```

---

# 👨‍💻 Auteurs

Projet développé par :

**Yasser Jabir**
Étudiant en **2ème année Développement Digital Full-Stack**
OFPPT

**Haiba Housny**

Étudiante en **2ème année Développement Digital Full-Stack**
OFPPT

**SRM Casablanca-Settat**

---

# 📄 Licence

Projet réalisé dans un cadre **académique et professionnel (stage)**.
Tous droits réservés à **SRM Casablanca-Settat**.

```


