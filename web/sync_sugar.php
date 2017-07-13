<?php
// Database config
require_once './sync_config.php';
// Count Devices
/*  */
$sqlCountTotalDevices = "SELECT 
        COUNT(8) 
        FROM 
            srvrs_servers JOIN srvrs_servers_cstm ON srvrs_servers_cstm.id_c = srvrs_servers.id
        WHERE
            deleted=:deleted AND backuped_c =:backuped_c
            AND status_active_c =:status_active_c;";
/* Execute query */
$db = new PDO('mysql:host='.$database_sugar_host
        .';port:'.$database_sugar_port.';dbname='
        .$database_sugar_name_db.';charset=utf8mb4'
        , $database_sugar_user
        , $database_sugar_password);
$stmt = $db->prepare($sqlCountTotalDevices);
$stmt->execute(array(':deleted' => '0'
    , ':backuped_c' => 1
    , ':status_active_c' => 'Active'));
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* Zabbix production groups */
/*

SELECT host, status
FROM hosts h
JOIN hosts_groups hg ON h.hostid = hg.hostid
WHERE (hg.groupid = 23 OR hg.groupid = 46)
AND h.status = 0;

*/

/* Get zerver names inj barches from sugarcrm DB */
$sqlSpecificbatch = "SELECT 
            id,
            name,
            deleted,
            backuped_c,
            status_active_c
        FROM 
            srvrs_servers JOIN srvrs_servers_cstm ON srvrs_servers_cstm.id_c = srvrs_servers.id
        WHERE
            deleted = 0
            AND backuped_c = 1
            AND status_active_c = 'Active'
        LIMIT 8;";

