-- MySQL Script generated by MySQL Workbench
-- Thu Jul  6 15:52:37 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema brt
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `brt` ;

-- -----------------------------------------------------
-- Schema brt
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `brt` DEFAULT CHARACTER SET utf8 ;
USE `brt` ;

-- -----------------------------------------------------
-- Table `brt`.`srvrs_servers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `brt`.`srvrs_servers` ;

CREATE TABLE IF NOT EXISTS `brt`.`srvrs_servers` (
  `id` CHAR(36) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `date_entered` DATETIME NULL DEFAULT NULL,
  `date_modified` DATETIME NULL DEFAULT NULL,
  `modified_user_id` CHAR(36) NULL DEFAULT NULL,
  `created_by` CHAR(36) NULL DEFAULT NULL,
  `description` TEXT NULL DEFAULT NULL,
  `deleted` TINYINT(1) NULL DEFAULT '0',
  `assigned_user_id` CHAR(36) NULL DEFAULT NULL,
  `idc_code` VARCHAR(15) NULL DEFAULT NULL,
  `idc_loc_detail` VARCHAR(50) NULL DEFAULT NULL,
  `device_type` VARCHAR(100) NOT NULL DEFAULT 'Server',
  `virtual_yn` TINYINT(1) NULL DEFAULT '1',
  `device_host_name` VARCHAR(255) NOT NULL,
  `device_common_name` VARCHAR(255) NOT NULL,
  `device_purpose` VARCHAR(255) NULL DEFAULT NULL,
  `storage_config` VARCHAR(255) NULL DEFAULT NULL,
  `device_os` VARCHAR(100) NOT NULL DEFAULT 'Linux',
  `os_version` VARCHAR(25) NOT NULL,
  `os_vendor` VARCHAR(100) NOT NULL DEFAULT 'Other',
  `primary_ip` VARCHAR(25) NOT NULL DEFAULT '0.0.0.0',
  `secondary_ip` VARCHAR(25) NULL DEFAULT NULL,
  `notes` VARCHAR(255) NULL DEFAULT NULL,
  `date_installed` DATE NOT NULL,
  `device_owner` VARCHAR(100) NOT NULL DEFAULT 'ChinaNetCloud',
  `asset_tag` VARCHAR(25) NULL DEFAULT NULL,
  `customer_device_name` VARCHAR(50) NULL DEFAULT NULL,
  `idc_device_name` VARCHAR(50) NULL DEFAULT NULL,
  `status_active` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `brt`.`nc_backup_events`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `brt`.`nc_backup_events` ;

CREATE TABLE IF NOT EXISTS `brt`.`nc_backup_events` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `servername` VARCHAR(255) NOT NULL,
  `backupmethod` VARCHAR(255) NULL DEFAULT NULL,
  `success` VARCHAR(10) NULL DEFAULT NULL,
  `backupsize` VARCHAR(255) NULL DEFAULT NULL,
  `log` LONGTEXT NULL DEFAULT NULL,
  `error` LONGTEXT NULL DEFAULT NULL,
  `date_created` DATETIME NULL DEFAULT NULL,
  `client_name` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Client NAME before type',
  `dir` MEDIUMTEXT NULL DEFAULT NULL,
  `backup_type` VARCHAR(45) NULL DEFAULT NULL,
  `srvrs_servers_id` CHAR(36) NULL,
  PRIMARY KEY (`id`),
  INDEX `servername_idx` (`servername` ASC),
  INDEX `backupmethod_idx` (`backupmethod` ASC),
  INDEX `idx_date_created` (`date_created` ASC),
  INDEX `date_create_d_server_name` USING BTREE (`date_created` ASC, `servername` ASC),
  INDEX `id_success` (`id` ASC, `success` ASC),
  INDEX `fk_nc_backup_events_srvrs_servers_idx` (`srvrs_servers_id` ASC),
  CONSTRAINT `fk_nc_backup_events_srvrs_servers`
    FOREIGN KEY (`srvrs_servers_id`)
    REFERENCES `brt`.`srvrs_servers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 711759
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `brt`.`srvrs_servers_cstm`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `brt`.`srvrs_servers_cstm` ;

