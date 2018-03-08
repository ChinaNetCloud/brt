<?php

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

namespace NCbrtBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;

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
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Organization", inversedBy="children")
     * @JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;
    /**
     * @OneToMany(targetEntity="Organization", mappedBy="parent")
     */
    private $children;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;
    
    /**
     * @OneToMany(targetEntity="SrvrsServers", mappedBy="Organization")
     */
    private $SrvrsServers;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->SrvrsServers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add children
     *
     * @param \NCbrtBundle\Entity\Organization $children
     *
     * @return Organization
     */
    public function addChild(\NCbrtBundle\Entity\Organization $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \NCbrtBundle\Entity\Organization $children
     */
    public function removeChild(\NCbrtBundle\Entity\Organization $children)
    {
        $this->children->removeElement($children);
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
