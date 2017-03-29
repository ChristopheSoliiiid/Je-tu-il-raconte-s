<?php

namespace JTIR\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ElevesController Le contrôleur pour la partie élève du site.
 * @package JTIR\PlatformBundle\COntroller
 */
class ElevesController extends Controller {

    /**
     * Action du contrôleur pour la page de création d'un conte.
     *      -> Créer :
     *          -> Le conte
     *
     *      -> Récupérer :
     *          -> Les écrits des élèves
     *          -> Les sons utilisés
     *          -> Les images utilisées
     *
     *      -> Actions possibles :
     *          -> Enregistrer le conte
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function creerAction(Request $request) {

        return $this->render('JTIRUserBundle:eleves:creer.html.twig');
    }

    /**
     * Action du contrôleur pour la page de modification d'un conte.
     *       -> Récupérer :
     *           -> Le titre du conte d'un élève
     *           -> Les sons utilisés
     *           -> Les images utilisées
     *           -> Les dates de modification du conte
     *           -> Le conte en fonction du titre choisi et de la date de modification
     *
     *       -> Actions possibles :
     *           -> Enregistrer les modifications
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function modifierAction(Request $request) {

        return $this->render('JTIRUserBundle:eleves:modifier.html.twig');
    }

    /**
     * Action du contrôleur pour la page de sélection d'un conte.
     *       -> Récupérer :
     *           -> Les contes d'un élève en particulier
     *
     *       -> Actions possibles :
     *           -> Consultation d'un conte choisi
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function bibliothequeAction(Request $request) {

        return $this->render('JTIRUserBundle:eleves:bibliotheque.html.twig');
    }
}