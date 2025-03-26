<?php
if (isset($_POST['submit'])) {
    try {
        require "../common.php";
        require_once '../src/DBconnect.php';
        
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>