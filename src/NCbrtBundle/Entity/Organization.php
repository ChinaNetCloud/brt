<?php

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

namespace NCbrtBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Description of Organization
 *
 * @author cncuser
 */
/**
 * Organization
 *
 * @ORM\Table(name="organization")
 * @ORM\Entity
 */
class Organization {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\ManyToOne(targetEntity="Organization", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $id;
    
    /**
     * @var string
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;
    
    /**
     * @ORM\OneToMany(targetEntity="Organization", mappedBy="id")
     */
    private $children;
    
    /**
     * @ORM\OneToMany(targetEntity="SrvrsServers", mappedBy="organization")
     */
    private $srvrsServers;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->srvrsServers = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Organization
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Add srvrsServer
     *
     * @param \NCbrtBundle\Entity\SrvrsServers $srvrsServer
     *
     * @return Organization
     */
    public function addSrvrsServer(\NCbrtBundle\Entity\SrvrsServers $srvrsServer)
    {
        $this->SrvrsServers[] = $srvrsServer;

        return $this;
    }

    /**
     * Remove srvrsServer
     *
     * @param \NCbrtBundle\Entity\SrvrsServers $srvrsServer
     */
    public function removeSrvrsServer(\NCbrtBundle\Entity\SrvrsServers $srvrsServer)
    {
        $this->SrvrsServers->removeElement($srvrsServer);
    }

    /**
     * Get srvrsServers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSrvrsServers()
    {
        return $this->SrvrsServers;
    }
}
