<?php

namespace MaladieBundle\Controller;

use MaladieBundle\Entity\Maladie;
use MaladieBundle\Entity\MaladieUser;
use MaladieBundle\Form\MaladieType;
use MaladieBundle\Form\MaladieUserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class MaladieController extends Controller
{
    public function addMaladieAction(Request $request){
        $maladie = new Maladie();
        $form = $this->createForm(MaladieType::class, $maladie)->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($maladie);
            $em->flush();
            return $this->redirectToRoute('displayMaladie');
        }
        return $this->render('@Maladie/Default/addMaladie.html.twig', array('form'=>$form->createView()));
    }

    public function displayMaladieAction(){
        $maladies = $this->getDoctrine()->getRepository(Maladie::class)->findAll();
        return $this->render('@Maladie/Default/displayMaladie.html.twig', array('maladies'=>$maladies));
    }

    public function editMaladieAction(Request $request, $id){
        $maladie = $this->getDoctrine()->getRepository(Maladie::class)->find($id);
        $form = $this->createForm(MaladieType::class, $maladie)->add('Modifier', SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($maladie);
            $em->flush();
            return $this->redirectToRoute('displayMaladie');
        }
        return $this->render('@Maladie/Default/editMaladie.html.twig', array('form'=>$form->createView()));

    }

    public function removeMaladieAction($id){
        $maladie = $this->getDoctrine()->getRepository(Maladie::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($maladie);
        $em->flush();

        return $this->redirectToRoute('displayMaladie');
    }

    public function affecterMaladieAction(Request $request){
        if($request->isMethod('POST')){
            $maladie = $this->getDoctrine()->getRepository(Maladie::class)->find($request->get('select'));
            $maladieUser = new MaladieUser();
            $maladieUser->setUser($this->getUser());
            $maladieUser->setMaladie($maladie);
            /*var_dump($request->get('select'));
            die();*/

            $em = $this->getDoctrine()->getManager();
            $em->persist($maladieUser);
            $em->flush();

            return $this->redirectToRoute('fos_user_profile_show');
        }
        $maladies = $this->getDoctrine()->getRepository(Maladie::class)->findAll();
        return $this->render('@Maladie/Default/affecterMaladie.html.twig', array('maladies'=>$maladies));
    }
}
