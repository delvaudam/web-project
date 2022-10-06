<?php
/**
 * SQL migration manager
 */

/**
 * Database connection
 */
require_once __DIR__ . "/../config.php";
require_once __DIR__ . "/../helpers/Database.php";

/**
 * Command options
 */
$args = $_SERVER["argv"];
$help = ["--help", "-help", "-h", "-?", "h", "help", "?"];
if ($_SERVER["argc"] != 2 || in_array($args[1], $help)) {
    echo "Cette commande comporte un paramètre indiquant le fichier SQL à exécuter (le paramètre ne contient pas l'extension du fichier).\n 
    Ce fichier doit être présent dans le dossier migration\n
    Exemple de commande : php migration.php user\n
    Cette commande exécutera le code SQL présent dans le fichier user.sql du dossier migration";
    die;
}

/**
 * Migration path
 */
$file = $args[1] . ".sql";
$file_path = getcwd() . "/" . $file;

if (file_exists($file_path)) {
    echo "Le fichier $file va être migré\n";
    migrate(file_get_contents($file_path));
    echo "Le fichier $file a été migré avec succès\n";
} else {
    echo "Ce fichier de migration n'existe pas!";
}

/**
 * @param string $migration
 * @return void
 * Migration script
 */
function migrate(string $migration):void {
    $dbh = Database::connect();
    $dbh->query($migration);
}