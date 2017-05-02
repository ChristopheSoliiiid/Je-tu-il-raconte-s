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
        // Récupération du service detecter role
        $detectRole = $this->container->get('jtir_userbundle.detecterroles');

        // Verification des roles, si l'utilisateur à un role assigné, redirection vers la page d'interface
        if($detectRole->verifierRole() != null) {
            return $detectRole->verifierRole();
        }

        // Retourne simplement la vue de la page d'accueil
        return $this->render("JTIRPlatformBundle:visiteurs:index.html.twig");
    }

    /**
     * Action du contrôleur pour la page de consultation des contes.
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function bibliothequeAction()
    {
        // Récupération du service detecter role
        $detectRole = $this->container->get('jtir_userbundle.detecterroles');

        // Verification des roles, si l'utilisateur à un role assigné, redirection vers la page d'interface
        if($detectRole->verifierRole() != null) {
            return $detectRole->verifierRole();
        }

        return $this->render('JTIRPlatformBundle:visiteurs:bibliotheque.html.twig');
    }
}
