<?php
namespace App\Model;

use App\Model\DB\DbTable;

class Article extends DbTable
{
    protected $table = 'article';
    protected $primary = 'id_article';
}