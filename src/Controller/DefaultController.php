<?php


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
        echo '<h1>PAGE ACCUEIL | CONTROLLER</h1>';
    }

    /**
     * page permettant de lister les articles d'une catégorie
     */
    public function category()
    {
        echo '<h1>PAGE CATEGORIE | CONTROLLER</h1>';
    }

    /**
     * page permettant d'afficher un article
     */
    public function article()
    {
        echo '<h1>PAGE ARTICLE | CONTROLLER</h1>';
    }
}