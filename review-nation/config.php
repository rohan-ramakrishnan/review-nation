<?php

$servername = 'localhost';
$dBUser = 'root';
$dbPass = '';
$dB = 'ratings';

$conn = mysqli_connect($servername, $dBUser, $dbPass, $dB);

if($conn === false) {
    die("Error: connection error. " .mysqli_connect_error());
}
