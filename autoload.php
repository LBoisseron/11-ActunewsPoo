<?php
spl_autoload_register(function($class) {
    // echo 'chargement de : ' . $class . '<br>';
    require_once 'src/Controller/' . $class . '.php';
});