<?php
/*
  Location:  C:/xampp/htdocs/week02/review.php
  URL     : http://localhost/week02/review.php
*/

/*
  How to run PHP codes ?
  - Start XAMPP with enabled Apache service
  - Write codes and save to proper location
  - Open browswer and type proper link
*/

//declare variable using $ symbol
$web = "COMP1841 - Fall 2024";

//print text to webpage using "echo" or "print"
echo "<b style='color: red;'>Web Programming 1</b>";
echo "<br>";
print "Greenwich Vietnam - " . $web ."<br>";  //use dot (.) symbol for concatenation
echo "<i>Tech stack: HTML + CSS + JS + PHP + MySQL</i>";
?>