<?php
    $ip = '140.82.113.3';
    $user = 'Marioalf2002';
    $pass = '';

    $connection = ssh2_connect('$ip',22);

    ssh2_auth_password($connection,$user,$pass);
    $stream = ssh2_exec($connection, 'ls -al');

    stream_set_blocking($stream, true);

    $output = stream_get_contents($stream);

    echo $output;
?>