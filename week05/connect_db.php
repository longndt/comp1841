<?php
/* File Path    : C:/xampp/htdocs/co1203/week05/connect_db.php */
/* Web URL      : localhost/co1203/week05/connect_db.php */

//1st way: shorter (no need to declare variables)
// try {
//    //connect to db with db server name, db name, charset, db username, db password
//    //default db (MySQL) port is 3306 => if you use default port, no need to add this to connection
//    //default db username in Xampp is "root"
//    //default db password in Xampp is " " (empty)
//    //charset (character set/encoding) is optional (not required)
//    $pdo = new PDO('mysql:host=localhost   ; dbname=joke_db', 'root', '');
//    echo "connect to db succeed !";
// } catch (PDOException $error) {
//    echo "connect to db failed ! " . $error;
// }

//2nd way: longer but clearer (must declare variables for db parameters)
try {
   $db_host = 'localhost';
   $db_name = 'joke_db';
   $db_username = 'root';
   $db_password = '';

   $pdo = new PDO("mysql:host=$db_host; dbname=$db_name", $db_username, $db_password);
   //echo "connect to db succeed !";
} catch (PDOException $error) {
   echo "connect to db failed ! " . $error;
}
?>

