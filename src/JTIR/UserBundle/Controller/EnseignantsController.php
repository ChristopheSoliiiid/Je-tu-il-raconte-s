<?php

namespace JTIR\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function classeAction(Request $request) {

        /* // création d'une nouvelle classe
        // création du "formulaire" ?

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            // gestion des données

            // Ajout d'un message de confirmation de l'ajout de la classe et des élèves dans la bdd.
            $request->getSession()->getFlashBag()
                ->add('classe_ok', 'Votre classe et les comptes de vos élèves ont bien enregistré.');
        } */

        return $this->render('JTIRUserBundle:enseignants:classe.html.twig');
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
     *          -> Le nom des élèves
     *          -> Le nombre de contes par élèves
     *          -> ????
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dashboardAction() {
        return $this->render('JTIRUserBundle:enseignants:dashboard.html.twig');
    }

    /**
     * Action du contrôleur pour la page des tutoriels.
     *      -> Récupérer :
     *          -> Les liens des vidéos youtube
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function tutorielAction() {
        return $this->render('JTIRUserBundle:enseignants:tutoriel.html.twig');
    }
}
