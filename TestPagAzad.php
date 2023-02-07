<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina Azad</title>
</head>
<body>
    <ul>
        <li><a href="home.php">home</a></li>
        <li><a href="TestPagTuncay.php">Tuncay</a></li>
        <li><a href="TestPagEmre.php">Emre</a></li>
        <li><a href="testbetul.php">Betul</a></li>
        <li><a href="TestPageAzad.php">Azad</li>
    </ul>

    <?php
echo "Today is " . date("d/m/Y") . "<br>";
?>

<h2>HTML Forms</h2>

<form action="action_page.php">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username" value="John"><br>
  <label for="pwd">Password:</label><br>
  <input type="password" id="password" name="password" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> <br>


</body>
</html>