<?php
$server = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'rph';

$conn = mysqli_connect($server,$user,$pass) or die("error");

$selectdb = mysqli_select_db($conn,$db) or die("error");
?>