<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Form\ArtistType;
use App\Repository\AgentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AgentController extends AbstractController
{
    /**
     * @Route("/agent", name="agent")
     */
    public function index(AgentRepository $repository)
    {
        $agents = $repository->findAll();
        return $this->render('agent/index.html.twig', [
            'controller_name' => 'AgentController',
            'agents'=>$agents
        ]);
    }


    /**
     * @Route("/agent/{id}/transfert/{artistId}", name="agent_transfert", methods={"GET","POST"})
     */
    public function transfert(Request $request, int $id, int $artistId): Response
    {

        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();

        if(!in_array('ROLE_ADMIN',$user->getRoles())) {
            throw new \Exception('Access denied for user without "admin" role.');
        }
        $repository = $this->getDoctrine()->getRepository(Artist::class);
        //dd($artistId);
        $artist = $repository->find($artistId);
        //dd($artist);

        $form = $this->createForm(ArtistType::class, $artist);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('artist_show',['id'=>$artist->getId()]);
        }

        return $this->render('artist/transfert.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
