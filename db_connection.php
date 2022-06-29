<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "morning_php_cat";
$connection = mysqli_connect($host,$user,$pass,$dbName);
if (!isset($connection)){
    die("DB Connection failed");
}