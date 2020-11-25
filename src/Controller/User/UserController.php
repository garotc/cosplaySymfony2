<?php

namespace App\Controller\User;

use App\Entity\User;
use App\Entity\InscriptionSolo;
use App\Repository\UserRepository;
use App\Form\EditAccountUserFormType;
use App\Form\InscriptionSoloFormType;
use App\Repository\InscriptionSoloRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route("profile/mon-compte", name="_app_user_account")
     */
    public function getInfosUser(UserRepository $repo, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $infos = $repo->findOneBy(['id'=>$user]);
        //dd($infos);
        return $this->render('home/user/compte.html.twig', compact('user', 'infos'));
    }

    /**
     * @Route("/profile/modifier-compte", name="user_edit", methods={"GET","POST"})
    */

    public function editUser(User $user=null, Request $request, EntityManagerInterface $em) : Response
    {
        $modif = $this->getUser('id');
        //dd($modif);

        $form = $this->createForm(EditAccountUserFormType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->getDoctrine()->getManager()->flush();
            
           // $em->persist($user);
            //$em->flush();

            $this->addFlash ('success', $modif? 'modification effectuées' : 'user ajouté');
            return $this->redirectToRoute('_app_user_account');
           
        }

        return $this->render('home/user/editCompte.html.twig', ['userForm'=> $form->createView()]);
    }

    /**
     * @Route("/profile/inscription/solo/edit", name="inscription_solo_edit", methods="GET|POST")
     * @Route("/profile/inscription/solo", name="inscription_solo")
     */
    public function inscriptionSolo(InscriptionSolo $inscription=null, Request $request, EntityManagerInterface $em, InscriptionSoloRepository $repo): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $inscriptionSolo= $repo->findOneByUserId($userId);
       // dd($inscriptionSolo);
        if(!$inscriptionSolo){
            $inscriptionSolo = new inscriptionSolo();
            $inscriptionSolo->setUser($user);
        }
 
        //variable pour savoir si on est en création ou modification

       $modif = $inscriptionSolo->getUser() !== $user;

       $form = $this->createForm(InscriptionSoloFormType::class, $inscriptionSolo);
       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
           $em->persist($inscriptionSolo);
           $em->flush();

           $this->addFlash('message', $modif ? 'Inscription modifié avec succès' : 'Inscription effectué avec succès');

           return $this->redirectToRoute('inscription_solo');
       }

       return $this->render('user/inscriptionsolo.html.twig',['formulaireSolo'=>$form->createView()]);

    }
    
}
