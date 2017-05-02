<?php

namespace JTIR\UserBundle\Form;

use JTIR\UserBundle\Entity\Departement;
use JTIR\UserBundle\Entity\Etablissement;
use JTIR\UserBundle\Entity\Ville;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdresseType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
            ));

        /*$builder->add('departement', ChoiceType::class, [
            'choices' => [
                new Departement('54', 'Meurthe-et-Moselle'),
                new Departement('55', 'Meuse'),
                new Departement('57', 'Moselle'),
                new Departement('88', 'Vosges'),
            ],
            'choice_label' => function(Departement $departement) {
                return $departement->getNumero() . " - " . $departement->getNom();
            },
            'group_by' => function(Departement $departement) {
                if($departement->getNumero() == ('54' || '55' || '57' || '88')) {
                    return 'Lorraine';
                } else {
                    return 'Autres';
                }
            }
        ])
            ->add('ville', ChoiceType::class, [
                'choices' => [
                    new Ville('54000', 'Nancy'),
                    new Ville('54300', 'Lunéville'),
                    new Ville('54390', 'Frouard'),
                    new Ville('54700', 'Pont-à-Mousson'),
                ],
                'choice_label' => function(Ville $ville) {
                    return $ville->getCp() . " - " . $ville->getNom();
                }
            ])
            ->add('etablissement', ChoiceType::class, [
                'choices' => [
                    new Etablissement('0540146R', 'Ecole élémentaire Robert Desnos'),
                    new Etablissement('0540148T', 'Ecole élémentaire Genaville'),
                    new Etablissement('0540149U', 'Ecole primaire des Paquis'),
                ],
                'choice_label' => function(Etablissement $etablissement) {
                    return $etablissement->getNom();
                }
            ]);*/
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'JTIR\UserBundle\Entity\Adresse'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'jtir_userbundle_adresse';
    }


}
