<?php 
if (isset($_POST['submit'])) {
    require "../config.php";
    try {
    $connection = new PDO($dsn, $username, $password, $options);
    // insert new user code will go here
    } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
    }
    }

?>