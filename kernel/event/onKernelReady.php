<?php

/**
 * je vais déclarer toutes les classes que je souhaite charger après l'initialisation du kernel
 */
return [
    'TwigExtension' => \App\Model\Twig\TwigExtension::class, // chemin complet vers notre classe
];
