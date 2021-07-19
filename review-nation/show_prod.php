<?php

include_once "config.php";

$item = $_GET['pid'];

$result = mysqli_query($conn, "SELECT * FROM rev WHERE `revId`='$item';");

$row = mysqli_fetch_array($result);

?>

<html>
    <head>
        <title>Review: <?php echo $row['revProdu']; ?> | review nation </title>
        <link rel="stylesheet" href="stylerpa.css">
    </head>
    <body>
        <div class="container">
            <h2 class="time"><?php echo $row['revCreated'] ?><br>
            <span class="senderpa"><?php echo $row['revSender'] ?></span></h2>

            <h2 style="color: black; font-family: Georgia;">Review for <span class="maintitl"><?php echo $row['revProdu'] ?></span></h2>
            <h2 class="maincontent"><?php echo $row['revMsg'] ?></h2>
            <a href="getcomments.php">Back to Product Page</a>
        </div>
    </body>
</html>