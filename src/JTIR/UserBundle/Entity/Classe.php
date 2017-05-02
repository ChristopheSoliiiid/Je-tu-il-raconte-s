<?php
namespace JTIR\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="user_classe")
 * @ORM\Entity
 */
class Classe {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15, nullable=false)
     */
    private $niveau;

    /**
     * @ORM\OneToMany(targetEntity="JTIR\UserBundle\Entity\Eleve", mappedBy="classe", cascade={"persist"})
     */
    private $eleves;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\UserBundle\Entity\Enseignant", inversedBy="classe")
     * @ORM\JoinColumn(name="enseignant_id", referencedColumnName="id", nullable=false)
     */
    private $enseignant;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Adresse", cascade={"persist"})
     * @ORM\JoinColumn(name="adresse_id", referencedColumnName="id", nullable=false, unique=true)
     */
    private $adresse;

    /**
     * @ORM\OneToMany(targetEntity="JTIR\UserBundle\Entity\Classe", mappedBy="EI_classe")
     */
    private $EP_classe;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\UserBundle\Entity\Classe", inversedBy="EP_classe")
     * @ORM\JoinColumn(name="classe_id", referencedColumnName="id")
     */
    private $EI_classe;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->EP_classe = new ArrayCollection();
        $this->eleves = new ArrayCollection();
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
     * Set niveau
     *
     * @param string $niveau
     *
     * @return Classe
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Add ePClasse
     *
     * @param \JTIR\UserBundle\Entity\Classe $ePClasse
     *
     * @return Classe
     */
    public function addEPClasse(Classe $ePClasse)
    {
        $this->EP_classe[] = $ePClasse;

        return $this;
    }

    /**
     * Remove ePClasse
     *
     * @param \JTIR\UserBundle\Entity\Classe $ePClasse
     */
    public function removeEPClasse(Classe $ePClasse)
    {
        $this->EP_classe->removeElement($ePClasse);
    }

    /**
     * Get ePClasse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEPClasse()
    {
        return $this->EP_classe;
    }

    /**
     * Set la classe de l'Eleve et ajoute un Eleve dans la collection
     *
     * @param \JTIR\UserBundle\Entity\Eleve $eleve
     */
    public function addEleve(Eleve $eleve)
    {
        $eleve->setClasse($this);
        $this->eleves->add($eleve);
    }

    /**
     * Remove eleve
     *
     * @param \JTIR\UserBundle\Entity\Eleve $eleve
     */
    public function removeEleve(Eleve $eleve)
    {
        $this->eleves->removeElement($eleve);
    }

    /**
     * Get eleves
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEleves()
    {
        return $this->eleves;
    }

    /**
     * Set enseignant
     *
     * @param \JTIR\UserBundle\Entity\Enseignant $enseignant
     *
     * @return Classe
     */
    public function setEnseignant(Enseignant $enseignant)
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
     * Set eIClasse
     *
     * @param \JTIR\UserBundle\Entity\Classe $eIClasse
     *
     * @return Classe
     */
    public function setEIClasse(Classe $eIClasse = null)
    {
        $this->EI_classe = $eIClasse;

        return $this;
    }

    /**
     * Get eIClasse
     *
     * @return \JTIR\UserBundle\Entity\Classe
     */
    public function getEIClasse()
    {
        return $this->EI_classe;
    }

    /**
     * Set adresse
     *
     * @param \JTIR\UserBundle\Entity\Adresse $adresse
     *
     * @return Classe
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
}
