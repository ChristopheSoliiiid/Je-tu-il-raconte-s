<?php
namespace JTIR\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JTIR\PlatformBundle\Entity\Conte;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_eleve")
 * @UniqueEntity(fields = "username", targetClass = "JTIR\UserBundle\Entity\User", message = "fos_user.username.already_used")
 */
class Eleve extends User {

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Identite", cascade={"persist"})
     * @ORM\JoinColumn(name="identite_id", referencedColumnName="id", nullable=false, unique=true)
     */
    private $identite;

    /**
     * @ORM\OneToMany(targetEntity="JTIR\PlatformBundle\Entity\Conte", mappedBy="eleve")
     */
    private $contes;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\UserBundle\Entity\Classe", inversedBy="eleves", cascade={"persist"})
     * @ORM\JoinColumn(name="classe_id", referencedColumnName="id", nullable=false)
     */
    private $classe;

    /**
     * A décommenter pour lors de l'utilisation du CadavreExquisBundle
     * ORM\ManyToMany(targetEntity="JTIR\CadavreExquisBundle\Entity\CadavreExquis", mappedBy="eleve")
     */
    //private $cadavreExquis;

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();

        $this->conte = new ArrayCollection();
        //$this->cadavreExquis = new ArrayCollection();
        $this->roles = array('ROLE_ELEVE');
        $this->enabled = 1; // Active le compte au moment de l'enregistrement
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set identite
     *
     * @param \JTIR\UserBundle\Entity\Identite $identite
     *
     * @return Eleve
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
     * Add conte
     *
     * @param \JTIR\PlatformBundle\Entity\Conte $conte
     */
    public function addConte(Conte $conte)
    {
        $this->contes[] = $conte;

        return $this;
    }

    /**
     * Remove conte
     *
     * @param \JTIR\PlatformBundle\Entity\Conte $conte
     */
    public function removeConte(Conte $conte)
    {
        $this->contes->removeElement($conte);
    }

    /**
     * Get conte
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContes()
    {
        return $this->contes;
    }

    /**
     * Set classe
     *
     * @param \JTIR\UserBundle\Entity\Classe $classe
     *
     * @return Eleve
     */
    public function setClasse(Classe $classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return \JTIR\UserBundle\Entity\Classe
     */
    public function getClasse()
    {
        return $this->classe;
    }

    public function setUsername($username)
    {
        parent::setUsername($username);
        $this->setEmail($username . "@eleve.jetuil.fr");
    }
}
