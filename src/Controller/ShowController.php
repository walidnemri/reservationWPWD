<?php

namespace App\Controller;

use App\Entity\Show;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShowController extends AbstractController
{
    /**
     * @Route("/show", name="show")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {
        $repository = $this->getDoctrine()->getRepository(Show::class);
        $shows = $paginator->paginate($repository->findQuery(),$request->query->getInt('page', 1),2);

        
        //dump($request->query->get('search'));
        if ($request->query->get('search')) {
            //dump($request->query['search']);
            $shows = $repository->filterSearch($request->query->get('search'));
        }
        //dump($shows);
        return $this->render('show/index.html.twig', [
            'shows' => $shows,
            'resource' => 'spectacles',
            'current_menu'=>'show'
        ]);
    }
    
    /**
     * @Route("/show/{id}", name="show_show")
     */
    public function show($id, Request $request, EntityManagerInterface $em )
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
            $reservation->setUser($this->getUser());
           
            //Redirection vers Reservation.pay
            //$this->redirectToRoute('reservation_pay',['reservation'=>$reservation]);
            $entityManager = $this->getDoctrine()->getManager();
            //dd($user);
            $entityManager->persist($reservation);
            $entityManager->flush();

            \Stripe\Stripe::setApiKey('sk_test_51GqHejLBd5jeN00p2EomVAAYos5wghT3GVmcvPeo7qTPAX4En8rsvNPTfp6gtALsERSTHTnS3Wl740OtxElpTUkv00c70ZLfLK');

            \Stripe\Charge::create([
            'amount' => 2000,
            'currency' => 'eur',
            'source'=>$request->request->get('stripeToken'),
            // Verify your integration in this guide by including this parameter
            
            ]);
            return $this->render('reservation/pay.html.twig', [
             'reservation' => $reservation,
            ]);
        }
    
    
        return $this->render('show/show.html.twig', [
            'show' => $show,
            'collaborateurs' => $collaborateurs,
            'formReservation'=>$form->createView(),
        ]);
    }

     /**
     * @Route("/show/{id}", name="show_pay")
     */

     /*
    public function pay($id, Request $request)
    {

        //$repository = $this->getDoctrine()->getRepository(Reservation::class);

        $reservation = new Reservation();
        
        $form = $this->createForm(ReservationType::class,$reservation);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
           //Associer l'utilisateur en cours à la réservation
           $reservation->setUser($this->getUser());
           
           //Redirection vers Reservation.pay
           //$this->redirectToRoute('reservation_pay',['reservation'=>$reservation]);
           return $this->render('reservation/pay.html.twig', [
            'reservation' => $reservation,
        ]);
        }


    }
    */
}
