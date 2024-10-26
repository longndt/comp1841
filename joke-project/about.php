<?php
//set custom page title
$title = "About page";
ob_start(); //very important

//render the page content (UI)
include 'templates/about.html.php';

//pass content to $output variable
$output = ob_get_clean();

//include template (layout): header, footer
include 'templates/layout.html.php';
