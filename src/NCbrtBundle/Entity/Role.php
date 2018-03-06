<?php

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

namespace NCbrtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Roles
 *
 * @author cncuser
 */
/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role {
    /**
     * @var string
     * 
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */    
    private $name;
    
    /**
     * @var string Description of the role
     * 
     * @ORM\Column(name="description", type="string", length=30, nullable=true)
     */
    private $description;


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
     * @return Role
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
}
