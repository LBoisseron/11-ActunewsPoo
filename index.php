<?php
/**
 * ici, notre fichier index.php représente notre contrôleur frontal.
 * il a pour charge de rediriger la requête de l'utilisateur en s'aidant des paramètres dans l'URL.
 */

# aperçu de $_GET
echo '<pre>';
print_r($_GET);
echo '</pre>';

# chargement automatique des classes
require_once 'autoload.php';

# chargement des routes
require_once 'routes.php';