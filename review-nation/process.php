<?php
session_start();
include_once "config.php";

date_default_timezone_set('America/Los_Angeles');

if (isset($_POST['submit'])) {
    $sender = mysqli_real_escape_string($conn, $_SESSION['username']);
    $produ = mysqli_real_escape_string($conn, $_POST['product']);
    $msg = mysqli_real_escape_string($conn, $_POST['comment']);
    $imgname = $_FILES['media']['name'];
    $imgtmp = $_FILES['media']['tmp_name'];
    $imgsize = $_FILES['media']['size'];
    $curTime = date('Y|m|d H:i');

    if (!(empty($imgname))) {
        $upload_dir = 'media/';
        $imgExt = strtolower(pathinfo($imgname, PATHINFO_EXTENSION));
        $validExtensions = array('jpeg', 'jpg', 'png', 'gif');
        $userpic = rand(1000, 1000000).".".$imgExt;

        if(in_array($imgExt, $validExtensions)) {
            if($imgsize < 5000000) {
                move_uploaded_file($imgtmp, $upload_dir.$userpic);
            } else {
                $errMsg = "file too big"
                header("Location: comments.php?error=filetoobig");
            }
        } else {
            $errMsg = "ext not valid"
            header("Location: comments.php?error=fileextnotvalid")
        }
    }

    if(!isset($errMsg)) {
        $stmt = $conn->prepare('INSERT INTO rev (`revSender, `revMsg`, `revCreated`, `revProdu`')
    }

    $sql = "INSERT INTO rev (`revSender`, `revMsg`, `revCreated`, `revProdu`) VALUES ('$sender', '$msg', '$curTime', '$produ');";
    mysqli_query($conn, $sql);

    mysqli_close($conn);

    header('location: getcomments.php');
}

?>