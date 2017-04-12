<?php

namespace JTIR\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ClasseType extends AbstractType {

    /**
     * (@inheritdoc)
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        // TODO: Créer une entity pour stocker les niveaux de classe disponibles
        $builder
            ->add('adresse', AdresseType::class)
            ->add('niveau', ChoiceType::class, array(
            'choices' => array(
                'Grand section de marternelle' => 'GS',
                'CP' => 'CP',
                'CE1' => 'CE1'
            ),
        ));
    }

}
