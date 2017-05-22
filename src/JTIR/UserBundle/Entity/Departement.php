<?php

namespace JTIR\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Unirest\Request as UnirestRequest;

/**
 * Departement
 */
class Departement {

    /**
     * @var string numéro du département
     */
    private $numero;

    /**
     * @var string nom du département
     */
    private $nom;

    /**
     * Departement constructor.
     * @param $numero
     * @param $nom
     */
    public function __construct($numero, $nom)
    {
        $this->numero = $numero;
        $this->nom = $nom;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Departement
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Departement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return array
     */
    public function getVilles() {
        $villes = array();

        $responseVille = UnirestRequest::get(
            "https://geo.api.gouv.fr/departements/".$this->getNumero()."/communes?fields=nom,codesPostaux");

        foreach ($responseVille->body as $ville) {
            array_push($villes, new Ville($ville->codesPostaux[0], $ville->nom));
        }

        return $villes;
    }

    /**
     * Méthode en attendant de trouver une solution au chargement dynamique des villes en fonctions du département.
     *
     * @param array $departements
     * @return array
     */
    public static function getAllVilles(array $departements) {
        $villes = array();

        foreach ($departements as $departement) {
            $resVille = UnirestRequest::get(
                "https://geo.api.gouv.fr/departements/".$departement->getNumero()."/communes?fields=nom,codesPostaux");

            foreach ($resVille->body as $ville) {
                array_push($villes, new Ville($ville->codesPostaux[0], $ville->nom));
            }
        }

        return $villes;
    }
}

