<?php

var_dump($_POST);

$a[0] = "Jan";
$a[1] = "Rob";
$a[2] = "Piet";

$b = array(10,11,12,34,100,1000);

echo '<table border="1" width="200">';
foreach($_POST as $value) {
    // toevoegen tr en td
    echo "<tr><td>";

    // Print naam
    echo $value . "<br>";
   
    // afsluiten tr en td
    echo "</td></tr>";
}


//var_dump($a);
echo "<br>";

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