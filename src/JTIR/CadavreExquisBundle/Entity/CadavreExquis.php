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
}