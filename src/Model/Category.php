<?php
namespace App\Model;

use App\Model\DB\DbTable;

class Category extends DbTable
{
    protected $table = 'categorie';
    # si $rpimary différent de 'id'
    protected $primary = 'id_categorie';
}