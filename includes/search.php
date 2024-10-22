<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index3.php");
}

$usersearch = $_POST["usersearch"];


if (empty($usersearch)) {
    header("Location: index3.php");
    exit();
}

try {
    require_once "db.php";
    $query = "SELECT * FROM comments WHERE username = ?";

    $stmet = $pdo->prepare($query);

    $stmet->execute([$usersearch]);

    $result = $stmet->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmet = null;

    header("Location: index3.php");
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage()());
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/search.css"> -->
</head>

<body>
    <h3>Search Results:</h3>

    <?php
    if (empty($result)) {
        echo "<div>";
        echo "<p>There were no results</p>";
        echo "</div>";
    }
    var_dump($result)
    ?>

</body>

</html>