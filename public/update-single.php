<?php
/**
* Use an HTML form to edit an entry in the
* users table.
*
*/
require "../common.php";
if (isset($_POST['submit'])) {
    try {
        require_once '../src/DBconnect.php';
        $user =[
            "id" => escape($_POST['id']),
            "firstname" => escape($_POST['firstname']),
            "lastname" => escape($_POST['lastname']),
            "email" => escape($_POST['email']),
            "age" => escape($_POST['age']),
            "location" => escape($_POST['location']),
            "date" => escape($_POST['date'])
        ];

    $sql = "UPDATE users
    SET id = :id,
        firstname = :firstname,
        lastname = :lastname,
        email = :email,
        age = :age,
        location = :location
        
        
    WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->execute($user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}


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
<?php require "templates/header.php"; ?>
