<?php

namespace NCbrtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrvrsServersCstm
 *
 * @ORM\Table(name="srvrs_servers_cstm")
 * @ORM\Entity
 */
class SrvrsServersCstm
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_c", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;

    /**
     * @var string
     *
     * @ORM\Column(name="device_partnumber_c", type="string", length=25, nullable=true)
     */
    private $devicePartnumberC;

    /**
     * @var string
     *
     * @ORM\Column(name="serial_num_c", type="string", length=50, nullable=true)
     */
    private $serialNumC;

    /**
     * @var string
     *
     * @ORM\Column(name="device_dev_test_prod_c", type="string", length=100, nullable=false)
     */
    private $deviceDevTestProdC;

    /**
     * @var string
     *
     * @ORM\Column(name="status_active_c", type="string", length=100, nullable=false)
     */
    private $statusActiveC = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="active_c", type="boolean", nullable=true)
     */
    private $activeC = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="purpose_c", type="text", length=65535, nullable=true)
     */
    private $purposeC;

    /**
     * @var boolean
     *
     * @ORM\Column(name="monitored_c", type="boolean", nullable=true)
     */
    private $monitoredC = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="backuped_c", type="boolean", nullable=true)
     */
    private $backupedC = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="primary_ip_port_c", type="string", length=25, nullable=true)
     */
    private $primaryIpPortC;

    /**
     * @var string
     *
     * @ORM\Column(name="seconary_ssh_port_c", type="string", length=25, nullable=true)
     */
    private $seconarySshPortC;

    /**
     * @var integer
     *
     * @ORM\Column(name="secondary_ssh_port_c", type="integer", nullable=true)
     */
    private $secondarySshPortC;

    /**
     * @var integer
     *
     * @ORM\Column(name="public_ssh_port_c", type="integer", nullable=true)
     */
    private $publicSshPortC;

    /**
     * @var string
     *
     * @ORM\Column(name="nc_dns_name_c", type="string", length=32, nullable=true)
     */
    private $ncDnsNameC = '';

    /**
     * @var string
     *
     * @ORM\Column(name="public_dns_name_c", type="string", length=32, nullable=true)
     */
    private $publicDnsNameC;

    /**
     * @var string
     *
     * @ORM\Column(name="drac_private_ip_c", type="string", length=25, nullable=true)
     */
    private $dracPrivateIpC;

    /**
     * @var string
     *
     * @ORM\Column(name="drac_private_port_c", type="string", length=25, nullable=true)
     */
    private $dracPrivatePortC;

    /**
     * @var string
     *
     * @ORM\Column(name="drac_ip_c", type="string", length=25, nullable=true)
     */
    private $dracIpC;

    /**
     * @var string
     *
     * @ORM\Column(name="drac_port_c", type="string", length=25, nullable=true)
     */
    private $dracPortC;

    /**
     * @var string
     *
     * @ORM\Column(name="console_server_c", type="string", length=50, nullable=true)
     */
    private $consoleServerC = '';

    /**
     * @var string
     *
     * @ORM\Column(name="backup_method_c", type="string", length=100, nullable=true)
     */
    private $backupMethodC;

    /**
     * @var string
     *
     * @ORM\Column(name="backup_destination_c", type="string", length=100, nullable=true)
     */
    private $backupDestinationC;

    /**
     * @var string
     *
     * @ORM\Column(name="backup_none_verify_c", type="string", length=50, nullable=true)
     */
    private $backupNoneVerifyC;

    /**
     * @var string
     *
     * @ORM\Column(name="status_not_active_verify_c", type="string", length=50, nullable=true)
     */
    private $statusNotActiveVerifyC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="service_start_date_c", type="date", nullable=true)
     */
    private $serviceStartDateC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="service_end_date_c", type="date", nullable=true)
     */
    private $serviceEndDateC;

    /**
     * @var string
     *
     * @ORM\Column(name="service_level_c", type="string", length=100, nullable=true)
     */
    private $serviceLevelC;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_dns_c", type="string", length=25, nullable=true)
     */
    private $primaryDnsC;

    /**
     * @var string
     *
     * @ORM\Column(name="secondary_dns_c", type="string", length=25, nullable=true)
     */
    private $secondaryDnsC;

    /**
     * @var string
     *
     * @ORM\Column(name="drac_type_c", type="string", length=100, nullable=true)
     */
    private $dracTypeC = 'NONE';

    /**
     * @var string
     *
     * @ORM\Column(name="ssh_ip_c", type="string", length=35, nullable=true)
     */
    private $sshIpC;

    /**
     * @var string
     *
     * @ORM\Column(name="ssh_port_c", type="string", length=25, nullable=true)
     */
    private $sshPortC;

    /**
     * @var string
     *
     * @ORM\Column(name="ssh_jump_ip_c", type="string", length=35, nullable=true)
     */
    private $sshJumpIpC;

    /**
     * @var string
     *
     * @ORM\Column(name="ssh_jump_port_c", type="string", length=25, nullable=true)
     */
    private $sshJumpPortC;

    /**
     * @var string
     *
     * @ORM\Column(name="syslog_public_source_ip_c", type="string", length=35, nullable=true)
     */
    private $syslogPublicSourceIpC;

    /**
     * @var string
     *
     * @ORM\Column(name="drac_public_console_port_c", type="string", length=25, nullable=true)
     */
    private $dracPublicConsolePortC;

    /**
     * @var string
     *
     * @ORM\Column(name="drac_private_web_port_c", type="string", length=25, nullable=true)
     */
    private $dracPrivateWebPortC;

    /**
     * @var string
     *
     * @ORM\Column(name="drac_private_console_port_c", type="string", length=25, nullable=true)
     */
    private $dracPrivateConsolePortC;

    /**
     * @var string
     *
     * @ORM\Column(name="zabbix_agent_ip_c", type="string", length=35, nullable=true)
     */
    private $zabbixAgentIpC;

    /**
     * @var string
     *
     * @ORM\Column(name="zabbix_agent_port_c", type="string", length=25, nullable=true)
     */
    private $zabbixAgentPortC;

    /**
     * @var string
     *
     * @ORM\Column(name="ssh_ldap_port_c", type="string", length=35, nullable=true)
     */
    private $sshLdapPortC;

    /**
     * @var string
     *
     * @ORM\Column(name="sys_no_c", type="string", length=25, nullable=true)
     */
    private $sysNoC;


}

