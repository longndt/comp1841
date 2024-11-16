<?php
require "includes/FunctionLibrary.php";
deleteRecord($pdo, "jokes", $_POST['id']);

?>