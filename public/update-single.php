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

<?php require "templates/header.php"; ?>
    <h2>Edit a user</h2>
    <form method="post">
<?php foreach ($user as $key => $value) : ?>

<?php endforeach; ?>
        <input type="submit" name="submit" value="Submit">
    </form>
        <a href="index.php">Back to home</a>
<?php require "templates/footer.php"; ?>