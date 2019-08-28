<?php
    if (!function_exists("ssh2_connect"))
    die("function ssh2_connect doesn't exist");

    if(!($con = ssh2_connect("github.com", 22))){
        echo "fail: unable to establish connection\n";
    } else {
        // try to authenticate with username root, password secretpassword
        if(!ssh2_auth_password($con, "root@192.168.42.129", "")) {
            echo "fail: unable to authenticate\n";
        } else {
            // allright, we're in!
            echo "okay: logged in...\n";
        }
    }
?>