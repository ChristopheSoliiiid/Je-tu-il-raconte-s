<?php

namespace JTIR\UserBundle\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;

class ConteEnseignantType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('eleve', EntityType::class, array(
                'class' => 'JTIRUserBundle:Eleve',
                'placeholder' => 'Choisir un élève',
            ));

        $formModifier = function (FormInterface $form, Eleve $eleve = null) {
            $contes = null === $eleve ? array() : $eleve->getContes();

            $form->add('conte', EntityType::class, array(
                'class' => 'JTIRPlatformBundle:Conte',
                'choices' => $contes,
                'placeholder' => 'Choisir un conte',
            ));
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();

                $formModifier($event->getForm(), $data->getEleve());
            }
        );

        $builder->get('eleve')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $eleve = $event->getForm()->getData();

                $formModifier($event->getForm()->getParent(), $eleve);
            }
        );
    }
}