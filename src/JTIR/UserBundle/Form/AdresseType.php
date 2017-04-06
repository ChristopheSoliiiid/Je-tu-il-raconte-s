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
                    '54 - Meurthe-et-Moselle' => '54',
                    '55 - Meuse' => '55',
                    '57 - Moselle' => '57',
                    '88 - Vosges' => '88'
                ),
                'group_by' => function($val, $key, $index) {
                    if ($val == '54' || $val == '55' || $val == '57' || $val == '88') {
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
