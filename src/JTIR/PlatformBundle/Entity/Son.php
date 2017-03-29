<?php
namespace JTIR\PlatformBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Son
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
     * @ORM\ManyToMany(targetEntity="JTIR\PlatformBundle\Entity\Conte", mappedBy="son")
     */
    private $conte;
}