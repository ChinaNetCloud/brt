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
     * @var \DateTime
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=true)
     */
    private $dateEntered;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var string
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true)
     */
    private $modifiedUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true)
     */
    private $assignedUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="idc_code", type="string", length=15, nullable=true)
     */
    private $idcCode;

    /**
     * @var string
     *
     * @ORM\Column(name="idc_loc_detail", type="string", length=50, nullable=true)
     */
    private $idcLocDetail;

    /**
     * @var string
     *
     * @ORM\Column(name="device_type", type="string", length=100, nullable=false)
     */
    private $deviceType = 'Server';

    /**
     * @var boolean
     *
     * @ORM\Column(name="virtual_yn", type="boolean", nullable=true)
     */
    private $virtualYn = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="device_host_name", type="string", length=255, nullable=false)
     */
    private $deviceHostName;

    /**
     * @var string
     *
     * @ORM\Column(name="device_common_name", type="string", length=255, nullable=false)
     */
    private $deviceCommonName;

    /**
     * @var string
     *
     * @ORM\Column(name="device_purpose", type="string", length=255, nullable=true)
     */
    private $devicePurpose;

    /**
     * @var string
     *
     * @ORM\Column(name="storage_config", type="string", length=255, nullable=true)
     */
    private $storageConfig;

    /**
     * @var string
     *
     * @ORM\Column(name="device_os", type="string", length=100, nullable=false)
     */
    private $deviceOs = 'Linux';

    /**
     * @var string
     *
     * @ORM\Column(name="os_version", type="string", length=25, nullable=false)
     */
    private $osVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="os_vendor", type="string", length=100, nullable=false)
     */
    private $osVendor = 'Other';

    /**
     * @var string
     *
     * @ORM\Column(name="primary_ip", type="string", length=25, nullable=false)
     */
    private $primaryIp = '0.0.0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="secondary_ip", type="string", length=25, nullable=true)
     */
    private $secondaryIp;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255, nullable=true)
     */
    private $notes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_installed", type="date", nullable=false)
     */
    private $dateInstalled;

    /**
     * @var string
     *
     * @ORM\Column(name="device_owner", type="string", length=100, nullable=false)
     */
    private $deviceOwner = 'ChinaNetCloud';

    /**
     * @var string
     *
     * @ORM\Column(name="asset_tag", type="string", length=25, nullable=true)
     */
    private $assetTag;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_device_name", type="string", length=50, nullable=true)
     */
    private $customerDeviceName;

    /**
     * @var string
     *
     * @ORM\Column(name="idc_device_name", type="string", length=50, nullable=true)
     */
    private $idcDeviceName;

    /**
     * @var string
     *
     * @ORM\Column(name="status_active", type="string", length=45, nullable=true)
     */
    private $statusActive;
}

