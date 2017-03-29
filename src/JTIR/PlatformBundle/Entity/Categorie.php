<?php
namespace JTIR\PlatformBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Categorie
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
     * @ORM\OneToMany(targetEntity="JTIR\PlatformBundle\Entity\Carte", mappedBy="categorie")
     */
    private $carte;
}