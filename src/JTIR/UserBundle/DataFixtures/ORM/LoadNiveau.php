<?php

namespace JTIR\UserBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use JTIR\UserBundle\Entity\Niveau;

class LoadNiveau extends AbstractFixture {

    public function load(ObjectManager $manager) {
        $gs = new Niveau();
        $gs->setLibelle('Grande Section');
        $manager->persist($gs);

        $cp = new Niveau();
        $cp->setLibelle('CP');
        $manager->persist($cp);

        $ce1 = new Niveau();
        $ce1->setLibelle('CE1');
        $manager->persist($ce1);

        $manager->flush();
    }
}