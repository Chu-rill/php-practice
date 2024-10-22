<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../index.php");
}
$firsname = htmlspecialchars($_POST["firstname"]);
$lastname = htmlspecialchars($_POST["lastname"]);
$favoritepet = htmlspecialchars($_POST["favoritepet"]);

if (empty($firsname) || empty($lastname) || empty($favoritepet)) {
    exit();
    header("Location: ../index.php");
}

echo "This are the data that the user submitted";
echo "<br>";
echo $firsname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $favoritepet;

header("Location: ../index.php");
