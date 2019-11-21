<?php


namespace App\Model\Twig;


use App\Model\Category;
use App\Model\Container\Container;
use App\Model\Kernel\KernelEventInterface;
use Twig\Environment;

class TwigExtension implements KernelEventInterface
{
    private $container;

    public function __construct()
    {
        $this->container =Container::getInstance();
    }

    /**
     * permet le chagement de l'élément dans le kernel
     */
    public function load(): void
    {
        // TODO: Implement load() method.
        /**
         *
         */
        $twig = $this->container->get('twig');
        $twig->addGlobal('categories', (new Category())->findAll());
    }

}