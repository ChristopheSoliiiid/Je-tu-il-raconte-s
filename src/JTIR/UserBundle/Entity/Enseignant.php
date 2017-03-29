<?php
namespace JTIR\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Table(name="user_enseignant")
 * @ORM\Entity
 */
class Enseignant extends BaseUser {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Adresse", inversedBy="enseignant")
     * @ORM\JoinColumn(name="adresse_id", referencedColumnName="id", nullable=false, unique=true)
     */
    private $adresse;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Identite")
     * @ORM\JoinColumn(name="identite_id", referencedColumnName="id", nullable=false)
     */
    private $identite;

    /**
     * @ORM\OneToMany(targetEntity="JTIR\UserBundle\Entity\Classe", mappedBy="enseignant")
     */
    private $classe;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\UserBundle\Entity\Civilite")
     * @ORM\JoinColumn(name="civilite_id", referencedColumnName="id", nullable=false)
     */
    private $civilite;


    /**
     * Set adresse
     *
     * @param \JTIR\UserBundle\Entity\Adresse $adresse
     *
     * @return Enseignant
     */
    public function setAdresse(\JTIR\UserBundle\Entity\Adresse $adresse)
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
    public function setIdentite(\JTIR\UserBundle\Entity\Identite $identite)
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
    public function addClasse(\JTIR\UserBundle\Entity\Classe $classe)
    {
        $this->classe[] = $classe;

        return $this;
    }

    /**
     * Remove classe
     *
     * @param \JTIR\UserBundle\Entity\Classe $classe
     */
    public function removeClasse(\JTIR\UserBundle\Entity\Classe $classe)
    {
        $this->classe->removeElement($classe);
    }

    /**
     * Get classe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set civilite
     *
     * @param \JTIR\UserBundle\Entity\Civilite $civilite
     *
     * @return Enseignant
     */
    public function setCivilite(\JTIR\UserBundle\Entity\Civilite $civilite)
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
