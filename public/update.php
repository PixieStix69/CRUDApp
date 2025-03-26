<?php
/**
* List all users with a link to edit
*/
    try {
        require "../common.php";
        require_once '../src/DBconnect.php';
        $sql = "SELECT * FROM users";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

    
?>