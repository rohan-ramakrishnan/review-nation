<?php


$servername = 'localhost';
$dBUser = 'root';
$dBPass = '';
$dB = 'auth';

$conn = mysqli_connect($servername, $dBUser, $dBPass, $dB);

if($conn === false) {
    die("Error: connection error. " .mysqli_connect_error());
}
