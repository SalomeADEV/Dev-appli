<?php

namespace App\Controller;

use App\Repository\ArtistRepository;
use App\Repository\DiscRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

//  class AccueilController extends AbstractController
// {
//     private $artistRepo;
//     private $discRepo;
//     private $em;

//     public function __construct(ArtistRepository $artistRepo, DiscRepository $discRepo)
//     {
//          $this->artistRepo = $artistRepo;
//          $this->discRepo = $discRepo;
        
//     }


// #[Route('/accueil', name: 'app_accueil')]
// public function index(): Response
// {

    //on appelle la fonction `findAll()` du repository de la classe `Artist` afin de récupérer tous les artists de la base de données;

    // $artistes = $this->artistRepo->findAll();


//     return $this->render('accueil/index.html.twig', [
//         'controller_name' => 'AccueilController',
//         //on va envoyer à la vue notre variable qui stocke un tableau d'objets $artistes (c'est-à-dire tous les artistes trouvés dans la base de données)
//         // 'artistes' => $artistes
//     ]);
// }

// }

class AccueilController extends AbstractController
{

    private $artistRepo;
    private $discRepo;
    private $em;

    public function __construct(ArtistRepository $artistRepo, DiscRepository $discRepo, EntityManagerInterface $em)
    {
        $this->artistRepo = $artistRepo;
        $this->discRepo = $discRepo;
        $this->em = $em;

    }
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
       //on appelle le repository pour accéder à la fonction
        $artistes = $this->artistRepo->findOneBy(["name" => "Neil Young"]);

        //on teste le contenu de la variable $artistes : dd() veut dire Dump and Die
        dd($artistes); 

     // ...    

    }
}



