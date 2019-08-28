<?php
    $connection = ssh2_connect('140.82.113.3', 22);

    if (ssh2_auth_agent($connection, 'root@192.168.42.95')) {
    echo "Authentication Successful!\n";
    } else {
    die('Authentication Failed...');
    }
?>