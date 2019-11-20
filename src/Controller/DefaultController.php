<?php
namespace App\Controller;
use App\Model\Article;
use App\Model\Category;
use App\Model\User;
use \Symfony\Component\HttpFoundation\Response;

//use Model\Article;

class DefaultController extends AbstractController
{
    /**
     * La fonction "home" est une action.
     * Une action est une page.
     * ----------------------
     * page d'accueil du site
     */
    public function home()
    {
        # vérification
        $article = new Article();
        $category = new Category();
        $user = new User();

        dump($article->findAll());
        dump($category->findAll());
        dump($user->findAll());

        return $this->render('default/home.html.twig');
    }

    /**
     * page permettant de lister les articles d'une catégorie
     */
    public function category()
    {


        return $this->render('default/category.html.twig');
    }

    /**
     * page permettant d'afficher un article
     */
    public function article()
    {
        //echo '<h1>PAGE ARTICLE | CONTROLLER</h1>';
        //return new Response('<h1>PAGE ARTICLE | CONTROLLER | RESPONSE</h1>');
        return $this->render('default/article.html.twig');
    }
}