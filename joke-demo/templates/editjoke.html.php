<form action="editjoke.php" method="post">
   <h1 style="color: black;">Edit joke</h1>
   <label for=""> Joke text</label>
   <input type="text" name="joketext" required value="<?= $joke['joketext'] ?>">
   <label for="">Joke image</label>
   <input type="text" name="image" required value="<?= $joke['image'] ?>">
   <input type="hidden" name="id" value="<?= $joke['id'] ?>">
   <input name="edit" type="submit" value="Edit">
</form>