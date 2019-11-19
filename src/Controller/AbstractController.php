<?php


namespace App\Controller;

use App\Model\Container\Container;

/**
 * Class AbstractController
 * @package App\Controller
 * AbstractController est une classe abstraite
 * ----------------------------------
 * une classe abstraite est une classe qu'on ne peut pas instancier et donc créer un objet
 * ------------------------------------
 * pour être utilisée elle doit obligatoirement être héritée
 * -----------------------------------
 * elle peut comporter des méthodes abstraites, c'est-à-dire des fonctions qui n'ont pas été écrites (ou décrites)
 */
abstract class AbstractController
{
    use TraitController;
    private $container;

    /**
     * AbstractController constructor.
     * on récupère l'instance du container de notre application
     */
    public function __construct()
    {
        $this->container = Container::getInstance();
    }

    protected function getParameter(string $name)
    {
        return $this->container->get($name);
    }
}