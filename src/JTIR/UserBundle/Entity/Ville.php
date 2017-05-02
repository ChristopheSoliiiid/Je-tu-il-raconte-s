<?php

namespace JTIR\UserBundle\Entity;


class Ville {

    /** @var string code postal */
    private $cp;

    /** @var string nom de la ville */
    private $nom;

    /**
     * Ville constructor.
     * @param $cp
     * @param $nom
     */
    public function __construct($cp, $nom)
    {
        $this->cp = $cp;
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }


}