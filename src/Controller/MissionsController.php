<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/missions/", name="missions_")
*/
class MissionsController extends AbstractController
{
    /**
     * @Route("list", name="list")
    */
    public function index(): Response
    {
        return $this->render('missions/index.html.twig', [
            'controller_name' => 'MissionsController',
        ]);
    }
}
