<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../index.php");
    exit();
}

$username = $_POST["username"];
$pwd = $_POST["pwd"];

if (empty($username) || empty($pwd)) {
    header("Location: ../index.php");
    exit();
}

try {
    require_once "db.php";
    $query = "DELETE FROM users WHERE username = ? AND pwd = ?;";

    $stmet = $pdo->prepare($query);

    $stmet->execute([$username, $pwd]);

    $pdo = null;
    $stmet = null;

    header("Location: ../index.php");

    die();
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage()());
}
