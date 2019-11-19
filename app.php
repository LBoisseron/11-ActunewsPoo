<?php

# 1. déduction du controller et de l'action
# récupération des paramètres GET et affectation d'une valeur par défaut.
# https://www.php.net/manual/fr/language.operators.comparison.php
//$controller = $_GET['controller'] ?? 'default';
//$action     = $_GET['action'] ?? 'home';
$controller = 'App\\Controller\\' . ucfirst( ($request->get('controller') ?? DEFAULT_CONTROLLER) ) . 'Controller'; //?? 'default';
$action     = $request->get('action') ?? DEFAULT_ACTION; // home

# 2a. chargement de TWIG
$loader = new \Twig\Loader\FilesystemLoader(PATH_TEMPLATE);
$twig = new \Twig\Environment($loader, ['cache' => false,]);

# 2b. on stocke l'instance de TWIG dans notre container
$container->set('twig', $twig);

# 3. traitement de la requête
/** @var \Symfony\Component\HttpFoundation\Response $response */
$response = call_user_func_array([new $controller, $action], []);
# dump($response);


# 4. on retourne une réponse au client
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