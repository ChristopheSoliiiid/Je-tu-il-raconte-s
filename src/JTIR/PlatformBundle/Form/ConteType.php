<?php

namespace JTIR\PlatformBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', EntityType::class, array(
                'class' => 'JTIR\PlatformBundle\Entity\Conte',
                'choice_label' => 'titre'
            ))
            ->add('situationInitiale', TextareaType::class)
            ->add('elementDeclencheur', TextareaType::class)
            ->add('peripetie', TextareaType::class)
            ->add('denouement', TextareaType::class)
            ->add('situationFinale', TextareaType::class)
            ->add('date_modification', DateTimeType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JTIR\PlatformBundle\Entity\Conte'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'jtir_platformbundle_conte';
    }


}
