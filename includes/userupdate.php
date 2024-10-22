<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../index.php");
    exit();
}

$username = $_POST["username"];
$pwd = $_POST["pwd"];
$email = $_POST["email"];

if (empty($username) || empty($pwd) || empty($email)) {
    header("Location: ../index.php");
    exit();
}

try {
    require_once "db.php";
    $query = "UPDATE users SET username = ?, pwd = ?, email = ? WHERE id = 2;";

    $stmet = $pdo->prepare($query);

    $stmet->execute([$username, $pwd, $email]);

    $pdo = null;
    $stmet = null;

    header("Location: ../index.php");

    die();
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage()());
}
