<?php
namespace JTIR\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Admin
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Identite")
     * @ORM\JoinColumn(name="identite_id", referencedColumnName="id", nullable=false)
     */
    private $identite;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\UserBundle\Entity\Civilite", inversedBy="admin")
     * @ORM\JoinColumn(name="civilite_id", referencedColumnName="id", nullable=false)
     */
    private $civilite;


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
     * @return Admin
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
     * Set civilite
     *
     * @param \JTIR\UserBundle\Entity\Civilite $civilite
     *
     * @return Admin
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
