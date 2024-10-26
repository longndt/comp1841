<?php
foreach ($authors as $author) {
?>
   <blockquote>
      <?= $author['author_name'] ?>
      ---
      <?= $author['author_email'] ?>

      <a href="editauthor.php?id=<?= $author['author_id'] ?>"
         onclick="return confirm('Do you want to edit this author?');">Edit</a>

      <form action="deleteauthor.php" method="post"
         onsubmit="return confirm('Are you sure to delete this author?');">
         <input type="hidden" name="id" value="<?= $author['author_id'] ?>">
         <input type="submit" value="Delete">
      </form>
   </blockquote>
<?php
}
?>