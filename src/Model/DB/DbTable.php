<?php


namespace App\Model\DB;

use App\Model\Container\Container;

/**
 * Class DbTable
 * @package App\Model\DB
 * permet de faire des requêtes CRUD sur les tables d'une BDD
 */
abstract class DbTable
{
    # nom de la table
    protected $table;

    # clé primaire
    protected $primary = 'id';

    # instance de PDO
    /**
     * @var \PDO $bdd
     */
    private $bdd;

    public function __construct()
    {
        # récupération du container
        $container = Container::getInstance();

        # récupération de PDO
        $this->bdd = $container->get('pdo');
    }

    public function getDb(): \PDO
    {
        return $this->bdd;
    }

    /**
     * récupérer ttes les infos d'une table dans la BDD
     * @param
     */
    public function findAll(
        string $where = '',
        string $orderBy = '',
        string $limit = '',
        string $offset = ''
    ): array
    {
        # requête SELECT
        $sql = "SELECT * FROM " . $this->table;

        # Si $where n'est pas vide
        if ( !empty( $where ) ) {
            $sql .= ' WHERE ' . $where;
        }

        # Si $orderBy n'est pas vide
        if ( !empty( $orderBy ) ) {
            $sql .= ' ORDER BY ' . $orderBy;
        }

        # Si $limit n'est pas vide
        if ( !empty( $limit ) ) {
            $sql .= ' LIMIT ' . $limit;
        }

        # Si $offset n'est pas vide
        if ( !empty( $offset ) ) {
            $sql .= ' OFFSET ' . $offset;
        }

        $query = $this->bdd->prepare($sql);
        $query->execute();

        # requête du résultat
        return $query->fetchAll();
    }

    /**
     * Récupérer un enregistrement dans la BDD
     * depuis son ID.
     * @param int $id ID de l'élément à rechercher.
     */
    public function findOne(int $id)
    {

        # Requète ex. SELECT * FROM categorie WHERE id = 1
        $sql = 'SELECT * FROM ' . $this->table
            . ' WHERE ' . $this->primary . ' = :id' ;

        # Préparation avec PDO
        $query = $this->bdd->prepare($sql);

        # Affectation des valeurs aux paramètres
        $query->bindValue(':id', $id, \PDO::PARAM_INT);

        # Execution de la requète
        $query->execute();

        # Retourne le résultat
        return $query->fetch();

    }
}

