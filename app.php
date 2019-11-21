<?php

# 1. chargement du kernel
require_once 'kernel/kernel.php';

# 2. traitement de la requête
/** @var \Symfony\Component\HttpFoundation\Response $response */
$response = call_user_func_array([new $controller, $action], []);
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