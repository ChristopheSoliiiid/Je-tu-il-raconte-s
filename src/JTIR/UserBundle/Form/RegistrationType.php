<?php

namespace JTIR\UserBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('adresse', AdresseType::class)
            ->add('civilite', EntityType::class,
                array('class' => 'JTIRUserBundle:Civilite',
                'choice_label' => 'libelle'))
            ->add('identite', IdentiteType::class);
    }

    public function getParent() {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix() {
        return 'app_user_registration';
    }
}
