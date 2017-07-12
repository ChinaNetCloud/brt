<?php

namespace NCbrtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
}
