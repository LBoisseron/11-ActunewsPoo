<?php


namespace App\Model\DB;

/**
 * Class DbFactory
 * @package App\Model\DB
 * une factory est une classe capable de créer des objets.
 * c'est aussi un design pattern https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/StaticFactory
 */
final class DbFactory
{
    /**
     * permet de fabriquer et retourner une instance de PDO
     */
    public static function createPdo(): \PDO
    {
        $bdd = new \PDO('mysql:host='. DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
        $bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
        $bdd->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        return $bdd;
    }
}