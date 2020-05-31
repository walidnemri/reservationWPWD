<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Show;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Symfony\Component\HttpFoundation\Request;

class ShowController extends AbstractController
{
    /**
     * @Route("/show", name="show")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Show::class);
        $shows = $repository->findAll();
        
        return $this->render('show/index.html.twig', [
            'shows' => $shows,
            'resource' => 'spectacles',
        ]);
    }
    
    /**
     * @Route("/show/{id}", name="show_show")
     */
    public function show($id, Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Show::class);
        $show = $repository->find($id);
        
        $collaborateurs = [];
        
        foreach($show->getArtistTypes() as $at) {
            $collaborateurs[$at->getType()->getType()][] = $at->getArtist();
        }
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        }
    
    
        return $this->render('show/show.html.twig', [
            'show' => $show,
            'collaborateurs' => $collaborateurs,
            'formReservation'=>$form->createView(),
        ]);
    }
}
