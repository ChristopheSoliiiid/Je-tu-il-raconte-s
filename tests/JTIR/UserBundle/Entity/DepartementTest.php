<?php

namespace Tests\JTIR\UserBundle\Util;

use JTIR\UserBundle\Entity\Departement;
use JTIR\UserBundle\Entity\Ville;

use PHPUnit\Framework\TestCase;
use Unirest\Request as UnirestRequest;

class DepartementTest extends TestCase{

    public function testGetVilles() {
        $departement = new Departement('54', 'Meurthe-et-Moselle');
        $villes = array();

        $responseVille = UnirestRequest::get(
            "https://geo.api.gouv.fr/departements/".$departement->getNumero()."/communes?fields=nom,codesPostaux");

        foreach ($responseVille->body as $ville) {
            array_push($villes, new Ville($ville->codesPostaux[0], $ville->nom));
        }

        $this->assertTrue($villes != null);
    }
}