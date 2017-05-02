<?php

namespace JTIR\UserBundle\Utils;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class DetecterRoles
 * @package JTIR\UserBundle\Utils
 */
class DetecterRoles {

    /**
     * Variable qui contient le service 'security.authorization_checker'
     * @var AuthorizationCheckerInterface
     */
    private $authorizationChecker;

    /**
     * Varibale qui contient le service 'router'
     * @var RouterInterface
     */
    private $router;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker, RouterInterface $router) {
        $this->authorizationChecker = $authorizationChecker;
        $this->router = $router;
    }

    /**
     * Fonction qui vérifie si l'utilisateur à un role assigné. Si l'utilisateur à un role, on le redirige vers
     * la bonne section du site.
     *
     * @return null|RedirectResponse
     */
    public function verifierRole() {
        // Si l'utlisateur dispose du ROLE_ENSEIGNANT redirection vers l'interface enseignant
        if ($this->authorizationChecker->isGranted('ROLE_ENSEIGNANT')) {
            return new RedirectResponse($this->router->generate('jtir_enseignants_inscrire_classe'));
        }

        // Si l'utlisateur dispose du ROLE_ELEVE redirection vers l'interface eleve
        if ($this->authorizationChecker->isGranted('ROLE_ELEVE')) {
            return new RedirectResponse($this->router->generate('jtir_eleves_creation_conte'));
        }

        return null;
    }
}