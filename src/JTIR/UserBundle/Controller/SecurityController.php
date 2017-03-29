<?php

namespace JTIR\UserBundle\Controller;

/**
 * Ce contrôleur hérite du contrôleur Security du bundle FOSUser pour overwriter
 * la fonction de render du formulaire de connexion.
 *
 * Class SecurityController
 * @package JTIR\PlatformBundle\Controller
 */
class SecurityController extends \FOS\UserBundle\Controller\SecurityController {

    /**
     * Overwrite de la fonction pour modifier la vue de la page de connexion.
     *
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function renderLogin(array $data) {
        return $this->render('JTIRUserBundle:visiteurs:connexion.html.twig', $data);
    }
}