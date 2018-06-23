<?php

namespace DoctorsBundle\Controller;

use AppointmentsBundle\Entity\Settings;
use DateTime;
use DoctorsBundle\Entity\Doctors;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;

/**
 * Doctor controller.
 *
 */
class DoctorsController extends Controller
{

    public function addSpecialitieAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $user = $this->getUser();
        $doctorId = $user->getIdTable();
        if ($request->isXmlHttpRequest()) {
            $specialitie = $request->request->get('specialitie');
            $test = $this->getDoctrine()->getRepository('DoctorsBundle:Specialities')->getTestSpecialitieByDoctor($specialitie, $doctorId);
            if ($test == null){
                $doctor = $this->getDoctrine()->getRepository('DoctorsBundle:Doctors')->find($doctorId);
                $special = $this->getDoctrine()->getRepository('DoctorsBundle:Specialities')->find($specialitie);
                $special->addDoctor($doctor);
                $em->persist($special);
                $em->flush();
            }else{
                return new Response('warning');
            }

            $specialities = $em->getRepository('DoctorsBundle:Specialities')->getSpecialitiesByDoctor($doctor);
            return $this->render('doctors/profilEditSpecialities.html.twig', array(
                'specialities' => $specialities,
            ));
        }
    }

    public function profilEditCertificationAction($doctor){
        $em = $this->getDoctrine()->getManager();

        $certifications = $em->getRepository('DoctorsBundle:Certifications')->findBy(array('doctor' => $doctor));

        return $this->render('doctors/profilEditCertifications.html.twig', array(
            'certifications' => $certifications,
        ));
    }

    public function profilEditEducationsAction($doctor){
        $em = $this->getDoctrine()->getManager();

        $educations = $em->getRepository('DoctorsBundle:Educations')->findBy(array('doctor' => $doctor));

        return $this->render('doctors/profilEditEducations.html.twig', array(
            'educations' => $educations,
        ));
    }

    public function profilEditSpecialitiesAction($doctor){
        $em = $this->getDoctrine()->getManager();

        $specialities = $em->getRepository('DoctorsBundle:Specialities')->getSpecialitiesByDoctor($doctor);

        return $this->render('doctors/profilEditSpecialities.html.twig', array(
            'specialities' => $specialities,
        ));
    }

    public function profilEditBasicInformationAction($doctor){
            $em = $this->getDoctrine()->getManager();

            $doctor = $em->getRepository('DoctorsBundle:Doctors')->find($doctor);

            return $this->render('doctors/profilEditBasicInformation.html.twig', array(
                'doctor' => $doctor,
            ));
        }

    public function doctorDetailsCertificationsAction($doctor){
        $em = $this->getDoctrine()->getManager();

        $certifications = $em->getRepository('DoctorsBundle:Certifications')->findBy(array('doctor' => $doctor));

        return $this->render('doctors/doctorDetailsCertifications.html.twig', array(
            'certifications' => $certifications,
        ));
    }


    public function doctorDetailsEducationsAction($doctor){
        $em = $this->getDoctrine()->getManager();

        $educations = $em->getRepository('DoctorsBundle:Educations')->findBy(array('doctor' => $doctor));

        return $this->render('doctors/doctorDetailsEducations.html.twig', array(
            'educations' => $educations,
        ));
    }


    public function doctorDetailsSpecialitesAction($doctor){
        $em = $this->getDoctrine()->getManager();

        $specialities = $em->getRepository('DoctorsBundle:Specialities')->getSpecialitiesByDoctor($doctor);
        return $this->render('doctors/doctorDetailsSpecialites.html.twig', array(
            'specialities' => $specialities,
        ));
    }


    public function detailsAction($doctor){
        $em = $this->getDoctrine()->getManager();
        $location = $this->getDoctrine()->getRepository('DataBundle:Locations')->findBy(
            array(
                'doctor' => $doctor,
                'public' => 1,
                'deletedat' => null
            ));
        $doctor = $em->getRepository('DoctorsBundle:Doctors')->find($doctor);
        return $this->render('doctors/doctorDetails.html.twig', array(
            'doctor' => $doctor,
            'location' => $location
        ));
    }

    public function getDoctorsSpecificationAction($doctor){
        $em = $this->getDoctrine()->getManager();

        $specialities = $em->getRepository('DoctorsBundle:Specialities')->getSpecialitiesByDoctor($doctor);
        $result = '';
        foreach ($specialities as $s){
            $result .= $s->getLibelle().' - ';
        }
        return new Response($result);
    }

    public function searchAction(){
        $em = $this->getDoctrine()->getManager();
        $mots = htmlspecialchars(trim($_GET['mots']));
        $locations = $em->getRepository('DoctorsBundle:Locations')->search($mots);
        $doctors = $em->getRepository('DoctorsBundle:Doctors')->search($mots);
        $result = 1;
        if(empty($doctors)){
            $doctors = $em->getRepository('DoctorsBundle:Doctors')->getAllDoctors();
            $locations = $em->getRepository('DoctorsBundle:Locations')->findBy(array('verified' => 1, 'deleatedAt' => null));
            $result = 0;
        }
        return $this->render('doctors/seachResult.html.twig', array(
            'doctors' => $doctors,
            'locations' =>$locations,
            'result' => $result,
            'mot' => $mots
        ));
    }

    public function getDoctorSpecialitiesAction($doctor){
        $em = $this->getDoctrine()->getManager();

        $specialities = $em->getRepository('DoctorsBundle:Specialities')->getSpecialitiesByDoctor($doctor);

        return $this->render('specialities/listeOfSpecialities.html.twig', array(
            'specialities' => $specialities,
        ));
    }

    public function createAction(Request $request) {
        $entity = new Doctors();
        $form = $this->createForm('DoctorsBundle\Form\DoctorsType', $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $settings = new Settings();
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $idDoctor = $entity->getId();
            $settings->setDoctor($entity);
            $em->persist($settings);
            $em->flush();
            $user = new User();
            $form = $this->createForm('UserBundle\Form\UserType', $user);
            $form->handleRequest($request);

            return $this->render('user/new.html.twig', array(
                'idDoctor' => $idDoctor,
                'utilisateur' => $user,
                'table' => 'doctors',
                'form' => $form->createView(),
            ));
        }else{
            return new Response('erreur');
        }
    }

    /**
     * Lists all doctor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $doctors = $em->getRepository('DoctorsBundle:Doctors')->findAll();

        return $this->render('doctors/index.html.twig', array(
            'doctors' => $doctors,
        ));
    }

    /**
     * Creates a new doctor entity.
     *
     */
    public function newAction(Request $request)
    {
        $doctor = new Doctors();
        $form = $this->createForm('DoctorsBundle\Form\DoctorsType', $doctor);
        $form->handleRequest($request);

        return $this->render('doctors/createAccount.html.twig', array(
            'doctor' => $doctor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a doctor entity.
     *
     */
    public function showAction(Doctors $doctor)
    {
        $deleteForm = $this->createDeleteForm($doctor);

        return $this->render('doctors/show.html.twig', array(
            'doctor' => $doctor,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function verifierNomAction()
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        if ($request->isXmlHttpRequest()) {
            $nom = $request->request->get('nom');
            $test = $this->getDoctrine()->getRepository('DoctorsBundle:Doctors')->findBy(array('lastName' => $nom));
            if ($test == null){
                return new Response('dispo');
            }else{
                return new Response('noDispo');
            }
        }
    }

    public function verifierPrenomAction()
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        if ($request->isXmlHttpRequest()) {
            $nom = $request->request->get('prenom');
            $test = $this->getDoctrine()->getRepository('DoctorsBundle:Doctors')->findBy(array('firstName' => $nom));
            if ($test == null){
                return new Response('dispo');
            }else{
                return new Response('noDispo');
            }
        }
    }

    /**
     * Displays a form to edit an existing doctor entity.
     *
     */
    public function editAction(Request $request, Doctors $doctor)
    {
        $deleteForm = $this->createDeleteForm($doctor);
        $editForm = $this->createForm('DoctorsBundle\Form\DoctorsType', $doctor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $user = $this->getUser();
            $doctorId = $user->getIdTable();
            $doctor = $this->getDoctrine()->getRepository('DoctorsBundle:Doctors')->find($doctorId);

            return $this->render('doctors/profilEditBasicInformation.html.twig', array(
                'doctor' => $doctor,

            ));
        }

        return $this->render('doctors/edit.html.twig', array(
            'doctor' => $doctor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a doctor entity.
     *
     */
    public function deleteAction(Request $request, Doctors $doctor)
    {
        $form = $this->createDeleteForm($doctor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($doctor);
            $em->flush();
        }

        return $this->redirectToRoute('doctors_index');
    }

    public function deleteSpecialitieAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $user = $this->getUser();
        $doctorId = $user->getIdTable();
        if ($request->isXmlHttpRequest()) {

                $doctor = $this->getDoctrine()->getRepository('DoctorsBundle:Doctors')->find($doctorId);
                $special = $this->getDoctrine()->getRepository('DoctorsBundle:Specialities')->find($id);
                $special->removeDoctor($doctor);
                $em->flush();

            $specialities = $em->getRepository('DoctorsBundle:Specialities')->getSpecialitiesByDoctor($doctor);
            return $this->render('doctors/profilEditSpecialities.html.twig', array(
                'specialities' => $specialities,
            ));
        }
    }

    /**
     * Creates a form to delete a doctor entity.
     *
     * @param Doctors $doctor The doctor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Doctors $doctor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('doctors_delete', array('id' => $doctor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
