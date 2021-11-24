<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PackageController extends AbstractController
{
    /**
     * @Route("/package", name="packages")
     */
    public function package()
    {
        return $this->render('package/packages.html.twig');
    }
}
