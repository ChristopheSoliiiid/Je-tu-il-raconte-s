<?php
namespace JTIR\PlatformBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Carte
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\PlatformBundle\Entity\Categorie", inversedBy="carte")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id", nullable=false)
     */
    private $categorie;

    /**
     * @ORM\ManyToMany(targetEntity="JTIR\PlatformBundle\Entity\Conte", mappedBy="carte")
     */
    private $conte;
}