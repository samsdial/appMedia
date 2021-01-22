<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Events;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\MessageGenerator;


class AboutController extends AbstractController
{

    private $messageGenerator;
    
    public function __construct(MessageGenerator $messageGenerator)
    {
        $this->messageGenerator = $messageGenerator;
    }
    /**
     * @Route("/about", name="about")
     */


    public function index(): Response
    {
        $events = $this->getDoctrine()
        ->getRepository(Events::class)
        ->findAll();
        /** 
         * 
         * 
        */
        
        if ($events)(
            $this->messageGenerator->loggerInfo()
        );

        return $this->render('about/index.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }
}
