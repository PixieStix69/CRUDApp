<?php
require "../common.php";

    if (isset($_GET['id'])) {
        try {
            require_once '../src/DBconnect.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM users WHERE id = :id";
            $statement = $connection->prepare($sql);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $user = $statement->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    } else {
        echo "Something went wrong!";
        exit;
    }
?>