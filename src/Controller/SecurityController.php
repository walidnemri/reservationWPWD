<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Form\FormFactoryBuilder;
use Symfony\Component\Form\Forms;
use App\Entity\User;
use App\Entity\Role;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
       // if ($this->getUser()) {
            //return $this->redirectToRoute('target_path');
        //}

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    
    /**
     * @Route("/signin", name="app_signin")
     */
    public function register(Request $request ,EntityManagerInterface $em ,UserPasswordEncoderInterface $encoder){
        $title = 'Inscription';
        $user = new User();
        //$roleAdmin = new Role();
        //$roleAdmin->setRole('admin');
       // dd( $roleAdmin);
        //$user->addRole($roleAdmin);
        
        $form = $this->createForm(UserType::class,$user);
        
        $form->handleRequest($request);
        //dd($request);
        if ($request->isMethod('POST')) {

            if ($form->isSubmitted() && $form->isValid()) {


            //dd($user);
            //dd($request->request->get($form->getName())['roles']);
            
            //$form->submit($request->request->get($form->getName()));
            $plainPassword =$form->get('password')->getData();
            $encoded = $encoder->encodePassword($user, $plainPassword);
            //$user->setFirstname($request->request->get($form->getName())['firstname']);
            //$user->setLastname($request->request->get($form->getName())['lastname']);
            $user->setPassword($encoded);
            $user->addRole($form->get('user_roles')->getData());
            //$user->setEmail($request->request->get($form->getName())['email']);
            //$user->setLangue('fr');
                //dd($form->get('roles')->getData());
                // perform some action...
                $entityManager = $this->getDoctrine()->getManager();
                //dd($user);
                $entityManager->persist($user);
                $entityManager->flush();
                //return $this->redirectToRoute('task_success');
            }
        
        }

        return $this->render('security/signin.html.twig',[
            'title' => $title,
            'formRegister' => $form->createView()
        ]);
    }
}
