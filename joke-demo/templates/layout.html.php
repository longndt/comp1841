<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- add css version to update css code (in case case css not automatic reload with latest code) -->
    <link rel="stylesheet" href="jokes.css">
    <title><?= $title ?></title>
</head>

<body>
    <header>
        <h1>Internet Joke Database - PUBLIC SITE</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="jokes.php">Jokes List</a></li>
            <li><a href="admin/index_admin.php">Admin Area</a></li>
        </ul>
    </nav>
    <main>
        <?= $output ?>
    </main>
    <footer>&copy; IJDB 2024</footer>
</body>

</html>