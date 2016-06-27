<?php

namespace QT\SystemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Noeud
 *
 * @ORM\Table(name="noeud")
 * @ORM\Entity(repositoryClass="QT\SystemeBundle\Repository\NoeudRepository")
 */
class Noeud
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
     * @ORM\Column(name="ip_admin", type="string", length=20, nullable=true)
     */
    private $ipAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_data", type="string", length=20, nullable=true)
     */
    private $ipData;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_appli", type="string", length=20, nullable=true)
     */
    private $ipAppli;

    /**
     * @var string
     *
     * @ORM\Column(name="mac", type="string", length=20, nullable=true)
     */
    private $mac;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_cpu", type="integer", nullable=true)
     */
    private $nbCpu;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_ram", type="integer", nullable=true)
     */
    private $nbRam;


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
     * @return Noeud
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
     * @return Noeud
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
     * Set ipAdmin
     *
     * @param string $ipAdmin
     *
     * @return Noeud
     */
    public function setIpAdmin($ipAdmin)
    {
        $this->ipAdmin = $ipAdmin;

        return $this;
    }

    /**
     * Get ipAdmin
     *
     * @return string
     */
    public function getIpAdmin()
    {
        return $this->ipAdmin;
    }

    /**
     * Set ipData
     *
     * @param string $ipData
     *
     * @return Noeud
     */
    public function setIpData($ipData)
    {
        $this->ipData = $ipData;

        return $this;
    }

    /**
     * Get ipData
     *
     * @return string
     */
    public function getIpData()
    {
        return $this->ipData;
    }

    /**
     * Set ipAppli
     *
     * @param string $ipAppli
     *
     * @return Noeud
     */
    public function setIpAppli($ipAppli)
    {
        $this->ipAppli = $ipAppli;

        return $this;
    }

    /**
     * Get ipAppli
     *
     * @return string
     */
    public function getIpAppli()
    {
        return $this->ipAppli;
    }

    /**
     * Set mac
     *
     * @param string $mac
     *
     * @return Noeud
     */
    public function setMac($mac)
    {
        $this->mac = $mac;

        return $this;
    }

    /**
     * Get mac
     *
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * Set nbCpu
     *
     * @param integer $nbCpu
     *
     * @return Noeud
     */
    public function setNbCpu($nbCpu)
    {
        $this->nbCpu = $nbCpu;

        return $this;
    }

    /**
     * Get nbCpu
     *
     * @return int
     */
    public function getNbCpu()
    {
        return $this->nbCpu;
    }

    /**
     * Set nbRam
     *
     * @param integer $nbRam
     *
     * @return Noeud
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
}
