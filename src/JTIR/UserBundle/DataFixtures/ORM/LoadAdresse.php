<?php

namespace JTIR\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JTIR\UserBundle\Entity\Adresse;

class LoadAdresse extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $adresse1 = new Adresse();
        $adresse1->setDepartement("Meurthe-et-Moselle");
        $adresse1->setVille("Frouard");
        $adresse1->setEtablissement("AFPA Nancy-Pompey");

        $manager->persist($adresse1);

        $manager->flush();

        // Ajoute une référence dans les DataFixtures pour pouvoir l'utiliser dans d'autres fixtures
        $this->addReference('adresse_afpa', $adresse1);
    }

    public function getOrder() {
        return 1;
    }
}
