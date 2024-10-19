<?php
//check whether user click "Add" button (submit form) or not
//case 1: user did not submit form => render (display) form for user to input
if (!isset($_POST['add'])) { ?>
   <form action="add_joke.php" method="post">
      <h1>Add new joke</h1>
      <label for="">Joke text</label>
      <input type="text" name="text" required placeholder="Enter joke text">
      <br><br>
      <label for="">Joke description</label>
      <input type="text" name="description" required placeholder="Enter joke description">
      <br><br>
      <label for="">Joke date</label>
      <input type="date" name="date" required>
      <br><br>
      <label for="">Joke image</label>
      <input type="text" name="image" required placeholder="Enter joke text">
      <br><br>
      <label for="">Joke video</label>
      <input type="text" name="video" required placeholder="Enter joke video">
      <br><br>
      <input type="submit" value="Add" name="add">
   </form>
<?php
   //case 2: user already submit form => take data from form and insert data to DB
} else {
   //connect to db
   require "connect_db.php";
   //get data from FORM
   $text = $_POST["text"];
   $description = $_POST["description"];
   $date = $_POST["date"];
   $image = $_POST["image"];
   $video = $_POST["video"];
   //create SQL query
   //"id" is ignore because "id" is automatic increment
   $sql = "INSERT INTO jokes SET
           joketext = :text,
           jokedescription = :description,
           jokedate = :date,
           image = :image,
           video = :video";
   //prepare SQL statement
   $statement = $pdo->prepare($sql);
   //bind values
   $statement->bindValue(':text', $text);
   $statement->bindValue(':description', $description);
   $statement->bindValue(':date', $date);
   $statement->bindValue(':image', $image);
   $statement->bindValue(':video', $video);
   //execute SQL
   $statement->execute();
   //redirect to index page (joke list)
   header("location: index.php");
}
?>