<?php
session_start();
unset($_SESSION['Authorized']);
session_destroy();

?>

<h1>Logout succeed !</h1>
<button><a href="login.php">Login again </a></button>