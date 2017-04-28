<?php

namespace JTIR\UserBundle\Form;

use JTIR\UserBundle\Entity\Classe;
use JTIR\UserBundle\Form\Type\EleveType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ),))
            ->add('eleves', CollectionType::class, array(
                'entry_type' => EleveType::class,
                'allow_add' => true, // Autorise l'ajout de plusieurs form Eleve
                'allow_delete' => true, // Autorise la suppression d'un form Eleve
                'by_reference' => false,
                'prototype' => true, // Accepte un prototype pour l'affichage des données
            ));
    }

    /**
     * (@inheritdoc)
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => Classe::class,
        ));
    }

}
