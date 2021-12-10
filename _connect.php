<?php

    $host = "plesk.remote.ac";
    $database = "WS233812_ltext.co.uk";
    $username = "WS233812_admin";
    $password = "t&3fC4z3";

    $connect = mysqli_connect($host, $username, $password, $database);

    if (!$connect)
    {
        echo "Unable to connect to the database.";
    }

?>