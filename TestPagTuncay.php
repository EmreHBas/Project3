<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="home.php">home</a></li>
        <li><a href="TestPagtuncay.php">Tuncay</a></li>
        <li><a href="TestPagEmre.php">Emre</a></li>
        <li><a href="testbetul.php">Betul</a></li>
        <li><a href="TestPageAzad.php">Azad</li>
    </ul>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l");
?>



<h2>HTML Forms</h2>

<form action="Action_page.php" method="POST">
  <label for="fname">Username:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
</body>
</html>