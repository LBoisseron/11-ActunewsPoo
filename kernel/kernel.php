<?php
/**
 * le fichier kernel va permettre de charger les composants de notre application
 * ------------------------------------------
 * piste d'amélioration, nous utiliserions une approche OO.
 */
//----------début du chargement du KERNEL-----------
# chargement du router
require_once 'middleware/router.php';

# chargement de twig
require_once 'middleware/twig.php';

# chargement de PDO
require_once 'middleware/pdo.php';
//----------fin du chargement du KERNEL-----------

// KERNEL IS READY

/**
 * récupération des classes à charger par le kernel dans l'application
 */
$onKernelReady = include_once 'event/onKernelReady.php';

# on parcourt les classes du tableau
foreach ($onKernelReady as $class) {

    # on instancie chaque classe
    $obj = new $class;

    # on vérifie que chaque classe est bie nune instance de KernelEventInterface
    if ($obj instanceof \App\Model\Kernel\KernelEventInterface) {

        # onexécute la fonction load
        $obj->load();
    }
}
