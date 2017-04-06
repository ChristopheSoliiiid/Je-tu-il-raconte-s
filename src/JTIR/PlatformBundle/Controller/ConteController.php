<?php

namespace JTIR\PlatformBundle\Controller;

use JTIR\PlatformBundle\Entity\Conte;
use JTIR\PlatformBundle\Form\ConteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConteController extends Controller {

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction() {

        // On crée un conte
        $conte = new Conte();

        // On récupère le formulaire
        $form = $this->createForm(ConteType::class, $conte);

        $formView = $form->createView();

        // On rend la vue
        return $this->render('JTIRUserBundle:eleves:creer.html.twig', array(
            'form'=>$formView
        ));
    }
}