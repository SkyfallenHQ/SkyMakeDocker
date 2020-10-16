<?php
// this value is checked in order to make sure we have access to this file
define("SkyMakeOnDBConfigConnect", "DBCONFCONNOK");
//begin editing
define("dbHost","dbserver");
define("dbName","skymake_container");
define("dbUser","root");
define("dbPassword","7odjw34fh8c2e");
//stop editing
//Only MySQL is supported
//SkyMake4 uses MySQLi (MySQL Enchanced)
/* Attempt to connect to MySQL database */
$link = mysqli_connect(dbHost, dbUser, dbPassword, dbName);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$linktwo = mysqli_connect(dbHost, dbUser, dbPassword, dbName);

// Check connection
if($linktwo === false){
    die("ERROR: Could not create backup link. " . mysqli_connect_error());
}
?>
