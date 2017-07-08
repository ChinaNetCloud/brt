<?php

namespace NCbrtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NcBackupEvents
 *
 * @ORM\Table(name="nc_backup_events", indexes={@ORM\Index(name="backupmethod_idx", columns={"backupmethod"}), @ORM\Index(name="idx_date_created", columns={"date_created"}), @ORM\Index(name="id_success", columns={"id", "success"}), @ORM\Index(name="fk_nc_backup_events_srvrs_servers_idx", columns={"srvrs_servers_id"}), @ORM\Index(name="date_create_d_server_name", columns={"date_created"})})
 * @ORM\Entity
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
     * @ORM\Column(name="success", type="string", length=10, nullable=true)
     */
    private $success;

    /**
     * @var string
     *
     * @ORM\Column(name="backupsize", type="string", length=255, nullable=true)
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
     * @ORM\ManyToOne(targetEntity="SrvrsServers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="srvrs_servers_id", referencedColumnName="id")
     * })
     */
    private $srvrsServers;


}

