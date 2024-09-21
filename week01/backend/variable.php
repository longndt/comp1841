<?php
//declare variable
//Note: use $ symbol before variable name

$x = 10; //integer
$y = 3.14; //floating point number (double/float)
$text = "Hello";  //string
$is_passed = true; //boolean
$music = ["pop", "rock", "R&B"]; //array
$sports = array("voleyball", "badminton", "football");

echo "x = " . $x . "<br>"; //use (.) dot symbol for string concatenation (merge)
echo $music[1] . "<br>";  //index: 1, second element in array

//display loop with "for"
for ($i = 0; $i < count($music); $i++) {
   echo $music[$i] . "<br>";
}

//display loop with "foreach"
foreach ($sports as $sport) {
   echo $sport . ", ";
}
?>