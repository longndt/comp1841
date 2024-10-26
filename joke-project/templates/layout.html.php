<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="jokes.css?version=1">
   <title><?= $title ?></title>
</head>

<body>
   <header>
      <h1>Internet Joke Database</h1>
   </header>
   <nav>
      <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="jokes.php">Joke List</a></li>
         <li><a href="authors.php">Author List</a></li>
         <li><a href="addjoke.php">Add New Joke</a></li>
         <li><a href="addauthor.php">Add New Author</a></li>
         <li><a href="about.php">About</a></li>
      </ul>
   </nav>
   <main>
      <?= $output ?>
   </main>
   <footer>
      &copy; IJDB Project - COMP1841 - FALL 2024
   </footer>
</body>

</html>