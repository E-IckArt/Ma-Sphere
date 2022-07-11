# Ma sphère - Projet d'initiation à PHP

_Projet d'application de la série de live de Lucas DELOBELLE, formateur STUDI._

## Notions mises en application :

-   boucles,
-   tableaux associatifs,
-   require et require_once,
-   organisation basique des fichiers,
-   formulaires,
-   superglobales \$\_GET, \$\_POST,
-   signature d'une fonction,
-   POO : classe, constructeur, encapsulation, héritage, classe abstraite
-   debug,
-   gestion des exceptions,
-   création d'une base de données avec PhpMyAdmin,
-   PDO statement,
-   CRUD,

## Environnement, frameworks :

-   PHP Vanilla 8.1.6,
-   Bootstrap 5.2.0, installation locale,
-   Serveur BD : MariaDB,
-   Serveur Web : Apache/2.4.53

## Configuration

### PDO

Créer un fichier `db.ini` dans le dossier `pdo` avec le format suivant :

```ini
DB_DSN="mysql:host=host;dbname=dbname;charset=charset"
DB_USER="dbUser"
DB_PASSWORD="password"

```