CREATE TABLE IF NOT EXISTS `brt`.`srvrs_servers_cstm` (
  `id_c` CHAR(36) NOT NULL,
  `device_partnumber_c` VARCHAR(25) NULL DEFAULT NULL,
  `serial_num_c` VARCHAR(50) NULL DEFAULT NULL,
  `device_dev_test_prod_c` VARCHAR(100) NOT NULL,
  `status_active_c` VARCHAR(100) NOT NULL DEFAULT '',
  `active_c` TINYINT(1) NULL DEFAULT '0',
  `purpose_c` TEXT NULL DEFAULT NULL,
  `monitored_c` TINYINT(1) NULL DEFAULT '0',
  `backuped_c` TINYINT(1) NULL DEFAULT '0',
  `primary_ip_port_c` VARCHAR(25) NULL DEFAULT NULL,
  `seconary_ssh_port_c` VARCHAR(25) NULL DEFAULT NULL,
  `secondary_ssh_port_c` INT(5) NULL DEFAULT NULL,
  `public_ssh_port_c` INT(5) NULL DEFAULT NULL,
  `nc_dns_name_c` VARCHAR(32) NULL DEFAULT '',
  `public_dns_name_c` VARCHAR(32) NULL DEFAULT NULL,
  `drac_private_ip_c` VARCHAR(25) NULL DEFAULT NULL,
  `drac_private_port_c` VARCHAR(25) NULL DEFAULT NULL,
  `drac_ip_c` VARCHAR(25) NULL DEFAULT NULL,
  `drac_port_c` VARCHAR(25) NULL DEFAULT NULL,
  `console_server_c` VARCHAR(50) NULL DEFAULT '',
  `backup_method_c` VARCHAR(100) NULL DEFAULT NULL,
  `backup_destination_c` VARCHAR(100) NULL DEFAULT NULL,
  `backup_none_verify_c` VARCHAR(50) NULL DEFAULT NULL,
  `status_not_active_verify_c` VARCHAR(50) NULL DEFAULT NULL,
  `service_start_date_c` DATE NULL DEFAULT NULL,
  `service_end_date_c` DATE NULL DEFAULT NULL,
  `service_level_c` VARCHAR(100) NULL DEFAULT NULL,
  `primary_dns_c` VARCHAR(25) NULL DEFAULT NULL,
  `secondary_dns_c` VARCHAR(25) NULL DEFAULT NULL,
  `drac_type_c` VARCHAR(100) NULL DEFAULT 'NONE',
  `ssh_ip_c` VARCHAR(35) NULL DEFAULT NULL,
  `ssh_port_c` VARCHAR(25) NULL DEFAULT NULL,
  `ssh_jump_ip_c` VARCHAR(35) NULL DEFAULT NULL,
  `ssh_jump_port_c` VARCHAR(25) NULL DEFAULT NULL,
  `syslog_public_source_ip_c` VARCHAR(35) NULL DEFAULT NULL,
  `drac_public_console_port_c` VARCHAR(25) NULL DEFAULT NULL,
  `drac_private_web_port_c` VARCHAR(25) NULL DEFAULT NULL,
  `drac_private_console_port_c` VARCHAR(25) NULL DEFAULT NULL,
  `zabbix_agent_ip_c` VARCHAR(35) NULL DEFAULT NULL,
  `zabbix_agent_port_c` VARCHAR(25) NULL DEFAULT NULL,
  `ssh_ldap_port_c` VARCHAR(35) NULL DEFAULT NULL,
  `sys_no_c` VARCHAR(25) NULL DEFAULT NULL,
  PRIMARY KEY (`id_c`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
