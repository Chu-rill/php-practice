<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../index.php");
}

$username = $_POST["username"];
$pwd = $_POST["pwd"];
$email = $_POST["email"];

if (empty($username) || empty($pwd) || empty($email)) {
    exit();
    header("Location: ../index.php");
}

try {
    require_once "db.php";
    $query = "INSERT INTO users (username,pwd,email) VALUES (?,?,?);";

    $stmet = $pdo->prepare($query);

    $stmet->execute([$username, $pwd, $email]);

    $pdo = null;
    $stmet = null;

    header("Location: ../index.php");

    die();
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage()());
}
