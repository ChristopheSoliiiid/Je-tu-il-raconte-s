<?php
namespace JTIR\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="platform_conte")
 * @ORM\Entity
 */
class Conte
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $situationInitiale;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $elementDeclencheur;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $peripetie;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $denouement;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $situationFinale;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default":true})
     */
    private $partage;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\UserBundle\Entity\Eleve", inversedBy="conte")
     * @ORM\JoinColumn(name="eleve_id", referencedColumnName="id")
     */
    private $eleve;

    /**
     * @ORM\ManyToMany(targetEntity="JTIR\PlatformBundle\Entity\Carte", inversedBy="conte")
     * @ORM\JoinTable(
     *     name="platform_conte_carte",
     *     joinColumns={@ORM\JoinColumn(name="conte_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="carte_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $carte;

    /**
     * @ORM\ManyToMany(targetEntity="JTIR\PlatformBundle\Entity\Son", inversedBy="conte")
     * @ORM\JoinTable(
     *     name="platform_conte_son",
     *     joinColumns={@ORM\JoinColumn(name="conte_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="son_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $son;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->carte = new \Doctrine\Common\Collections\ArrayCollection();
        $this->son = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Conte
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set situationInitiale
     *
     * @param string $situationInitiale
     *
     * @return Conte
     */
    public function setSituationInitiale($situationInitiale)
    {
        $this->situationInitiale = $situationInitiale;

        return $this;
    }

    /**
     * Get situationInitiale
     *
     * @return string
     */
    public function getSituationInitiale()
    {
        return $this->situationInitiale;
    }

    /**
     * Set elementDeclencheur
     *
     * @param string $elementDeclencheur
     *
     * @return Conte
     */
    public function setElementDeclencheur($elementDeclencheur)
    {
        $this->elementDeclencheur = $elementDeclencheur;

        return $this;
    }

    /**
     * Get elementDeclencheur
     *
     * @return string
     */
    public function getElementDeclencheur()
    {
        return $this->elementDeclencheur;
    }

    /**
     * Set peripetie
     *
     * @param string $peripetie
     *
     * @return Conte
     */
    public function setPeripetie($peripetie)
    {
        $this->peripetie = $peripetie;

        return $this;
    }

    /**
     * Get peripetie
     *
     * @return string
     */
    public function getPeripetie()
    {
        return $this->peripetie;
    }

    /**
     * Set denouement
     *
     * @param string $denouement
     *
     * @return Conte
     */
    public function setDenouement($denouement)
    {
        $this->denouement = $denouement;

        return $this;
    }

    /**
     * Get denouement
     *
     * @return string
     */
    public function getDenouement()
    {
        return $this->denouement;
    }

    /**
     * Set situationFinale
     *
     * @param string $situationFinale
     *
     * @return Conte
     */
    public function setSituationFinale($situationFinale)
    {
        $this->situationFinale = $situationFinale;

        return $this;
    }

    /**
     * Get situationFinale
     *
     * @return string
     */
    public function getSituationFinale()
    {
        return $this->situationFinale;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Conte
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set partage
     *
     * @param boolean $partage
     *
     * @return Conte
     */
    public function setPartage($partage)
    {
        $this->partage = $partage;

        return $this;
    }

    /**
     * Get partage
     *
     * @return boolean
     */
    public function getPartage()
    {
        return $this->partage;
    }

    /**
     * Set eleve
     *
     * @param \JTIR\UserBundle\Entity\Eleve $eleve
     *
     * @return Conte
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
     * Add carte
     *
     * @param \JTIR\PlatformBundle\Entity\Carte $carte
     *
     * @return Conte
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

    /**
     * Add son
     *
     * @param \JTIR\PlatformBundle\Entity\Son $son
     *
     * @return Conte
     */
    public function addSon(\JTIR\PlatformBundle\Entity\Son $son)
    {
        $this->son[] = $son;

        return $this;
    }

    /**
     * Remove son
     *
     * @param \JTIR\PlatformBundle\Entity\Son $son
     */
    public function removeSon(\JTIR\PlatformBundle\Entity\Son $son)
    {
        $this->son->removeElement($son);
    }

    /**
     * Get son
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSon()
    {
        return $this->son;
    }
}
