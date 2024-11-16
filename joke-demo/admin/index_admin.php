<?php
$title = 'Internet Joke Database';
ob_start();
include '../templates/home_admin.html.php';
$output = ob_get_clean();
include '../templates/layout_admin.html.php';