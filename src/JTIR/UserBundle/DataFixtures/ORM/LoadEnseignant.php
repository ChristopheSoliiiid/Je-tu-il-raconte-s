<?php

namespace JTIR\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadEnseignant extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

    /**
     * En implémentant l’interface ContainerAwareInterface, il faut créer la méthode setContainer.
     * Grâce à cette méthode, Symfony est en mesure de nous injecter un container.
     * Par la suite, ce container nous donnera la possibilité de charger des services.
     *
     * @var
     */
    private $container;

    public function load(ObjectManager $manager) {

        /*$factory = $this->container->get('security.encoder_factory');

        $userManager = $this->container->get('fos_user.user_manager');

        $enseignant1 = $userManager->createUser();
        $enseignant1->setCivilite($this->getReference('m.'));
        $enseignant1->setAdresse($this->getReference('adresse_afpa'));
        $enseignant1->setIdentite($this->getReference('identite_marc'));
        $enseignant1->setUsername('marc');
        $enseignant1->setEmail('marc@afpa.fr');
        $enseignant1->setRoles(array('ROLE_ENSEIGNANT'));
        $enseignant1->setEnabled(true);
        $encoder = $factory->getEncoder($enseignant1);
        $password = $encoder->encodePassword('1234', $enseignant1->getSalt());
        $enseignant1->setPassword($password);

        $userManager->updateUser($enseignant1);*/
    }

    /**
     * Setter pour le container
     * @param ContainerInterface|null $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        //$this->container = $container;
    }

    public function getOrder() {
        //return 4;
    }

}