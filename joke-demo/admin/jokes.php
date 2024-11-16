<?php
//READ feature: select (retrieve) data from database
try{
    //go outside the parent folder (admin) first
    //then go inside folder "includes" to connect to DB
    include '../includes/DatabaseConnection.php';

    $sql = 'SELECT jokes.id, image,
    jokedate, joketext,
    `name`, `email` FROM jokes
    INNER JOIN authors
    ON authorid = authors.id
    ORDER BY jokes.id DESC
    ';
    $jokes = $pdo->query($sql);

    $title = 'Joke list';

    ob_start();
    include '../templates/jokes_admin.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include '../templates/layout_admin.html.php';

