<?php
session_start();

include_once "db.php";


if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['uid']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $result = mysqli_query($conn, "SELECT * FROM users WHERE `usersUid` = '$username' and `usersPass` = '$password';")
        or die("Failed to query database");

    $res = mysqli_fetch_array($result);

    if ($res['usersUid'] == $username && $res['usersPass'] == $password) {
            header("Location: main.php?error=Loginsuccessful");
            $_SESSION["username"] = $username; 
    } else {
        header("Location: loginerror.html");
    }
}

//     if(password_verify($password, $res['usersPass'])) {
//         header("Location: main.php?error=Loginsuccessful");
//         $_SESSION["username"] = $username;
//     } else {
//         echo 'not found';
//     }
// } 

//     if(isset($res['usersPass'])) { 
//         echo $res['usersPass']; 
//     } else {
//         echo 'not found';
//     }
// }




    // while (list($key, $val)=each($res['usersUid'])) {

    //     echo "$key=>$val \n";
        // if ($res['usersUid'] == $user) {
        //     echo "Login Successful";
        // } else {
        //     header("location: login.html");
        // }


    // if (mysqli_num_rows($result) > 0) {
    //     while($res = mysqli_fetch_array($result)) {
    //         if ($res['usersUid'] == $user and $res['usersPass'] == $pass) {
    //             echo 'Login Successful';
    //         } else {
    //             header("location: login.html?error=Loginnotsuccesful");
    //         }
    //     }
        
    // }
//}


?>

<html>
    <h1 name="creds"></h1>
</html>