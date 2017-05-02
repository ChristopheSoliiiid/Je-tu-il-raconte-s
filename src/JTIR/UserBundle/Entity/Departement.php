<?php

namespace JTIR\UserBundle\Entity;

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
}

