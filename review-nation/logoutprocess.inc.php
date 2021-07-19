<?php

session_start();

if(isset($_POST['logout'])) {
    unset($_SESSION['username']);

    header("Refresh: 2; URL=login.html?loggedout");
}
