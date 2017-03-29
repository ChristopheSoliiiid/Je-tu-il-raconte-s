<?php
namespace JTIR\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="user_adresse")
 * @ORM\Entity
 */
class Adresse
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $departement;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $etablissement;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Enseignant", mappedBy="adresse")
     */
    private $enseignant;

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
     * Set departement
     *
     * @param string $departement
     *
     * @return Adresse
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Adresse
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set etablissement
     *
     * @param string $etablissement
     *
     * @return Adresse
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set enseignant
     *
     * @param \JTIR\UserBundle\Entity\Enseignant $enseignant
     *
     * @return Adresse
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
}
