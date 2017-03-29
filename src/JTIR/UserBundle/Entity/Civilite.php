<?php
namespace JTIR\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="user_civilite")
 * @ORM\Entity
 */
class Civilite
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, nullable=false)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="JTIR\UserBundle\Entity\Enseignant", mappedBy="civilite")
     */
    private $enseignant;

    /**
     * @ORM\OneToMany(targetEntity="JTIR\AdminBundle\Entity\Admin", mappedBy="civilite")
     */
    private $admin;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enseignant = new \Doctrine\Common\Collections\ArrayCollection();
        $this->admin = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Civilite
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Add enseignant
     *
     * @param \JTIR\UserBundle\Entity\Enseignant $enseignant
     *
     * @return Civilite
     */
    public function addEnseignant(\JTIR\UserBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignant[] = $enseignant;

        return $this;
    }

    /**
     * Remove enseignant
     *
     * @param \JTIR\UserBundle\Entity\Enseignant $enseignant
     */
    public function removeEnseignant(\JTIR\UserBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignant->removeElement($enseignant);
    }

    /**
     * Get enseignant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Add admin
     *
     * @param \JTIR\AdminBundle\Entity\Admin $admin
     *
     * @return Civilite
     */
    public function addAdmin(\JTIR\AdminBundle\Entity\Admin $admin)
    {
        $this->admin[] = $admin;

        return $this;
    }

    /**
     * Remove admin
     *
     * @param \JTIR\AdminBundle\Entity\Admin $admin
     */
    public function removeAdmin(\JTIR\AdminBundle\Entity\Admin $admin)
    {
        $this->admin->removeElement($admin);
    }

    /**
     * Get admin
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdmin()
    {
        return $this->admin;
    }
}
