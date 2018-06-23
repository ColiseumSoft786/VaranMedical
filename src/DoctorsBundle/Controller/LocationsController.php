<?php

namespace DoctorsBundle\Controller;

use DoctorsBundle\Entity\Locations;
use DataBundle\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Location controller.
 *
 */
class LocationsController extends Controller
{

    public function getComboLocationByDoctorAction($doctor){
        $em = $this->getDoctrine()->getManager();

        $locations = $em->getRepository('DoctorsBundle:Locations')->findBy(array('doctor' => $doctor, 'deleatedAt' => null, 'verified' => 1));
        return $this->render('locations/comboLocations.html.twig', array(
            'locations' => $locations,
        ));
    }

    public function doctorMapLocationsAction($doctor){
        $em = $this->getDoctrine()->getManager();

        $locations = $em->getRepository('DoctorsBundle:Locations')->findBy(array('doctor' => $doctor, 'deleatedAt' => null, 'verified' => 1));
        return $this->render('locations/mapLocations.html.twig', array(
            'locations' => $locations,
        ));
    }

    public function doctorLocationsAction($doctor){
        $em = $this->getDoctrine()->getManager();

        $locations = $em->getRepository('DataBundle:Locations')->findBy(array('doctor' => $doctor, 'deletedat' => null, 'verified' => 1));
        return $this->render('locations/doctorLocations.html.twig', array(
            'locations' => $locations,
        ));
    }

    /**
     * Lists all location entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $doctor = $user->getIdTable();
        $locations = $em->getRepository('DataBundle:Locations')->findBy(array('doctor' => $doctor, 'deletedat' => null));
        $doctor = $em->getRepository('DataBundle:Doctors')->find($doctor);

        return $this->render('locations/index.html.twig', array(
            'locations' => $locations,
            'doctor' => $doctor
        ));
    }
    public function changePublicAction($id){
        $em = $this->getDoctrine()->getManager();
        $locations = $em->getRepository('DataBundle:Locations')->find($id);
        if($locations->getPublic() == 1){
            $locations->setPublic(0);
        }else{
            $locations->setPublic(1);
        }
        $em->flush();
        return $this->redirectToRoute('locations_index');
    }
    /**
     * Creates a new location entity.
     *
     */
    public function newAction(Request $request)
    {
        $location = new Locations();
        $form = $this->createForm('DoctorsBundle\Form\LocationsType', $location);
        $form->handleRequest($request);
        $doctor = $this->getUser()->getIdTable();
        $doctor = $this->getDoctrine()->getRepository('DoctorsBundle:Doctors')->find($doctor);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($location);
            $em->flush();
            $locations = $em->getRepository('DoctorsBundle:Locations')->findBy(array('doctor' => $doctor, 'deleatedAt' => null));
            return $this->redirectToRoute('locations_index');
        }

        return $this->render('locations/new.html.twig', array(
            'doctor' => $doctor,
            'location' => $location,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a location entity.
     *
     */
    public function showAction(Locations $location)
    {
        $deleteForm = $this->createDeleteForm($location);

        return $this->render('locations/show.html.twig', array(
            'location' => $location,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing location entity.
     *
     */
    public function editAction(Request $request, Locations $location)
    {
        $deleteForm = $this->createDeleteForm($location);
        $editForm = $this->createForm('DoctorsBundle\Form\LocationsType', $location);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('locations_edit', array('id' => $location->getId()));
        }

        return $this->render('locations/edit.html.twig', array(
            'location' => $location,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a location entity.
     *
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $doctor = $user->getIdTable();
        $delete = $em->getRepository('DoctorsBundle:Locations')->delete($id);
        if($delete){
            $locations = $em->getRepository('DoctorsBundle:Locations')->findBy(array('doctor' => $doctor, 'deleatedAt' => null));
            $doctor = $em->getRepository('DoctorsBundle:Doctors')->find($doctor);
            return $this->render('locations/index.html.twig', array(
                'locations' => $locations,
                'doctor' => $doctor
            ));
        }else{
            return new Response('erreur');
        }

    }
    public function commentsAction(Entity\Locations $location){
        $comment = $this->getDoctrine()->getRepository('DataBundle:Comments')->findBy(
            array('location' => $location)
        );
        return $this->render('locations/comments.html.twig', array(
            'comments' => $comment,
        ));
    }

    /**
     * Creates a form to delete a location entity.
     *
     * @param Locations $location The location entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Locations $location)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('locations_delete', array('id' => $location->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
