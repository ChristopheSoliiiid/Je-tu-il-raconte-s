<?php

namespace JTIR\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class PlatformController Le contrôleur pour le bundle platform.
 * @package JTIR\PlatformBundle\Controller
 */
class PlatformController extends Controller
{

    /**
     * Action du contrôleur pour la page d'accueil.
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        // Retourne simplement la vue de la page d'accueil
        return $this->render("JTIRPlatformBundle:visiteurs:index.html.twig");
    }

    /**
     * Action du contrôleur pour la page de connexion de la plateforme.
     * @return \Symfony\Component\HttpFoundation\Response
     */
    /*public function connexionAction()
    {
        return $this->render('JTIRPlatformBundle:visiteurs:connexion.html.twig');
    }*/

    /**
     * Action du contrôleur pour la page d'inscription.
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function inscriptionAction()
    {
        return $this->render('JTIRPlatformBundle:visiteurs:inscription.html.twig');
    }

    /**
     * Action du contrôleur pour la page de consultation des contes.
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function bibliothequeAction()
    {
        return $this->render('JTIRPlatformBundle:visiteurs:bibliotheque.html.twig');
    }
}
