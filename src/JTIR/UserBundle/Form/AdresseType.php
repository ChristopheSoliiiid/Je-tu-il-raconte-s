<?php

namespace JTIR\UserBundle\Form;

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
                    'Ecole Albert Schweitzer' => 'Ecole Albert Schweitzer',
                    'Ecole Pierre Dohm' => 'Ecole Pierre Dohm',
                    'Ecole Jules Ferry' => 'Ecole Jules Ferry'
                )
            ));
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
