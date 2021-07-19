<!DOCTYPE html>
<head>
    <title>Review Nation</title>
    <link href="style.css" rel="stylesheet">
    <script src="index.js" type="text/js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container-fluid" id="navbar" style="background-color: antiquewhite;">
            <br>
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
                <a class="lgout" id="link" href="logout.html">Logout</a>
              </div>
              
        </div>
    </header>
    <div class="content">


    </div>
    
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

        
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
            }

        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            // add a zero in front of numbers<10
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('time').innerHTML = h + ":" + m;
            t = setTimeout(function() {
                startTime()
            }, 500);
        }

        startTime();


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