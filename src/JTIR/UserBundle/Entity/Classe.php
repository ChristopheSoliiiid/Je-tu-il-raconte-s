<?php
namespace JTIR\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Classe
{
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
     * @ORM\OneToMany(targetEntity="JTIR\UserBundle\Entity\Classe", mappedBy="EI_classe")
     */
    private $EP_classe;

    /**
     * @ORM\OneToMany(targetEntity="JTIR\UserBundle\Entity\Eleve", mappedBy="classe")
     */
    private $eleve;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\UserBundle\Entity\Enseignant", inversedBy="classe")
     * @ORM\JoinColumn(name="enseignant_id", referencedColumnName="id", nullable=false)
     */
    private $enseignant;

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
        $this->EP_classe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->eleve = new \Doctrine\Common\Collections\ArrayCollection();
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
    public function addEPClasse(\JTIR\UserBundle\Entity\Classe $ePClasse)
    {
        $this->EP_classe[] = $ePClasse;

        return $this;
    }

    /**
     * Remove ePClasse
     *
     * @param \JTIR\UserBundle\Entity\Classe $ePClasse
     */
    public function removeEPClasse(\JTIR\UserBundle\Entity\Classe $ePClasse)
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
     * Add eleve
     *
     * @param \JTIR\UserBundle\Entity\Eleve $eleve
     *
     * @return Classe
     */
    public function addEleve(\JTIR\UserBundle\Entity\Eleve $eleve)
    {
        $this->eleve[] = $eleve;

        return $this;
    }

    /**
     * Remove eleve
     *
     * @param \JTIR\UserBundle\Entity\Eleve $eleve
     */
    public function removeEleve(\JTIR\UserBundle\Entity\Eleve $eleve)
    {
        $this->eleve->removeElement($eleve);
    }

    /**
     * Get eleve
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * Set enseignant
     *
     * @param \JTIR\UserBundle\Entity\Enseignant $enseignant
     *
     * @return Classe
     */
    public function setEnseignant(\JTIR\UserBundle\Entity\Enseignant $enseignant)
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
    public function setEIClasse(\JTIR\UserBundle\Entity\Classe $eIClasse = null)
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
}
