<?php

namespace JTIR\UserBundle\Form;

use JTIR\UserBundle\Entity\Classe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClasseType extends AbstractType
{

    /**
     * (@inheritdoc)
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresse', AdresseType::class)
            ->add('niveau', NiveauType::class)
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
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Classe::class,
        ));
    }

}
