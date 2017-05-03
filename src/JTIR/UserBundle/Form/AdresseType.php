<?php

namespace JTIR\UserBundle\Form;

use JTIR\UserBundle\Entity\Adresse;
use JTIR\UserBundle\Entity\Departement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdresseType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $departements = array(
            new Departement('54', 'Meurthe-et-Moselle'),
            new Departement('55', 'Meuse'),
            new Departement('57', 'Moselle'),
            new Departement('88', 'Vosges')
        );

        $builder
            ->add('departement', ChoiceType::class, array( // Champ type select
                'choices' => $departements, // Les éléments de la liste HTML
                'placeholder' => 'Choisir un département', // Une option sans valeur pour forcer a choisir
                'choice_label' => function ($value) {
                    return $value->getNumero() . ' - ' . $value->getNom();
                    // Le label affiché a l'utilisateur ex: '55 - Meuse'
                },
                'choice_value' => 'numero', // Récup le numéro du département et l'ajoute en tant que valeur de l'option
                'group_by' => function($val, $key, $index) {
                    $region = null;
                    switch ($val->getNumero()) {
                        case '54':case '55':case '57':case '88':
                            $region = 'Lorraine';
                            break;
                    }
                    return $region;
                },
            ))
            ->add('etablissement', TextType::class); // Champ type text pour le nom de l'établissement

        $formModifier = function (FormInterface $form, Departement $departement = null) {

            //$departement2 = new Departement('55', 'Meurthe-et-Moselle');

            $villes = null === $departement ? array() : $departement->getVilles();
            // $villes recois une liste vide si département est null sinon va chercher les villes du département

            $form->add('ville', ChoiceType::class, array(
                'placeholder' => 'Choisir une ville', // Une option sans valeur pour forcer a choisir
                'choices' => $villes, // Les éléments de la liste HTML
                'choice_label' => function ($value) {
                    return $value->getCp() . ' - ' . $value->getNom();
                    // Le label affiché a l'utilisateur ex: '54300 - Lunéville'
                },
                'choice_value' => 'nom', // Récup le nom de la ville et l'ajoute en tant que valeur de l'option
            ));
        };

        $builder->addEventListener(
            /* Sert a modifier les données avant le remplissage des données du formulaire ou va modifier les données
            en fonction des données du formulaire. Pour plus d'information :
            http://symfony.com/doc/current/form/events.html#a-the-formevents-pre-set-data-event */
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                // Récupère une entité Adresse
                $data = $event->getData();

                if ($data !== null) {
                    $formModifier($event->getForm(), $data->getDepartement());
                } else {
                    $data = new Adresse();
                    $formModifier($event->getForm(), $data->getDepartement());
                }
            }
        );

        $builder->get('departement')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $departement = $event->getForm()->getData();

                $formModifier($event->getForm()->getParent(), $departement);
            }
        );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JTIR\UserBundle\Entity\Adresse'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'jtir_userbundle_adresse';
    }


}
