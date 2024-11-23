<?php
session_start();

unset($_SESSION['text']);
session_destroy();

echo "<h1>Destroy session succeed !</h1>";
?>