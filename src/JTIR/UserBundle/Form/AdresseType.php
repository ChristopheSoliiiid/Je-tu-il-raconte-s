<?php

namespace JTIR\UserBundle\Form;

use JTIR\UserBundle\Entity\Departement;
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
        $builder->add('departement', ChoiceType::class, [
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
            },
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
