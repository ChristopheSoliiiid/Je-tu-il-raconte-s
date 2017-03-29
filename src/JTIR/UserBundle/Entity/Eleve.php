<?php
namespace JTIR\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Eleve
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Identite", inversedBy="eleve")
     * @ORM\JoinColumn(name="identite_id", referencedColumnName="id", nullable=false, unique=true)
     */
    private $identite;

    /**
     * @ORM\OneToMany(targetEntity="JTIR\PlatformBundle\Entity\Conte", mappedBy="eleve")
     */
    private $conte;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\UserBundle\Entity\Classe", inversedBy="eleve")
     * @ORM\JoinColumn(name="classe_id", referencedColumnName="id", nullable=false)
     */
    private $classe;

    /**
     * @ORM\ManyToMany(targetEntity="JTIR\CadavreExquisBundle\Entity\CadavreExquis", mappedBy="eleve")
     */
    private $cadavreExquis;
}