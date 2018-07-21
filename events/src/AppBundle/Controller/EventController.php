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

        $event = $this->getDoctrine()->getRepository('AppBundle:Event')->findAll();

        // replace this example code with whatever you need

        return $this->render('event/index.html.twig', array('event'=>$event));

    }

     /**

     * @Route("/event/create", name="event_create")

     */

    public function createAction(Request $request){

        $event = new Event;

        $form = $this->createFormBuilder($event)->add('event_name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('event_img', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('event_desc', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('event_type', ChoiceType::class, array('choices'=>array('Low'=>'Low', 'Normal'=>'Normal', 'High'=>'High'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

    ->add('event_date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))

    ->add('save', SubmitType::class, array('label'=> 'Create Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))

        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            //fetching data

            $event_name = $form['event_name']->getData();

            $event_img = $form['event_img']->getData();

            $event_desc = $form['event_desc']->getData();

            $event_type = $form['event_type']->getData();

            $event_date = $form['event_date']->getData();

            $now = new\DateTime('now');

            $event->setEventName($event_name);

            $event->setEventImg($event_img);

            $event->setEventDesc($event_desc);

            $event->setEventType($event_type);

            $event->setEventDate($event_date);

            // $event->setCreateDate($now);

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

        $event = $this->getDoctrine()->getRepository('AppBundle:Event')->find($id);
    
    $now = new\DateTime('now');
    
                $event->setEventName($event->getEventName());
    
                $event->setEventImg($event->getEventImg());
    
                $event->setEventDesc($event->getEventDesc());
    
                $event->setEventType($event->getEventType());
    
                $event->setEventDate($event->getEventDate());
    
                // $event->setCreateDate($now);
    
            $form = $this->createFormBuilder($event)->add('event_name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
    
            ->add('event_img', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
    
            ->add('event_desc', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
    
            ->add('event_type', ChoiceType::class, array('choices'=>array('Low'=>'Low', 'Normal'=>'Normal', 'High'=>'High'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
    
        ->add('event_date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
    
        ->add('save', SubmitType::class, array('label'=> 'Update Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-botton:15px')))
    
            ->getForm();
    
            $form->handleRequest($request);
    
            if($form->isSubmitted() && $form->isValid()){
    
                //fetching data
    
                $event_name = $form['event_name']->getData();
    
                $event_img = $form['event_img']->getData();
    
                $event_desc = $form['event_desc']->getData();
    
                $event_type = $form['event_type']->getData();
    
                $event_date = $form['event_date']->getData();
    
                $now = new\DateTime('now');
    
                $em = $this->getDoctrine()->getManager();
    
                $event = $em->getRepository('AppBundle:Event')->find($id);
    
                $event->setEventName($event_name);
    
                $event->setEventImg($event_img);
    
                $event->setEventDesc($event_desc);
    
                $event->setEventType($event_type);
    
                $event->setEventDate($event_date);
    
                // $event->setCreateDate($now);
    
             
    
                $em->flush();
    
                $this->addFlash(
    
                        'notice',
    
                        'Event Updated'
    
                        );
    
                return $this->redirectToRoute('event_list');
    
            }
    
            return $this->render('event/edit.html.twig', array('event' => $event, 'form' => $form->createView()));
    
        }

     /**

     * @Route("/event/details/{id}", name="event_details")

     */

    public function detailsAction($id){

        $event = $this->getDoctrine()->getRepository('AppBundle:Event')->find($id);

return $this->render('event/details.html.twig', array('event' => $event));

}


    /**

     * @Route("/event/delete/{id}", name="event_delete")

     */

    public function deleteAction($id){

        $em = $this->getDoctrine()->getManager();

   $event = $em->getRepository('AppBundle:Event')->find($id);

   $em->remove($event);

    $em->flush();

   $this->addFlash(

           'notice',

           'Event Removed'

           );

    return $this->redirectToRoute('event_list');

}

}