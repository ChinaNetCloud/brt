<?php

namespace NCbrtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NcBackupEvents
 *
 * @ORM\Table(name="nc_backup_events", indexes={@ORM\Index(name="backupmethod_idx", columns={"backupmethod"}), @ORM\Index(name="idx_date_created", columns={"date_created"}), @ORM\Index(name="id_success", columns={"id", "success"}), @ORM\Index(name="fk_nc_backup_events_srvrs_servers_idx", columns={"srvrs_servers_id"}), @ORM\Index(name="date_create_d_server_name", columns={"date_created"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="NCbrtBundle\Repository\NcBackupEventsRepository")
 */

class NcBackupEvents
{
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
     *
     * @ORM\Column(name="backupmethod", type="string", length=255, nullable=true)
     */
    private $backupmethod;

    /**
     * @var string
     *
     * @ORM\Column(name="success", type="string", length=20, nullable=true)
     */
    private $success;

    /**
     * @var string
     *
     * @ORM\Column(name="backupsize", type="integer", length=45, nullable=true)
     */
    private $backupsize;

    /**
     * @var string
     *
     * @ORM\Column(name="log", type="text", nullable=true)
     */
    private $log;

    /**
     * @var string
     *
     * @ORM\Column(name="error", type="text", nullable=true)
     */
    private $error;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="client_name", type="string", length=255, nullable=true)
     */
    private $clientName;

    /**
     * @var string
     *
     * @ORM\Column(name="dir", type="text", length=16777215, nullable=true)
     */
    private $dir;

    /**
     * @var string
     *
     * @ORM\Column(name="backup_type", type="string", length=45, nullable=true)
     */
    private $backupType;

    /**
     * @var \SrvrsServers
     *
     * @ORM\ManyToOne(targetEntity="SrvrsServers", inversedBy="ncBackupEvents", cascade={"persist", "remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="srvrs_servers_id", referencedColumnName="id")
     * })
     */
    private $srvrsServers;

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
     * Set backupmethod
     *
     * @param string $backupmethod
     *
     * @return NcBackupEvents
     */
    public function setBackupmethod($backupmethod)
    {
        $this->backupmethod = $backupmethod;

        return $this;
    }

    /**
     * Get backupmethod
     *
     * @return string
     */
    public function getBackupmethod()
    {
        return $this->backupmethod;
    }

    /**
     * Set success
     *
     * @param string $success
     *
     * @return NcBackupEvents
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * Get success
     *
     * @return string
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Set backupsize
     *
     * @param string $backupsize
     *
     * @return NcBackupEvents
     */
    public function setBackupsize($backupsize)
    {
        $this->backupsize = $backupsize;

        return $this;
    }

    /**
     * Get backupsize
     *
     * @return string
     */
    public function getBackupsize()
    {
        return $this->backupsize;
    }

    /**
     * Set log
     *
     * @param string $log
     *
     * @return NcBackupEvents
     */
    public function setLog($log)
    {
        $this->log = $log;

        return $this;
    }

    /**
     * Get log
     *
     * @return string
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Set error
     *
     * @param string $error
     *
     * @return NcBackupEvents
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get error
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return NcBackupEvents
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set clientName
     *
     * @param string $clientName
     *
     * @return NcBackupEvents
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * Get clientName
     *
     * @return string
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * Set dir
     *
     * @param string $dir
     *
     * @return NcBackupEvents
     */
    public function setDir($dir)
    {
        $this->dir = $dir;

        return $this;
    }

    /**
     * Get dir
     *
     * @return string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * Set backupType
     *
     * @param string $backupType
     *
     * @return NcBackupEvents
     */
    public function setBackupType($backupType)
    {
        $this->backupType = $backupType;

        return $this;
    }

    /**
     * Get backupType
     *
     * @return string
     */
    public function getBackupType()
    {
        return $this->backupType;
    }

    /**
     * Set srvrsServers
     *
     * @param \NCbrtBundle\Entity\SrvrsServers $srvrsServers
     *
     * @return NcBackupEvents
     */
    public function setSrvrsServers(\NCbrtBundle\Entity\SrvrsServers $srvrsServers = null)
    {
        $this->srvrsServers = $srvrsServers;

        return $this;
    }

    /**
     * Get srvrsServers
     *
     * @return \NCbrtBundle\Entity\SrvrsServers
     */
    public function getSrvrsServers()
    {
        return $this->srvrsServers;
    }
}
