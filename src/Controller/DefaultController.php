<?php
namespace App\Controller;
use \Symfony\Component\HttpFoundation\Response;

//use Model\Article;

class DefaultController
{
    /**
     * La fonction "home" est une action.
     * Une action est une page.
     * ----------------------
     * page d'accueil du site
     */
    public function home()
    {
        # récupération des articles de la bdd
        //$article = new Article();
        //echo '<h1>PAGE ACCUEIL | CONTROLLER</h1>';
        return new Response('<h1>PAGE ACCUEIL | CONTROLLER | RESPONSE</h1>');
    }

    /**
     * page permettant de lister les articles d'une catégorie
     */
    public function category()
    {
        //echo '<h1>PAGE CATEGORIE | CONTROLLER</h1>';
        return new Response('<h1>PAGE CATEGORIE | CONTROLLER | RESPONSE</h1>');
    }

    /**
     * page permettant d'afficher un article
     */
    public function article()
    {
        //echo '<h1>PAGE ARTICLE | CONTROLLER</h1>';
        return new Response('<h1>PAGE ARTICLE | CONTROLLER | RESPONSE</h1>');
    }
}