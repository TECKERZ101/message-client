<?php
   session_start();
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $_SESSION["message"] = $_POST["message"];
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Message Page</title>
</head>
<body>
   <form action="message.php" method="post">
       <label for="message">Enter Message:</label><br>
       <textarea id="message" name="message"></textarea><br>
       <input type="submit" value="Submit">
   </form>
</body>
</html>
