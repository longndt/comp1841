<form action="editjoke.php" method="post">
 <h2>Edit joke</h2>
 <label>Joke text</label>
 <input type="hidden" name="joke_id" value="<?= $joke['joke_id'] ?>" >
 <input type="text" required name="joke_text"
  value="<?= $joke['joke_text'] ?>">
 <label>Joke author</label>
 <select name="author_id">
     <?php
     //run foreach loop to display all authors from authors table
     foreach ($authors as $author) {
     //the author which matched with that joke will be displayed
     //in first position of drop-down list
      if ($author['author_id'] == $joke['author_id']) {
          ?>
              <option selected value="<?= $author['author_id'] ?>" >
                 <?= $author['author_name'] ?>
              </option>
          <?php } else {
           //other authors will be displayed from 2nd position
           ?>
              <option value="<?= $author['author_id'] ?>" >
                    <?= $author['author_name'] ?>
              </option>
          <?php
          }
     }
     ?>
</select>
 <label>Joke category</label>
 <select name="category_id">
     <?php
     foreach ($categories as $category) {
      if ($category['category_id'] == $joke['category_id']) {
          ?>
              <option selected value="<?= $category['category_id'] ?>" >
                 <?= $category['category_name'] ?>
              </option>
          <?php } else {
           ?>
              <option value="<?= $category['category_id'] ?>" >
                    <?= $category['category_name'] ?>
              </option>
          <?php
          }
     }
     ?>
</select>
  <input type="submit" value="Edit" name="edit">
</form>