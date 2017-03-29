<?php
namespace JTIR\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="user_identite")
 * @ORM\Entity
 */
class Identite
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=30, nullable=false)
     */
    private $prenom;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Enseignant", mappedBy="identite")
     */
    private $enseignant;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Eleve", mappedBy="identite")
     */
    private $eleve;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\AdminBundle\Entity\Admin", mappedBy="identite")
     */
    private $admin;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Identite
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Identite
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set enseignant
     *
     * @param \JTIR\UserBundle\Entity\Enseignant $enseignant
     *
     * @return Identite
     */
    public function setEnseignant(\JTIR\UserBundle\Entity\Enseignant $enseignant = null)
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \JTIR\UserBundle\Entity\Enseignant
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Set eleve
     *
     * @param \JTIR\UserBundle\Entity\Eleve $eleve
     *
     * @return Identite
     */
    public function setEleve(\JTIR\UserBundle\Entity\Eleve $eleve = null)
    {
        $this->eleve = $eleve;

        return $this;
    }

    /**
     * Get eleve
     *
     * @return \JTIR\UserBundle\Entity\Eleve
     */
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * Set admin
     *
     * @param \JTIR\AdminBundle\Entity\Admin $admin
     *
     * @return Identite
     */
    public function setAdmin(\JTIR\AdminBundle\Entity\Admin $admin = null)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return \JTIR\AdminBundle\Entity\Admin
     */
    public function getAdmin()
    {
        return $this->admin;
    }
}
