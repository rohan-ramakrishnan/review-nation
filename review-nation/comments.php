<?php
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Comments</title>
        <link rel="stylesheet" href="stylecom.css">
    </head>
    <body>
        <div class="container">

            <h5>Posting as <?php echo $_SESSION['username'] ?></h5>
            <form action="process.php" method="POST">
                <label for="prody">Review What: <span id="placedd"></span></label><br>
                <input type="text" name="product" id="prody" class="prod" onkeyup="showProduct(this)" required><br><br>
                <label for="cont">Some info about <span id="place"></span></label><br>
                <textarea type="text" name='comment' id="cont" class="about" maxlength="10000" onkeyup="countChars(this);" required></textarea><p id="charNum">0 out of 10000 characters</p><br><br>
                <label for="media">Media for <span id="placed"></span></label>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>

        <script>
        function countChars(obj){
            var maxLength = 10000;
            var strLength = obj.value.length;
            
            if(strLength > maxLength){
                document.getElementById("charNum").innerHTML = '<span style="color: red;">'+strLength+' out of '+maxLength+' characters</span>';
            }else{
                document.getElementById("charNum").innerHTML = strLength+' out of '+maxLength+' characters';
            }
        }

        function showProduct(obj) {
            let value = obj.value;

            document.getElementById("place").innerHTML = value;
            document.getElementById("placed").innerHTML = value;
            document.getElementById("placedd").innerHTML = value;
        }

        function showPreview() {

        }

        </script>
    </body>
</html>