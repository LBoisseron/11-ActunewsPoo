<?php

# récupération des paramètres GET et affectation d'une valeur par défaut.
# https://www.php.net/manual/fr/language.operators.comparison.php
//$controller = $_GET['controller'] ?? 'default';
//$action     = $_GET['action'] ?? 'home';

$controller = ucfirst($_GET['controller']) . 'Controller'; //?? 'default';
$action     = $_GET['action']; // ?? 'home';
//------------ROUTAGE AUTOMATIQUE----------------------
//$obj = new $controller();
//$obj->$action();
call_user_func_array([$controller, $action], []);

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
$membreCtrl = new MembreController();

//if ( $controller == 'membre' && $action == 'register' ) {
//    $membreCtrl->register();
//}

//if ( $controller == 'membre' && $action == 'login' ) {
//    $membreCtrl->login();
//}
 # maintenant que nous avons le autoload, nous pouvons mettre en commentaire les require_once