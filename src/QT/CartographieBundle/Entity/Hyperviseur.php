<?php

namespace QT\CartographieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hyperviseur
 *
 * @ORM\Table(name="hyperviseur")
 * @ORM\Entity(repositoryClass="QT\CartographieBundle\Repository\HyperviseurRepository")
 */
class Hyperviseur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ipPublique", type="string", length=30, unique=true)
     */
    private $ipPublique;

    /**
     * @var int
     *
     * @ORM\Column(name="nbRam", type="integer", nullable=true)
     */
    private $nbRam;
    
    /**
     * @var int
     *
     * @ORM\Column(name="nbDisque", type="integer", nullable=true)
     */
    private $nbDisque;
    
    /**
    * @ORM\OneToMany(targetEntity="QT\CartographieBundle\Entity\Noeud", mappedBy="hyperviseur")
    */
    private $noeuds;
    
    /**
     * @var string
     *
     * @ORM\Column(name="os", type="string", length=50, nullable=true)
     */
    private $os;
    


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Hyperviseur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Hyperviseur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set ipPublique
     *
     * @param string $ipPublique
     *
     * @return Hyperviseur
     */
    public function setIpPublique($ipPublique)
    {
        $this->ipPublique = $ipPublique;

        return $this;
    }

    /**
     * Get ipPublique
     *
     * @return string
     */
    public function getIpPublique()
    {
        return $this->ipPublique;
    }

    /**
     * Set nbRam
     *
     * @param integer $nbRam
     *
     * @return Hyperviseur
     */
    public function setNbRam($nbRam)
    {
        $this->nbRam = $nbRam;

        return $this;
    }

    /**
     * Get nbRam
     *
     * @return int
     */
    public function getNbRam()
    {
        return $this->nbRam;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->noeuds = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add noeud
     *
     * @param \QT\CartographieBundle\Entity\Noeud $noeud
     *
     * @return Hyperviseur
     */
    public function addNoeud(\QT\CartographieBundle\Entity\Noeud $noeud)
    {
        $this->noeuds[] = $noeud;

        return $this;
    }

    /**
     * Remove noeud
     *
     * @param \QT\CartographieBundle\Entity\Noeud $noeud
     */
    public function removeNoeud(\QT\CartographieBundle\Entity\Noeud $noeud)
    {
        $this->noeuds->removeElement($noeud);
    }

    /**
     * Get noeuds
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNoeuds()
    {
        return $this->noeuds;
    }
    
    /**
     * QT Get occupation mémoire RAM
     */
    public function getOccupationRam()
    {
        $occupationRam = 0;
        foreach($this->noeuds as $noeud){
            $occupationRam += $noeud->getNbRam();
        }
        return $occupationRam;   
    }

    /**
     * Set nbDisque
     *
     * @param integer $nbDisque
     *
     * @return Hyperviseur
     */
    public function setNbDisque($nbDisque)
    {
        $this->nbDisque = $nbDisque;

        return $this;
    }

    /**
     * Get nbDisque
     *
     * @return integer
     */
    public function getNbDisque()
    {
        return $this->nbDisque;
    }
    
    /**
     * QT Get occupation du dd
     */
    public function getOccupationDisque()
    {
        $occupationDisque = 0;
        foreach($this->noeuds as $noeud){
            $occupationDisque += $noeud->getNbDisque();
        }
        return $occupationDisque;   
    }

    /**
     * Set os
     *
     * @param string $os
     *
     * @return Hyperviseur
     */
    public function setOs($os)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }
}
