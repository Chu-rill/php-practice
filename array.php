<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $fruits = ["Apple", "mango", "grape"];

    // echo count($fruits); //lenght of the array
    // print_r($fruits); //everything in the array
    // sort($fruits);
    array_push($fruits, "pear");
    sort($fruits);
    print_r($fruits);
    ?>
</body>

</html>