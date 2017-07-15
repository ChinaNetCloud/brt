<?php
// Database config
require_once './sync_config.php';
// Count Devices
/* Removed from DB:
        id,
        deleted,
        backuped_c,
        status_active_c  
 */
$sqlGetTotalDevices = "SELECT 
        name as host
    FROM 
        srvrs_servers JOIN srvrs_servers_cstm ON srvrs_servers_cstm.id_c = srvrs_servers.id
    WHERE
        deleted=:deleted AND backuped_c =:backuped_c
        AND status_active_c =:status_active_c;";
// limit 2;
/* Execute query */
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$connectionChain = 'mysql:host='.$database_sugar_host
        .';port='.$database_sugar_port.';dbname='
        .$database_sugar_name_db.';charset=utf8mb4';

$db_sugar = new PDO($connectionChain
        , $database_sugar_user
        , $database_sugar_password);
// , $opt
$stmt_sugar = $db_sugar->prepare($sqlGetTotalDevices);
$stmt_sugar->execute(array(':deleted' => '0'
    , ':backuped_c' => 1
    , ':status_active_c' => 'Active'));
//PDO::FETCH_ASSOC
$rowsSugar = $stmt_sugar->fetchAll(PDO::FETCH_COLUMN, 0);
//var_dump($rows_sugar);

/* Zabbix production groups */
//removed from DB: , status
$sqlGetTotalZabbixProd = "SELECT host
    FROM hosts h
    JOIN hosts_groups hg ON h.hostid = hg.hostid
    WHERE (hg.groupid =:groupid24x7 OR hg.groupid =:groupid9x5)
    AND h.status =:status;";
// limit 5
$db_zabbix = new PDO('mysql:host='.$database_zabbix_host
        .';port='.$database_zabbix_port.';dbname='
        .$database_zabbix_name_db.';charset=utf8mb4'
        , $database_zabbix_user
        , $database_zabbix_password);
$stmt_zabbix = $db_zabbix->prepare($sqlGetTotalZabbixProd);
$stmt_zabbix->execute(array(':status' => '0'
    , ':groupid24x7' => 23
    , ':groupid9x5' => 46));
$rowsZabbix = $stmt_zabbix->fetchAll(PDO::FETCH_COLUMN, 0);
//PDO::FETCH_ASSOC
//var_dump($rows_zabbix);
function compareHostNameZabbix($a, $b)
{
  return strnatcmp($a['host'], $b['host']);
}

print_r($rowsSugar);
print_r($rowsZabbix);

$resultInsertsect = array_intersect($rowsZabbix, $rowsSugar);
