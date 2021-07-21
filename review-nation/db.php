<?php


$servername = 'localhost';
$dBUser = '***********';
$dBPass = '***********';
$dB = 'id17278300_ratings';

$conn = mysqli_connect($servername, $dBUser, $dBPass, $dB);

if($conn === false) {
    die("Error: connection error. " .mysqli_connect_error());
}
