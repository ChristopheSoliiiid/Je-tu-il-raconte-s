<?php
namespace JTIR\PlatformBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="platform_categorie")
 * @ORM\Entity
 */
class Categorie
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
     * @ORM\OneToMany(targetEntity="JTIR\PlatformBundle\Entity\Carte", mappedBy="categorie")
     */
    private $carte;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->carte = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Categorie
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
     * Add carte
     *
     * @param \JTIR\PlatformBundle\Entity\Carte $carte
     *
     * @return Categorie
     */
    public function addCarte(\JTIR\PlatformBundle\Entity\Carte $carte)
    {
        $this->carte[] = $carte;

        return $this;
    }

    /**
     * Remove carte
     *
     * @param \JTIR\PlatformBundle\Entity\Carte $carte
     */
    public function removeCarte(\JTIR\PlatformBundle\Entity\Carte $carte)
    {
        $this->carte->removeElement($carte);
    }

    /**
     * Get carte
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCarte()
    {
        return $this->carte;
    }
}
