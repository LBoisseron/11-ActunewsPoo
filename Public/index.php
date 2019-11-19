<?php

use \Symfony\Component\HttpFoundation\Request;

/**
 * ici, notre fichier index.php représente notre contrôleur frontal.
 * il a pour charge de rediriger la requête de l'utilisateur en s'aidant des paramètres dans l'URL.
 */

# aperçu de $_GET
#echo '<pre>';
#print_r($_GET);
#echo '</pre>';

# chargement automatique des classes
# require_once 'autoload.php';

# autochargement des classes avec Composer
require_once '../vendor/autoload.php';

# 1. arrivée de la requête
# correspond à la requête entrante de notre utilisateur
$request = Request::createFromGlobals();
# dump ($request);

# mise en place du Container
$container = \App\Model\Container\Container::getInstance();

# on stocke la requête de l'utilisateur dans le container
$container->set('request', $request);
# dump($container);

# chargement de la configuration
require_once '../config.php'; // on charge la config avant de charger l'application

# chargement de l'application
require_once '../app.php';

# aperçu de $_GET
# dump( $_GET );