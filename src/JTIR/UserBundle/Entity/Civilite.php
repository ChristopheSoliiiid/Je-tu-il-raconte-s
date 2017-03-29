<?php
namespace JTIR\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Civilite
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, nullable=false)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="JTIR\UserBundle\Entity\Enseignant", mappedBy="civilite")
     */
    private $enseignant;

    /**
     * @ORM\OneToMany(targetEntity="JTIR\AdminBundle\Entity\Admin", mappedBy="civilite")
     */
    private $admin;
}