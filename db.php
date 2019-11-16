<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="desaku";
$connect=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$connect)die("error:".mysqli_connect_Error());
?>