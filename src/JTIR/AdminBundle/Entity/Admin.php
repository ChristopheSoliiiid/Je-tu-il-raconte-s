<?php
namespace JTIR\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Admin
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="JTIR\UserBundle\Entity\Identite", inversedBy="admin")
     * @ORM\JoinColumn(name="identite_id", referencedColumnName="id", nullable=false, unique=true)
     */
    private $identite;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\UserBundle\Entity\Civilite", inversedBy="admin")
     * @ORM\JoinColumn(name="civilite_id", referencedColumnName="id", nullable=false)
     */
    private $civilite;
}