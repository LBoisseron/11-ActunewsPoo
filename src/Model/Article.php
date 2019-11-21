<?php
namespace App\Model;

use App\Model\DB\DbTable;

class Article extends DbTable
{
    protected $table = 'article_view';
    protected $primary = 'id_article';
}