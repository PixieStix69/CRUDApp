<?php 
/**
* Open a connection via PDO to create a new database and table with
* structure. */
if (isset($_POST['submit'])) {
        require "../config.php";
        try {
            $connection = new PDO($dsn, $username, $password, $options);
       
        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }
    $new_user = array(
        "firstname" => $_POST['firstname'],
        "lastname" => $_POST['lastname'],
        "email" => $_POST['email'],
        "age" => $_POST['age'],
        "location" => $_POST['location']
        );

?>