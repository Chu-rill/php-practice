<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../index.php");
}

$username = htmlspecialchars($_POST["username"]);
$pwd = htmlspecialchars($_POST["pwd"]);
$email = htmlspecialchars($_POST["email"]);

if (empty($username) || empty($pwd) || empty($email)) {
    exit();
    header("Location: ../index.php");
}
