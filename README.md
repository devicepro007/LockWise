# LockWise - Lightweight PHP Marketing & Product Catalog System

![PHP](https://img.shields.io/badge/PHP-8.0%2B-blue)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange)
![License](https://img.shields.io/badge/License-AGPLv3-red)
![Status](https://img.shields.io/badge/Status-Active-success)

---

##  Overview

LockWise is a **lightweight, framework-free PHP website** built for a door lock brand.  
It includes a marketing site, product catalog, contact system, and admin dashboard.

The project uses:
- Native PHP
- PDO (MySQL)
- Modular include-based architecture
- `.env` configuration via `vlucas/phpdotenv`

---

### Features
-  Responsive multi-page website
-  Smart lock product catalog with detailed specifications
-  Dynamic homepage powered by reusable PHP content arrays
-  Contact form with MySQL database storage
-  Password-protected admin dashboard for viewing customer messages
-  Message deletion support in admin panel
-  Reusable PHP components (`header.php`, `footer.php`)
-  PDO-based MySQL integration with prepared statements
-  SEO-ready metadata (Open Graph + Twitter cards)
-  Google Maps service area integration
-  Amazon purchase integration
-  Environment variable support via `.env`
-  Composer dependency management
-  PWA support (`site.webmanifest`, Apple touch icon)
-  Licensed under GNU AGPLv3

###  Public Website
- Dynamic homepage driven by configurable sections
- Product catalog powered by PHP arrays
- About & contact pages
- Reusable header/footer layout
- SEO + Open Graph support

###  Contact System
- Form fields: name, email, phone, address, message
- Stores submissions in MySQL database
- Success confirmation page redirect

###  Admin Panel
- Password-protected dashboard
- Session-based authentication
- View & delete messages
- Simple logout system

###  Backend
- PDO-based database layer
- Environment-based configuration (.env)
- Prepared statements for security

---

##  Tech Stack

| Layer | Technology |
|------|------------|
| Backend | PHP 8+ |
| Database | MySQL / MariaDB |
| Architecture | Modular PHP (no framework) |
| Dependency Manager | Composer |
| Security | PDO + Sessions |

---

##  Quick Start

### 1. Install an HTTP server (e.g. Apache/Nginx)

Apache: https://httpd.apache.org/download.cgi

Nginx: https://nginx.org/en/download.html

### 2. Clone the source code to the root of the HTTP server
```bash
git clone https://github.com/devicepro007/lockwise.git
cd lockwise
composer install
```

### 3. Configure `.env` in the root of the HTTP server

```
DB_HOST=localhost
DB_NAME=lockwise
DB_USER=root
DB_PASSWORD=yourPassword
DB_CHARSET=utf8mb4

ADMIN_PASSWORD=yourAdminPassword
```

### 4. Install MySQL or MariaDB

MySQL: https://www.mysql.com/downloads/
MariaDB: https://mariadb.org/download/

### 5. Import database to MySQL/MariaDB
```bash
mysql -u root -p lockwise < database/schema.sql
```

### 6. Run the HTTP server

Apache:
```bash
httpd
```

Nginx:
```bash
sudo systemctl start nginx
```

---

##  Project Structure
```text
.
├──  DEPLOY.md                  # Deployment instructions
├──  LICENSE                    # License information
├──  README.md                  # Project documentation
│
├──  assets/                    # Reusable layout components
│   ├── additional.php
│   ├── footer.php
│   └── header.php
│
├──  composer.json              # PHP dependencies
├──  composer.lock              # Locked dependency versions
│
├──  css/
│   └── style.css                 # Main stylesheet
│
├──  database/                  # Database configuration
│   ├── connection.php
│   ├── db.php
│   └── schema.sql
│
├──  images/                    # Static image assets
│   └── ...
│
├──  index.php                  # Homepage entry point
│
├──  pages/                     # Website pages
│   ├── about.php
│   ├── contact.php
│   ├── hamburger-menu.php
│   ├── products.php
│   ├── reviews.php
│   └── send-message-success.php
│
├──  robots.txt                 # Search engine rules
├──  send-message.php           # Contact form handler
├──  site.webmanifest           # PWA metadata
│
├──  .gitignore                 # Ignored files
├──  .gitattributes             # Git settings
│
├──  vendor/                    # Composer packages
│   └── ...
│
└──  view-messages.php          # Message viewer/admin page
```

---

##  Architecture Overview

```
Browser
  
PHP Pages
  
Config Layer (additional.php)
  
Layout Components (header/footer)
  
PDO Database Layer
  
MySQL Database
```

---

##  Database Schema

```sql
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(50),
    address TEXT,
    message TEXT,
    sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

##  Security Notes

### Strengths
- PDO prepared statements (SQL injection protection)
- Session-based authentication
- Environment-based secrets

### Weaknesses
- No CSRF protection
- Plaintext admin password
- Minimal validation
- Single-role admin system

---

## Possible Improvements
- **Improved security hardening**  Add CSRF protection, stronger session management, rate limiting, safer error handling, and password hashing for admin authentication.
- **Product management dashboard**  Create an admin panel for adding, editing, and removing products without manually modifying source code.
- **Configuration modularization**  Split `assets/additional.php` into smaller dedicated configuration files (e.g. products, SEO, company settings, homepage sections) for improved maintainability and scalability.

---

##  License

Licensed under **GNU AGPLv3**.

---

##  Author

Developed by **DPro7**.
