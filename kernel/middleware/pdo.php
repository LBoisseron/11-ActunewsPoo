<?php

# récupération de l'instance de PDO
$pdo = \App\Model\DB\DbFactory::createPdo();

# stockage de l'instance dans le container
$container->set('pdo', $pdo);