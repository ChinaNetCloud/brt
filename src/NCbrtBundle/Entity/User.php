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
/**
 * Description of User
 *
 * @author cncuser
 */
/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User {
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
     * @ORM\Column(name="email", type="string")
     */
    private $email;    
    
    /**
     * @var string
     * @ORM\Column(name="nickname", type="string", nullable=true)
     */
    private $nickname;
     
    /**
     * @ManyToOne(targetEntity="Role", cascade={"persist", "remove"})
     * @JoinColumn(name="role_name_id", referencedColumnName="name")
     */
    private $role;

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
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return User
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set role
     *
     * @param \NCbrtBundle\Entity\Role $role
     *
     * @return User
     */
    public function setRole(\NCbrtBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \NCbrtBundle\Entity\Role
     */
    public function getRole()
    {
        return $this->role;
    }
}
