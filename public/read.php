<?php
if (isset($_POST['submit'])) {
    try {
        require "../common.php";
        require_once '../src/DBconnect.php';
        
        $sql = "SELECT *
        FROM users
        WHERE location = :location";
        $location = $_POST['location'];
        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);



        
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>