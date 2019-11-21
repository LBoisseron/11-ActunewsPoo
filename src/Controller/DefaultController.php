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
        # 1. récupération des articles de la BDD
        $articles = (new Article())->findAll();


        # 2. transmission des données à la vue
        return $this->render('default/home.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * page permettant de lister les articles d'une catégorie
     */
    public function category()
    {

        # récupération de l'instance de request dans le container
        $request = $this->getParameter('request');

        # récupération de la request du paramètre $_GET 'id'
        $idCategorie = $request->get('id') ?? 1;

        # récupération des articles de la catégorie
        $article = new Article();

        $where = 'idCategorie = ' . $idCategorie;
        $articles = $article->findAll($where);
        // dump($articles);

        return $this->render('default/category.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * page permettant d'afficher un article
     */
    public function article()
    {
        # récupération de l'instance de request dans le container
        $request = $this->getParameter('request');

        # récupération dans request du paramètre
        $idArticle = $request->get('id') ?? 0;

        # récupération de l'article dans la BDD
        $article = (new Article())->findOne($idArticle);

        # transmission de l'article à la vue
        return $this->render('default/article.html.twig', [
            'article' => $article
        ]);
    }
}