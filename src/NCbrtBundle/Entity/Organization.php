<?php

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

namespace NCbrtBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

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
     * @var string
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;
    
    /**
     * @ORM\ManyToMany(targetEntity="NCbrtBundle\Entity\User", mappedBy="organization")
     */
    private $users;
    
    /**
     * @ORM\OneToMany(targetEntity="SrvrsServers", mappedBy="organization")
     */
    private $srvrsServers;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->SrvrsServers = new ArrayCollection();
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

	/**
	 * @return mixed
	 */
	public function getUsers()
	{
		return $this->users;
	}

	/**
	 * @param mixed $users
	 * @return Organization
	 */
	public function setUsers($users)
	{
		$this->users = $users;
		return $this;
	}
}
