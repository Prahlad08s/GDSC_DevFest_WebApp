<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practise</title>
</head>

<body>
    <div class="container">
        This is my first PHP Program.
        <br>
        <?php
            //This is a constant which is usually written on top.
            define("PI", 3.14);

            echo "Hello World and this is printed in PHP  ";
            echo "<br>";
            //Single line comment
            // $var1 = 45;
            // $var2 = 50;
            // $var3 = $var1+$var2;
            // echo "<br>";
            // echo $var3;
            // echo "<br>";
            // echo "The value of 1!=4: ";
            // echo var_dump(1!=4);
            // echo "<br>";
            // $var5 = (true or false);
            // echo var_dump($var5);
            echo PI;
            echo "<br>";
            $var = "Hello";
            echo var_dump($var);
    
        ?>
    </div>
</body>

</html>