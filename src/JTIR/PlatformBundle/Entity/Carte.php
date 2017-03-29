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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->conte = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Carte
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set categorie
     *
     * @param \JTIR\PlatformBundle\Entity\Categorie $categorie
     *
     * @return Carte
     */
    public function setCategorie(\JTIR\PlatformBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \JTIR\PlatformBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add conte
     *
     * @param \JTIR\PlatformBundle\Entity\Conte $conte
     *
     * @return Carte
     */
    public function addConte(\JTIR\PlatformBundle\Entity\Conte $conte)
    {
        $this->conte[] = $conte;

        return $this;
    }

    /**
     * Remove conte
     *
     * @param \JTIR\PlatformBundle\Entity\Conte $conte
     */
    public function removeConte(\JTIR\PlatformBundle\Entity\Conte $conte)
    {
        $this->conte->removeElement($conte);
    }

    /**
     * Get conte
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConte()
    {
        return $this->conte;
    }
}
