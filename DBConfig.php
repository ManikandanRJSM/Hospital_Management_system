<?php
error_reporting(0);
$servername = "localhost";
        $serveruser = "root";
        $serverpass = "";
        $dbname = "hospital";
        $connection = new mysqli($servername, $serveruser, $serverpass, $dbname) or die("Connection failed" . connect_error());
?>
