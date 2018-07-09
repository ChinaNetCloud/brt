<?php

namespace NCbrtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * SrvrsServers
 *
 * @ORM\Table(name="srvrs_servers")
 * @ORM\Entity
 */
class SrvrsServers
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;


    /**
     * @var string
     *
     * @ORM\Column(name="status_active", type="string", length=45, nullable=true)
     */
    private $statusActive;
    
    /**
     * @var string
     *
     * @ORM\Column(name="frequency", type="integer", nullable=true)
     */    
    private $frequency;

    /**
     * One SrvrsServers has Many NcBackupEvents.
     * @ORM\OneToMany(targetEntity="NcBackupEvents", mappedBy="srvrsServers")
     */
    private $ncBackupEvents;
    
    /**
     * @ManyToOne(targetEntity="Organization", inversedBy="srvrsServers")
     * @JoinColumn(name="organization_id", referencedColumnName="id")
     */
    private $organization;

    public function __construct() {
        $this->ncBackupEvents = new ArrayCollection();
    }    
    
    /**
     * Get frequency
     * 
     * @return integer
     */
    public function getFrequency()
    {
        return $this->frequency;
    }
     /**
     * Set frequency
     *
     * @param string $frequency
     *
     * @return SrvrsServers
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        
        return $this;
    }
    
    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set name
     *
     * @param string $id
     *
     * @return SrvrsServers
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * Set name
     *
     * @param string $name
     *
     * @return SrvrsServers
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
     * Set description
     *
     * @param string $description
     *
     * @return SrvrsServers
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
     * Set statusActive
     *
     * @param string $statusActive
     *
     * @return SrvrsServers
     */
    public function setStatusActive($statusActive)
    {
        $this->statusActive = $statusActive;

        return $this;
    }

    /**
     * Get statusActive
     *
     * @return string
     */
    public function getStatusActive()
    {
        return $this->statusActive;
    }

    /**
     * Add ncBackupEvent
     *
     * @param \NCbrtBundle\Entity\NcBackupEvents $ncBackupEvent
     *
     * @return SrvrsServers
     */
    public function addNcBackupEvent(\NCbrtBundle\Entity\NcBackupEvents $ncBackupEvent)
    {
        $this->ncBackupEvents[] = $ncBackupEvent;

        return $this;
    }

    /**
     * Remove ncBackupEvent
     *
     * @param \NCbrtBundle\Entity\NcBackupEvents $ncBackupEvent
     */
    public function removeNcBackupEvent(\NCbrtBundle\Entity\NcBackupEvents $ncBackupEvent)
    {
        $this->ncBackupEvents->removeElement($ncBackupEvent);
    }

    /**
     * Get ncBackupEvents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNcBackupEvents()
    {
        return $this->ncBackupEvents;
    }

    /**
     * Set organization
     *
     * @param \NCbrtBundle\Entity\Organization $organization
     *
     * @return SrvrsServers
     */
    public function setOrganization(\NCbrtBundle\Entity\Organization $organization = null)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return \NCbrtBundle\Entity\Organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }
}
