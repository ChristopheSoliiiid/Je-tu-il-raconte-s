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
}