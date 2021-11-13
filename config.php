<?php
    require('vendor/autoload.php');
    // Define mysql server settings
    $serverName = "pxldatabank";
    $username = "student";
    $password = "ventieldopje24";
    $dbName = "employees";

    // Create a new mysqli connection. Remember to enable this in php.ini !!
    $conn = new mysqli($serverName, $username, $password, $dbName);
