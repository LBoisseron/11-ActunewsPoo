<?php
use \Symfony\Component\HttpFoundation\Request;

# 1. arrivée de la requête
# correspond à la requête entrante de notre utilisateur
$request = Request::createFromGlobals();
# dump ($request);

# récupération des paramètres GET et affectation d'une valeur par défaut.
# https://www.php.net/manual/fr/language.operators.comparison.php
//$controller = $_GET['controller'] ?? 'default';
//$action     = $_GET['action'] ?? 'home';
$controller = 'App\\Controller\\' . ucfirst($request->get('controller')) . 'Controller'; //?? 'default';
$action     = $request->get('action'); // ?? 'home';

//-----------------chargement de TWIG--------------------

#récupération du chemin absolu vers le dossier "templates"
define( 'PATH_ROOT', dirname( $request->server->get('SCRIPT_FILENAME'), 2 ) );
define( 'PATH_TEMPLATE', PATH_ROOT . '/templates' );

$loader = new \Twig\Loader\FilesystemLoader('/path/to/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

//------------ROUTAGE AUTOMATIQUE----------------------
# exécution automatique de routage
# 2. traitement de la requête
/** @var \Symfony\Component\HttpFoundation\Response $response */
$response = call_user_func_array([$controller, $action], []);
# dump($response);


# 3. on retourne une réponse au client
$response->send();

//------------ROUTAGE MANUEL----------------------------
// default controller
//require_once 'src/Controller/DefaultController.php';
//$defaultCtrl = new DefaultController();

//if ( $controller == 'default' && $action == 'home' ) {
//    $defaultCtrl->home();
//}

//if ( $controller == 'default' && $action == 'category' ) {
//    $defaultCtrl->category();
//}

//if ( $controller == 'default' && $action == 'article' ) {
//    $defaultCtrl->article();
//}

// membre controller
//require_once 'src/Controller/MembreController.php';
//$membreCtrl = new MembreController();

//if ( $controller == 'membre' && $action == 'register' ) {
//    $membreCtrl->register();
//}

//if ( $controller == 'membre' && $action == 'login' ) {
//    $membreCtrl->login();
//}
 # maintenant que nous avons le autoload, nous pouvons mettre en commentaire les require_once