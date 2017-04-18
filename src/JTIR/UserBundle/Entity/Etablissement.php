<?php

namespace JTIR\UserBundle\Entity;


class Etablissement {

    /**
     * Code UAI de l'établissement
     * @var string
     */
    private $uai;

    /**
     * @var string
     */
    private $nom;

    /**
     * Etablissement constructor.
     * @param string $uai
     * @param string $nom
     */
    public function __construct($uai, $nom)
    {
        $this->uai = $uai;
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getUai()
    {
        return $this->uai;
    }

    /**
     * @param string $uai
     */
    public function setUai($uai)
    {
        $this->uai = $uai;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }




}