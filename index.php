<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <!-- <main>
        <form action="include/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <br>
            <input type="text" id="firstname" name="firstname" placeholder="Firstname...">
            <br><br>
            <label for="message">Lastname?</label>
            <br>
            <input type="text" id="lastname" name="lastname" placeholder="Lastname...">
            <br><br>
            <label for="eyecolorblue">Favorite Pet?</label>
            <select name="favoritepet" id="favoritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main> -->
    <h3>Signup</h3>
    <form action="includes/formhandler2.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-mail">
        <button>SignUp</button>
    </form>
</body>

</html>