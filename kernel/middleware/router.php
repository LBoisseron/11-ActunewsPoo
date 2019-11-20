<?php
# 1. déduction du controller et de l'action
# récupération des paramètres GET et affectation d'une valeur par défaut.
# https://www.php.net/manual/fr/language.operators.comparison.php
//$controller = $_GET['controller'] ?? 'default';
//$action     = $_GET['action'] ?? 'home';
$controller = 'App\\Controller\\' . ucfirst( ($request->get('controller') ?? DEFAULT_CONTROLLER) ) . 'Controller'; //?? 'default';
$action     = $request->get('action') ?? DEFAULT_ACTION; // home