<?php
//set fixed account (username & password) to test
$CorrectUsername = "admin";
$CorrectPassword = "123456";

//validate login information
//case 1: login succeed
if ($_POST['username'] == $CorrectUsername
   && $_POST['password'] == $CorrectPassword) {
      //create session
      session_start();
      $_SESSION['Authorized'] = "Yes";
      //redirect to admin page
      header ("Location: admin.php");
}
//case 2: login failed
else {
      header ("Location: LoginFail.php");
}

?>