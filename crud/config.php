<?php
$databaseHost = 'localhost';
$databaseName = 'crud';
$databaseUsername = 'root';
$databasePassword = '';

$config= mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if(!$config){
    die("koneksi dengan database gagal:".mysqli_connect_error());
 }
?>