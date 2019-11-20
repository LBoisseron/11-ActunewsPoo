<?php
namespace App\Model;

use App\Model\DB\DbTable;

class User extends DbTable
{
    protected $table = 'auteur';
    protected $primary = 'id_auteur';
}