<?php
//this is homepage (first page when website is loaded)
//"index.php" is always default homepage
//we display table "jokes" data in this file

//step 1: connect to db: by connecting to "connect_db" file
include_once "connect_db.php";
//require_once "file_a.php";

//step 2: get data from "jokes" table
//2.1: declare SQL statement (query)
$sql = "SELECT * FROM jokes";
//2.2: execute (run) this SQL statement & save result to a variable (an array)
$jokes = $pdo->query($sql);

//step 3: display data to table in webpage
?>

<!-- table => row => column => data -->

<!-- 2nd way: foreach loop without bracket, get data by column index (first column is index 0) -->
<table border="1">
   <tr>
      <th colspan=5>Joke List</th>
      <th>
         <a href="add_joke.php">Add joke</a>
         <form action="add_joke.php">
            <input type="submit" value="Add joke">
         </form>
      </th>
   </tr>
   <tr>
      <th>Joke Id</th>
      <th>Joke Text</th>
      <th>Joke Description</th>
      <th>Joke Date</th>
      <th>Joke Image</th>
      <th>Joke Video</th>
      <th>Menu</th>
   </tr>
   <?php
   foreach ($jokes as $joke) :
   ?>
      <tr>
         <td>
            <?= $joke[0] ?>
         </td>
         <td>
            <?= $joke[1] ?>
         </td>
         <td>
            <?= $joke[2] ?>
         </td>
         <td>
            <!-- display date as favourite format (DD/MM/YYYY) -->
            <?= date("d/m/Y", strtotime($joke[3])) ?>
         </td>
         <td>
            <img src="images/<?= $joke[4] ?>" width="100" height="100" />
         </td>
         <td>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $joke['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
         </td>
         <td>
            <form action="edit_joke.php" method="get">
               <input type="hidden" name="id" value="<?= $joke['id'] ?>">
               <input type="submit" value="Edit">
            </form>
            <form action="delete_joke.php" method="get"
               onsubmit="return confirm('Are you sure to delete this joke ?');">
               <input type="hidden" name="id" value="<?= $joke['id'] ?>">
               <input type="submit" value="Delete">
            </form>
         </td>
      </tr>
   <?php
   endforeach;
   ?>
</table>

<br> <br>
<?php
$jokes = $pdo->query($sql);
?>

<!-- 1st way: foreach loop with bracket, get data by column name -->
<table border="1">
   <tr>
      <th colspan=5>Joke List</th>
   </tr>
   <tr>
      <th>Joke Id</th>
      <th>Joke Text</th>
      <th>Joke Description</th>
      <th>Joke Date</th>
      <th>Joke Image</th>
   </tr>
   <?php
   foreach ($jokes as $joke) {
   ?>
      <tr>
         <td>
            <?= $joke['0'] ?>
         </td>
         <td>
            <?= $joke['joketext'] ?>
         </td>
         <td>
            <?= $joke[2] ?>
         </td>
         <td>
            <?= date("d/m/Y", strtotime($joke['jokedate'])) ?>
         </td>
         <td>
            <img src="images/<?= $joke['image'] ?>" width="100" height="100" />
         </td>
      </tr>
   <?php
   }
   ?>
</table>