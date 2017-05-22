<?php
namespace JTIR\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_enseignant")
 * @UniqueEntity(fields = "username", targetClass = "JTIR\UserBundle\Entity\User", message = "fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "JTIR\UserBundle\Entity\User", message = "fos_user.email.already_used")
 */
class Enseignant extends User {

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Adresse", inversedBy="enseignant", cascade={"persist"})
     * @ORM\JoinColumn(name="adresse_id", referencedColumnName="id", nullable=false, unique=true)
     */
    private $adresse;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Identite", cascade={"persist"})
     * @ORM\JoinColumn(name="identite_id", referencedColumnName="id", nullable=false)
     */
    private $identite;

    /**
     * @ORM\OneToMany(targetEntity="JTIR\UserBundle\Entity\Classe", mappedBy="enseignant")
     */
    private $classes;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\UserBundle\Entity\Civilite", cascade={"persist"})
     * @ORM\JoinColumn(name="civilite_id", referencedColumnName="id", nullable=false)
     */
    private $civilite;

    public function __construct() {
        parent::__construct();

        $this->roles = array('ROLE_ENSEIGNANT');
    }

    /**
     * Set adresse
     *
     * @param \JTIR\UserBundle\Entity\Adresse $adresse
     *
     * @return Enseignant
     */
    public function setAdresse(Adresse $adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \JTIR\UserBundle\Entity\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set identite
     *
     * @param \JTIR\UserBundle\Entity\Identite $identite
     *
     * @return Enseignant
     */
    public function setIdentite(Identite $identite)
    {
        $this->identite = $identite;

        return $this;
    }

    /**
     * Get identite
     *
     * @return \JTIR\UserBundle\Entity\Identite
     */
    public function getIdentite()
    {
        return $this->identite;
    }

    /**
     * Add classe
     *
     * @param \JTIR\UserBundle\Entity\Classe $classe
     *
     * @return Enseignant
     */
    public function addClasse(Classe $classe)
    {
        $this->classes[] = $classe;

        return $this;
    }

    /**
     * Remove classe
     *
     * @param \JTIR\UserBundle\Entity\Classe $classe
     */
    public function removeClasse(Classe $classe)
    {
        $this->classes->removeElement($classe);
    }

    /**
     * Get classe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Set civilite
     *
     * @param \JTIR\UserBundle\Entity\Civilite $civilite
     *
     * @return Enseignant
     */
    public function setCivilite(Civilite $civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return \JTIR\UserBundle\Entity\Civilite
     */
    public function getCivilite()
    {
        return $this->civilite;
    }
}
