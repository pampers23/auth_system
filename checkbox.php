<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="burger" value="Burger">
        Burger <br>
        <input type="checkbox" name="pasta" value="Pasta">
        Pasta <br>
        <input type="checkbox" name="salad" value="Salad">
        Salad <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php 
    if (isset($_POST["confirm"])) {
        if (isset($_POST["pizza"])) {
            echo "You have selected Pizza. <br>";
        }
    }

?>