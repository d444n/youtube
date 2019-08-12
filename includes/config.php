<?php
ob_start(); //Turns on output buffering 
session_start(); //we are using sessions

date_default_timezone_set("Europe/London");

try {
    $con = new PDO("mysql:dbname=videotube;host=localhost", "root", ""); //connection to mysql database
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //setting the error mode
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>