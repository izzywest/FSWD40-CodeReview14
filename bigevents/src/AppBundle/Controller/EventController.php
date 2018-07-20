<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Event;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventController extends Controller
{
    /**
     * @Route("/", name="event_list")
     */
    
    public function listAction(){
        $events = $this->getDoctrine()->getRepository('AppBundle:Event')->findAll();

        // replace this example code with whatever you need

        return $this->render('event/index.html.twig', array('events'=>$events));
    }


     /**
     * @Route("/event/create", name="event_create")
     */

    public function createAction(Request $request){
        $event = new Event;

        $form = $this->createFormBuilder($event)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('ev_name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('ev_img', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('ev_desc', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('ev_type', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Sport'=>'Sport', 'Movie'=>'Movie', 'Theatre'=>'Theatre'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
        ->add('ev_date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
        ->add('ev_time', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
        ->add('save', SubmitType::class, array('label'=> 'Create Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
        ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //fetching data
            $name = $form['name']->getData();
            $ev_name = $form['ev_name']->getData();
            $ev_img = $form['ev_img']->getData();
            $ev_desc = $form['ev_desc']->getData();
            $ev_type = $form['ev_type']->getData();
            $ev_date = $form['ev_date']->getData();
            $ev_time = $form['ev_time']->getData();
            $now = new\DateTime('now');
            $event->setName($name);
            $event->setev_name($ev_name);
            $event->setev_img($ev_img);
            $event->setev_desc($ev_desc);
            $event->setev_type($ev_type);
            $event->setDueDate($ev_date);
            $event->setDueDate($ev_time);
            $event->setCreateDate($now);
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            $this->addFlash(
                    'notice',
                    'Event Added'
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