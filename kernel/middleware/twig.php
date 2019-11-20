<?php


# 2a. chargement de TWIG
$loader = new \Twig\Loader\FilesystemLoader(PATH_TEMPLATE);
$twig = new \Twig\Environment($loader, ['cache' => false,]);

# 2b. on stocke l'instance de TWIG dans notre container
$container->set('twig', $twig);
