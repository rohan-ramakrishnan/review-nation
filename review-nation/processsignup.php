<?php
session_start();
include_once "db.php";

if(isset($_POST['submit'])) {
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $rpass = mysqli_real_escape_string($conn, $_POST['repeatpass']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    if ($rpass !== $pass) {
        header("location: signuperror.html");
    } else {
        $sql = "INSERT INTO users (`usersUid`, `usersPass`, `usersEmail`) VALUES ('$uid', '$pass', '$email');";
        mysqli_query($conn, $sql);

        $_SESSION["username"] = $uid;

        
        header("Location: main.php?signedup");
}


}
