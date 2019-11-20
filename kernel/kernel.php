<?php
/**
 * le fichier kernel va permettre de charger les composants de notre application
 * ------------------------------------------
 * piste d'amélioration, nous utiliserions une approche OO.
 */

# chargement du router
require_once 'middleware/router.php';

# chargement de twig
require_once 'middleware/twig.php';

# chargement de PDO
require_once 'middleware/pdo.php';