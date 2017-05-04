<?php

namespace JTIR\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class NiveauType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('niveau', ChoiceType::class, array(
                'choices' => array(
                    'Grand section de marternelle' => 'GS',
                    'CP' => 'CP',
                    'CE1' => 'CE1'
                ),
                'placeholder' => 'Choisir le niveau de la classe'));
    }
}