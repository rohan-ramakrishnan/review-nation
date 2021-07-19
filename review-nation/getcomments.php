<!DOCTYPE html>

<html>
    <head>
        <link href="styler.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        <script src="js/rating.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <div class="container-fluid" id="navbar" style="background-color: antiquewhite;">
                <h1 class="head"><span class="navicon" id="navicon" onclick="openNav()">&#9776; Menu</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Review nation     </h1> 
                <div id="mySidebar" class="sidebar">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <h3 class="navtitle">Review Nation</h3>
                    <a href="getcomments.php">Reviews</a>
                    <a href="places.html">Places</a>
                    <a href="about.html">About</a>
                    <a href="login.php">Login</a>
                    <a href="signup.html">Signup</a>
                    <h3 class="navtitle" id="user"><?php session_start();
                                            
                                            if(!empty($_SESSION["username"])) {
                                                echo $_SESSION["username"];
                                            } else {
                                                echo '';
                                            }
                                        ?>
                    </h3>
                    <a class="lgout" id="link">Logout</a>
                </div>
                
            </div>

            <br>
        </header>

        <button onclick="redirect();">&plus; Add</button>

        <script>
            window.onscroll = function() {myFunction()};

    // Get the navbar
            var navbar = document.getElementById("navicon");

    // Get the offset position of the navbar
            var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    navbar.classList.add("sticky")
                } else {
                    navbar.classList.remove("sticky");
                }
            }

            function redirect() {
                window.location.href="comments.php";
            }

            function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }

            

            setTimeout(function () {
                if (document.getElementById('user') == '') {
                document.getElementById('link').style.display = 'none';
                }
            }, 1000);


            function redirectToLogout() {
                window.location.href = "logout.html";
            }

            document.getElementById('link').addEventListener('click', redirectToLogout);
        </script>
    </body>
</html>

<?php

        include_once "config.php";

        $result = mysqli_query($conn, "SELECT * FROM rev");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="container"><h2 class="sender">Added by <span class="senderp">'. $row['revSender'].'</span>&nbsp;&nbsp;<span class="time">'. $row['revCreated'].'</span></h2>'.
                    '<h3 class="com">Review for <a style="text-transform: uppercase;" href="show_prod.php?pid='. $row["revId"] .'">'. $row['revProdu'].'</a></h3></div>';
            }
        }

?>
    





