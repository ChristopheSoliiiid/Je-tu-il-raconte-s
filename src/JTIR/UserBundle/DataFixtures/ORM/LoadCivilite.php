<?php

namespace JTIR\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JTIR\UserBundle\Entity\Civilite;

/**
 * Classe de DataFixutres. Va permettre de créer de données de test.
 *
 * Class LoadCivilite
 * @package JTIR\UserBundle\DataFixtures\ORM*
 */
class LoadCivilite extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $civ1 = new Civilite();
        $civ1->setLibelle("M.");

        $manager->persist($civ1);

        $civ2 = new Civilite();
        $civ2->setLibelle("Mme.");

        $manager->persist($civ2);

        $manager->flush();

        // Ajoute une référence dans les DataFixtures pour pouvoir l'utiliser dans d'autres fixtures
        $this->addReference('m.', $civ1);
        $this->addReference('mme.', $civ2);
    }

    public function getOrder() {
        return 2;
    }

}
