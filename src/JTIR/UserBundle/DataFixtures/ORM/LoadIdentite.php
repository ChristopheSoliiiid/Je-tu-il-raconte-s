<?php

namespace JTIR\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JTIR\UserBundle\Entity\Identite;

class LoadIdentite extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        /*$identite1 = new Identite();
        $identite1->setNom('Siebert');
        $identite1->setPrenom('Marc');

        $manager->persist($identite1);
        $manager->flush();

        // Ajoute une référence dans les DataFixtures pour pouvoir l'utiliser dans d'autres fixtures
        $this->addReference('identite_marc', $identite1);*/

    }

    public function getOrder() {
        return 3;
    }

}
