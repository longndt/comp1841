<?php
foreach ($jokes as $joke) {
?>
   <blockquote>
      <?= date("d/m/Y", strtotime($joke['joke_date'])) ?>
      ---
      <?= $joke['joke_text'] ?>

      <a href="editjoke.php?id=<?= $joke['joke_id'] ?>"
         onclick="return confirm('Do you want to edit this joke?');">Edit</a>

      <form action="deletejoke.php" method="post"
         onsubmit="return confirm('Are you sure to delete this joke?');">
         <input type="hidden" name="id" value="<?= $joke['joke_id'] ?>">
         <input type="submit" value="Delete">
      </form>
   </blockquote>
<?php
}
?>