<?php
namespace JTIR\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
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
}