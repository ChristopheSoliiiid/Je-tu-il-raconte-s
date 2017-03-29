<?php
namespace JTIR\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Conte
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $situationInitiale;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $elementDeclencheur;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $peripetie;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $denouement;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $situationFinale;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default":true})
     */
    private $partage;

    /**
     * @ORM\ManyToOne(targetEntity="JTIR\UserBundle\Entity\Eleve", inversedBy="conte")
     * @ORM\JoinColumn(name="eleve_id", referencedColumnName="id")
     */
    private $eleve;

    /**
     * @ORM\ManyToMany(targetEntity="JTIR\PlatformBundle\Entity\Carte", inversedBy="conte")
     * @ORM\JoinTable(
     *     name="Conte_Carte",
     *     joinColumns={@ORM\JoinColumn(name="conte_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="carte_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $carte;

    /**
     * @ORM\ManyToMany(targetEntity="JTIR\PlatformBundle\Entity\Son", inversedBy="conte")
     * @ORM\JoinTable(
     *     name="Conte_Son",
     *     joinColumns={@ORM\JoinColumn(name="conte_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="son_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $son;
}