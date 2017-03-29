<?php
namespace JTIR\CadavreExquisBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class CadavreExquis extends \JTIR\PlatformBundle\Entity\Conte
{
    /**
     * @ORM\ManyToMany(targetEntity="JTIR\UserBundle\Entity\Eleve", inversedBy="cadavreExquis")
     * @ORM\JoinTable(
     *     name="Eleve_CadavreExquis",
     *     joinColumns={@ORM\JoinColumn(name="cadavre_exquis_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="eleve_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $eleve;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eleve = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add eleve
     *
     * @param \JTIR\UserBundle\Entity\Eleve $eleve
     *
     * @return CadavreExquis
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
}
