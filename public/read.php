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
        $result = $statement->fetchAll();



        
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
if (isset($_POST['submit'])) {
    if ($result && $statement->rowCount() > 0) {
    // open table
    foreach ($result as $row) {
    // table contents
    }
    // close table
    } else {
    // no results
    }
}



?>