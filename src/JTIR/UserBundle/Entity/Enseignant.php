<?php
namespace JTIR\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Enseignant
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Adresse", inversedBy="enseignant")
     * @ORM\JoinColumn(name="adresse_id", referencedColumnName="id", nullable=false, unique=true)
     */
    private $adresse;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Identite", inversedBy="enseignant")
     * @ORM\JoinColumn(name="identite_id", referencedColumnName="id", nullable=false, unique=true)
     */
    private $identite;

    /**
     * @ORM\OneToMany(targetEntity="JTIR\UserBundle\Entity\Classe", mappedBy="enseignant")
     */
    private $classe;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\UserBundle\Entity\Civilite", inversedBy="enseignant")
     * @ORM\JoinColumn(name="civilite_id", referencedColumnName="id", nullable=false)
     */
    private $civilite;
}