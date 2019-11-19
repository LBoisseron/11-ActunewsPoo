<?php


namespace App\Model\Container;

/**
 * Class Container
 * @package App\Model\Container
 * l'objectif d'un container est de garder en mémoire
 *  les différentes instances de notre application et les redistribuer à la demande
 * cf. PSR 11
 */

# une classe "final" ne pourra pas être hérité
final class Container
{
    # stocke l'instance de notre application
    private $instances;

    # stocke l'instance de notre container
    private static $instance;

    # on bloque l'instanciation de la classe depuis l'exterieur
    private function __construct()
    {
        $this->instances = [];
    }

    /**récupérer une instance*/
    public function get(string $key)
    {
        return $this->instances[$key];
    }

    /**stocker une instance*/
    public function set(string $key, $value)
    {
        $this->instances[$key] = $value;
    }
    /**vérifier la présence d'une instance*/
    public function has(string $key)
    {
        return in_array($key, $this->instances);
    }

    /**
     * permet de retourner une instance unique du container
     * -----------------------------------------------------
     * implémentation du SINGLETON
     */
    public static function getInstance()
    {
        /**
         * je crée une instance de Contaner seulement si self::$instance n'existe pas
         */
        if(!isset(self::$instance)) {
            self::$instance = new self();
        }

        /**
         * la 1ere fois je retourne une nouvelle instance;
         * la fois suivante je retourne la même instance.
         */
        return self::$instance;
    }
}
