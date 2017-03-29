<?php
namespace JTIR\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Identite
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=30, nullable=false)
     */
    private $prenom;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Enseignant", mappedBy="identite")
     */
    private $enseignant;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Eleve", mappedBy="identite")
     */
    private $eleve;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\AdminBundle\Entity\Admin", mappedBy="identite")
     */
    private $admin;
}