<?php


namespace App\Model\Kernel;


interface KernelEventInterface
{
    /**
     * permet le chargement d'éléments dans le kernel
     */
    public function load(): void;
}