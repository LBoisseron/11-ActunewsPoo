<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

trait TraitController
{
    /**
     * retourner à l'utilisateur une page
     * nous allons utiliser TWIG
     * @param string $view
     * @param array $
     */
    protected function render(string $view, array $parameters = []) : Response
    {
        # 1. récupération de TWIG dans le container
        $twig = $this->container->get('twig');
        $content = $twig->render($view, $parameters);

        # 2. fabrication d'une réponse
        $response = new Response();

        # 3.affectation du contenu de TWIG
        $response->setContent($content);

        # 4. retour de la réponse au controller
        return $response;
    }
}