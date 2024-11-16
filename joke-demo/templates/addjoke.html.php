<form action="addjoke.php" method="post">
   <h1 style="color: black;">Add new joke</h1>
   <label for="">Joke text</label>
   <input type="text" name="joketext" required minlength="3">
   <label for="">Joke date</label>
   <input type="date" name="jokedate" required>
   <label for="">Joke image</label>
   <input type="text" name="image" required>
   <label for="">Joke author</label>
   <select name="author" id="">
      <?php
      foreach ($authors as $author) {
      ?>
         <option value="<?= $author['id'] ?>"><?= $author['name'] ?></option>
      <?php } ?>
   </select>
   <input type="submit" value="Add" name="add">
</form>