<?php

namespace AppBundle\Controller;

use AppBundle\Entity\event;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class eventController extends Controller

{

    /**

     * @Route("/", name="event_list")

     */

    public function listAction(){

        $events = $this->getDoctrine()->getRepository('AppBundle:event')->findAll();

        // replace this example code with whatever you need

        return $this->render('event/index.html.twig', array('events'=>$events));

    }

     /**

     * @Route("/event/create", name="event_create")

     */

    public function createAction(Request $request){

        $event = new event;

        $form = $this->createFormBuilder($event)->add('ev_name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('ev_date', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('ev_time', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('ev_desc', ChoiceType::class, array('choices'=>array('Low'=>'Low', 'Normal'=>'Normal', 'High'=>'High'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

        ->add('ev_img', ChoiceType::class, array('choices'=>array('Low'=>'Low', 'Normal'=>'Normal', 'High'=>'High'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

        ->add('ev_desc', ChoiceType::class, array('choices'=>array('Low'=>'Low', 'Normal'=>'Normal', 'High'=>'High'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

        
    ->add('due_date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))

    ->add('save', SubmitType::class, array('label'=> 'Create event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))

        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            //fetching data

            $name = $form['name']->getData();

            $ev_date = $form['ev_date']->getData();

            $ev_time = $form['ev_time']->getData();

            $ev_desc = $form['ev_desc']->getData();

            $due_date = $form['due_date']->getData();

            $now = new\DateTime('now');

            $event->setName($name);

            $event->setev_date($ev_date);

            $event->setev_time($ev_time);

            $event->setev_desc($ev_desc);

            $event->setDueDate($due_date);

            $event->setCreateDate($now);

            $em = $this->getDoctrine()->getManager();

            $em->persist($event);

            $em->flush();

            $this->addFlash(

                    'notice',

                    'event Added'

                    );

            return $this->redirectToRoute('event_list');

        }

        // replace this example code with whatever you need

        return $this->render('event/create.html.twig', array('form' => $form->createView()));

    }

     /**

     * @Route("/event/edit/{id}", name="event_edit")

     */

    public function editAction( $id, Request $request){

        // replace this example code with whatever you need

        return $this->render('event/edit.html.twig');

    }

     /**

     * @Route("/event/details/{id}", name="event_details")

     */

    public function detailsAction($id){

        // replace this example code with whatever you need

        return $this->render('event/details.html.twig');

    }

}