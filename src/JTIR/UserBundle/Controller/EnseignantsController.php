<?php

namespace JTIR\UserBundle\Controller;

use JTIR\UserBundle\Entity\Classe;
use JTIR\UserBundle\Form\ClasseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Class EnseignantsController Le contrôleur pour la partie enseignant du site.
 * @package JTIR\PlatformBundle\Controller
 */
class EnseignantsController extends Controller {

    /**
     * Action du contrôleur pour la page de création d'une classe.
     *      -> Créer :
     *          -> La classe
     *          -> Les comptes élèves
     *
     *      -> Récupérer :
     *          -> Les données pour les listes déroulante
     *              -> Département
     *              -> Ville
     *              -> Établissement
     *              -> Niveau
     *
     * @Security("has_role('ROLE_ENSEIGNANT')")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function classeAction(Request $request) {

        $classe = new Classe();
        $enseignant = $this->getUser(); // On récupère l'enseignant connecté

        // Construction du formulaire
        $form = $this->get('form.factory')->create(ClasseType::class, $classe);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $classe->setEnseignant($enseignant); // Assignation de l'enseignant à la classe

            $em = $this->getDoctrine()->getManager(); // L'entityManager
            $em->persist($classe); // Sauvegarde des modifications sur l'entity
            $em->flush(); // Sauvegarde en bdd

            // Ajout d'un message de confirmation de l'ajout de la classe et des élèves dans la bdd.
            $request->getSession()->getFlashBag()
                ->add('classe_ok', 'Votre classe à bien été enregistrée.');
        }

        return $this->render('JTIRUserBundle:enseignants:classe.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Action du contrôleur pour la page de sélectionner d'un conte.
     *      -> Récupérer :
     *          -> Les élèves de l'enseignants
     *          -> Les contes des élèves
     *
     *      -> Actions possibles :
     *          -> Annoter / Corriger ( --> modification du contenu du conte ? )
     *          -> Publier ( --> Conte disponible dans la bibliothèque des contes + conte verrouillé a la modification )
     *          -> Imprimer ( Pourquoi pas aussi dans la bibliothèque visiteurs pour les parents ? )
     *
     * @Security("has_role('ROLE_ENSEIGNANT')")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function bibliothequeAction() {
        return $this->render('JTIRUserBundle:enseignants:bibliotheque.html.twig');
    }

    /**
     * Action du contrôleur pour la page de partenariat.
     *      -> Récupérer :
     *          -> Les données pour les listes déroulante
     *              -> Département
     *              -> Ville
     *              -> Établissement
     *              -> Niveau
     *          -> Les classes disponibles en fonction des filtres de recherche
     *
     *      -> Action possible :
     *          -> Envoyer un mail pour la demande de partenariat aux enseignants des classes choisies ?
     *
     * @Security("has_role('ROLE_ENSEIGNANT')")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function partenariatAction(Request $request) {

        /* // création du "formulaire" ?

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            // gestion des données

            // Ajout d'un message de confirmation de l'ajout de la classe et des élèves dans la bdd.
            $request->getSession()->getFlashBag()
                ->add('classe_ok', 'Votre classe et les comptes de vos élèves ont bien enregistré.');
        } */

        return $this->render('JTIRUserBundle:enseignants:partenariat.html.twig');
    }

    /**
     * Action du contrôleur pour la page de dashboard.
     *      -> Récupérer :
     *          -> Les infos de l'enseignant
     *          -> Le nom des élèves
     *          -> Le nombre de contes par élèves
     *          -> ????
     *
     * @Security("has_role('ROLE_ENSEIGNANT')")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dashboardAction() {
        $user = $this->getUser();
        // Raccourci pour $this->get('security.context')->getToken()->getUser()
        // Permet de récupérer l'utilisateur actuellement connecté

        return $this->render('JTIRUserBundle:enseignants:dashboard.html.twig',
            array('user' => $user));
        // On passe l'utilisateur dans la vue twig
    }

    /**
     * Action du contrôleur pour la page des tutoriels.
     *      -> Récupérer :
     *          -> Les liens des vidéos youtube
     *
     * @Security("has_role('ROLE_ENSEIGNANT')")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function tutorielAction() {
        return $this->render('JTIRUserBundle:enseignants:tutoriel.html.twig');
    }
}
