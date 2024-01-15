<?php
   session_start();
   if (isset($_SESSION["message"])) {
       echo "<p>" . $_SESSION["message"] . "</p>";
   } else {
       echo "<p>No message yet.</p>";
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Admin Page</title>
</head>
<body>
   <form action="admin.php" method="post">
       <label for="message">Enter Message:</label><br>
       <textarea id="message" name="message"></textarea><br>
       <input type="submit" value="Submit">
   </form>
</body>
</html>
