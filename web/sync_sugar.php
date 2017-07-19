<?php
// Database config
require_once './sync_config.php';
// Count Devices
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

$stmt_sugar = $db_sugar->prepare($sqlGetTotalDevices);
$stmt_sugar->execute(array(':deleted' => '0'
    , ':backuped_c' => 1
    , ':status_active_c' => 'Active'));
$rowsSugar = $stmt_sugar->fetchAll(PDO::FETCH_COLUMN, 0);
//var_dump($rows_sugar);

/* Zabbix production groups */
$sqlGetTotalZabbixProd = "SELECT host
    FROM hosts h
    JOIN hosts_groups hg ON h.hostid = hg.hostid
    WHERE (hg.groupid =:groupid24x7 OR hg.groupid =:groupid9x5)
    AND h.status =:status;";

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
//print_r($rowsSugar);
//print_r($rowsZabbix);

$resultInsertsectZabbixSugar = array_intersect($rowsZabbix, $rowsSugar);
//print_r($resultInsertsect);

/* Select all active servers */
$sqlGetCurrentBrtSrv = 'SELECT name as host FROM srvrs_servers '
        . 'WHERE status_active =:status_active;';

$connectionChainBrt = 'mysql:host='.$database_brt_host
        .';port='.$database_brt_port.';dbname='
        .$database_brt_name_db.';charset=utf8mb4';
$dbBrt = new PDO($connectionChainBrt
        , $database_brt_user
        , $database_brt_password);
$stmtBrt = $dbBrt->prepare($sqlGetCurrentBrtSrv);
$stmtBrt->execute(array(':status_active' => 1));

$rowsBrt = $stmtBrt->fetchAll(PDO::FETCH_COLUMN, 0);

/* new active servers */
$resultNewServers = array_diff($resultInsertsectZabbixSugar, $rowsBrt);
print_r($resultNewServers);

/* Inser all new servers */
$sqlInsertServer = "INSERT INTO srvrs_servers
    (id, name, description, status_active)
    VALUES(null,:server_new, '', 1);";
foreach ($resultNewServers as $key => $value){
    $stmtBrt = $dbBrt->prepare($sqlInsertServer);
    $stmtBrt->execute(array(':server_new' => $value));
}
/* Update existing servers */
$sqlGetCurrentBrtSrv = 'SELECT name as host FROM srvrs_servers '
        . 'WHERE status_active !=:status_active;';
$stmtBrt = $dbBrt->prepare($sqlGetCurrentBrtSrv);
$stmtBrt->execute(array(':status_active' => 1));
$rowsBrtNotActive = $stmtBrt->fetchAll(PDO::FETCH_COLUMN, 0);
//print_r($rowsBrtNotActive);

$resultUpdateServers = array_intersect($rowsBrtNotActive, $resultInsertsectZabbixSugar);

print_r($resultUpdateServers);

foreach ($resultUpdateServers as $value){
    $sqlUpdateServer = "SET SQL_SAFE_UPDATES=:updates_disable;";
    $stmtBrt = $dbBrt->prepare($sqlUpdateServer);
    $stmtBrt->execute(array(':updates_disable' => 0));
    
    $sqlUpdateServer = "UPDATE srvrs_servers
        SET status_active = :status_active
        WHERE name =:name;";
    $stmtBrt = $dbBrt->prepare($sqlUpdateServer);
    $stmtBrt->execute(array(':status_active' => 1, ':name' => $value));  
    
    $sqlUpdateServer = "SET SQL_SAFE_UPDATES=:updates_enable;";
    $stmtBrt = $dbBrt->prepare($sqlUpdateServer);
    $stmtBrt->execute(array(':updates_enable' => 1)); 
}