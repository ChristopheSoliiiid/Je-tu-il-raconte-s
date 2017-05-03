<?php

namespace JTIR\UserBundle\Form;

use JTIR\UserBundle\Entity\Departement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
        /*$builder
            ->add('departement', ChoiceType::class, array(
                'choices' => array(
                    '54 - Meurthe-et-Moselle' => 'Meurthe-et-Moselle',
                    '55 - Meuse' => 'Meuse',
                    '57 - Moselle' => 'Moselle',
                    '88 - Vosges' => 'Vosges'
                ),
                'group_by' => function($val) {
                    if ($val == 'Meurthe-et-Moselle' || $val == 'Meuse' || $val == 'Moselle' || $val == 'Vosges') {
                        return 'Lorraine';
                    } else {
                        return 'Autres';
                    }
                },
            ))
            ->add('ville', ChoiceType::class, array(
                'choices' => array(
                    '54000 - Nancy' => 'Nancy',
                    '54300 - Lunéville' => 'Luneville',
                    '54390 - Frouard' => 'Frouard',
                    '54700 - Pont-à-Mousson' => 'Pont-a-Mousson',
                )
            ))
            ->add('etablissement', ChoiceType::class, array(
                'choices' => array(
                    'Ecole Albert Schweitzer' => 'EAS',
                    'Ecole Pierre Dohm' => 'EPA',
                    'Ecole Jules Ferry' => 'EJF'
                )
            ));*/

        $departements = array(
            new Departement('54', 'Meurthe-et-Moselle'),
            new Departement('55', 'Meuse'),
            new Departement('57', 'Moselle'),
            new Departement('88', 'Vosges')
        );

        $builder
            ->add('departement', ChoiceType::class, array(
                'choices' => $departements,
                'placeholder' => '',
            ))
            ->add('etablissement', ChoiceType::class, array(
                'choices' => array(
                    'Ecole Albert Schweitzer' => 'EAS',
                    'Ecole Pierre Dohm' => 'EPA',
                    'Ecole Jules Ferry' => 'EJF'
                )
            ));

        $formModifier = function (FormInterface $form, Departement $departement = null) {
            $villes = null === $departement ? array() : $departement->getVilles();
            // $villes recois une liste vide si département est null sinon va chercher les villes du département

            $form->add('ville', ChoiceType::class, array(
                'placeholder' => '',
                'choices' => $villes,
            ));
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();

                //$formModifier($event->getForm(), $data->getDepartement());
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
