<?php
//connect to db
include_once "connect_db.php";

//create SQL statement (query)
$sql = "SELECT * FROM joke";

//execute (run) SQL statement and save result to a variable
$jokes = $pdo->query($sql);
?>

<h1>List of joke</h1>
<ol>
   <?php
   foreach ($jokes as $joke) {
   ?>
      <li>
         Joke id: <?= $joke['id'] ?>
         <br>
         Joke text: <?= $joke['joketext'] ?>
         <br>
         Joke date: <?= $joke['jokedate'] ?>
      </li>
   <?php
   }
   ?>
</ol>