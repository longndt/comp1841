<table border=1>
        <!-- 1st row : title row -->
        <tr>
                <th>ID</th>
                <th>Joke Text</th>
                <th>Joke Date</th>
                <th>Joke Image</th>
                <th>Joke Author</th>
                <th>Actions</th>
        </tr>
        <!-- from 2nd row : data row -->
        <!-- we use foreach loop to display all rows in table -->
        <?php
        foreach ($jokes as $joke) {
        ?>
                <tr>
                        <td><?= $joke['id'] ?></td>
                        <td><?= $joke['joketext'] ?></td>
                        <td><?= $joke['jokedate'] ?></td>
                        <td>
                                <img src="../images/<?= $joke['image'] ?>" width="100" height="100">
                        </td>
                        <td>
                                <?= $joke['name'] ?><br>
                                <a href="mailto:<?= $joke['email'] ?>"><?= $joke['email'] ?></a>
                        </td>
                        <td>
                                <form action="editjoke.php" method="post">
                                        <input type="hidden" name="id" value="<?= $joke['id'] ?>">
                                        <input type="submit" value="Edit">
                                </form>
                                <form action="deletejoke.php" method="post">
                                        <input type="hidden" name="id" value="<?= $joke['id'] ?>">
                                        <input type="submit" value="Delete" onclick="return confirm('Are you sure to delete this joke ?');">
                                </form>
                        </td>

                </tr>
        <?php
        }
        ?>
</table>