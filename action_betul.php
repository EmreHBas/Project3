<?php

echo "Hello World";
echo "<br> <br>";


echo "Today is " . date("d/m/Y") . "<br>";
echo "Username: " .$_POST['username'];
echo "<br>";
echo "Password: " .$_POST['password'];
echo "<br>";

$len = strlen($_POST['username']);

if ( $len < 5 ){
    echo "<br> Username moet groter zijn dan 4 tekens. <br>";
}



?>