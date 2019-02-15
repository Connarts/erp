<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JR</title>
</head>
<body>
    trying js

    <form action="test.php" method="post">
        <label for="name[]">name 1</label>
        <input type="text" name="name[]" id="">

        <label for="name[]">name 2</label>
        <input type="text" name="name[]" id="">

        <label for="stock[]">stock 1</label>
        <input type="text" name="stock[]" id="">

        <label for="stock[]">stock 2</label>
        <input type="text" name="stock[]" id="">
        <input type="submit" value="submit">
    </form>

    <?php
        var_dump($_POST);
        foreach($_POST['name'] as $x => $x_value) { // $x is the index of the array, $x_value is the value of that index in the array
            echo "<br>";
            echo "Key=" . $x ;
            echo "<br>"; 
            echo ",Value=" . $x_value;
            echo "<br>";

            echo "<br>";
            echo "Key=" . $x ;
            echo "<br>"; 
            echo ",Value=" . $_POST['stock'][$x];
            echo "<br>";
            # $sqlll = "INSERT INTO inventory (name, image, stock, brand_name) VALUES ('$x','$d','8876','$x_value')";
            # $result = $conn->query($sqlll);
        }
    ?>
</body>
</html>