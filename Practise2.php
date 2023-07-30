<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practise PHP</title>
    <style>
        .container {
            width: 60%;
            margin: auto;
            padding: 28px;
            background-color: grey;
            /* display: flex;
            flex-direction: column; */

        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to PHP(Hypertext Preprocessor)</h1>
        <h2>Check Your voting status: </h2>
        <?php

use JetBrains\PhpStorm\Language;

        $languages = array("Python", "C++", "Java", "PHP");
        echo count($languages);
        echo "<br>";
        // echo $languages[3];
        // $age = 18;
        // if ($age > 18) {
        //     echo "You are allowed to Vote in Eleccioons in India.";
        // } else if ($age == 18) {
        //     echo "<h3>Create your Voter ID card and vote.</h3>";
        // } else {
        //     echo "You are allowed to vote in elections in India.";
        // }

            // $a =0;
            // while ($a <= count($languages)) {
            //     echo $languages[$a];
            //     echo "<br>";
            //     $a++;
            // }

            // for($i =0; $i<count($languages); $i++){
            //     echo $languages[$i];
            //     echo "<br>";
            // }

            // $a = 0;
            // do{
            //     echo $a;
            //     $a++;
            //     echo " ";
            // }while($a <= 3)

            // foreach($languages as $value){
            //         echo "<br>The Value of array element is: ";
            //         echo $value;
            // }
                
            // function callme(){
            //     echo "<br>";
            //     echo " you have called the function";
            // }
            // callme();

            // Strings in PHP
            $str1 = "Prahlad Singh";
            $lenn = strlen($str1);
            echo var_dump($str1);
            echo "<br>The length of the name is: ".$lenn;
            
        ?>
    </div>


</body>

</html>