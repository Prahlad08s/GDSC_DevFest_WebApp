<?php
    if(isset($_POST["name"])){

    //Set Connection Variable
    $server = "localhost";
    $username = "root";
    $passsword = "";
    $database = "details";

    //Create a databse Connection
    $conn = mysqli_connect($server, $username, $passsword, $database);


    //Check for connection success
    if(!$conn){
        die("Connection to the database failed".mysqli_connect_error());

    }
    // echo "Success connecting to the db.";
    //collect post variables
    $name = $_POST["name"];
    $Age = $_POST["Age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $desc = $_POST["desc"];

    $sql = "INSERT INTO `developers` (`Name`, `Age`, `Gender`, `E-mail`, `Mobil No`, 
    `Desciption`, `Date`) VALUES ('$name', '$Age', '$gender', '$email', 
    '$phone', '$desc', current_timestamp());";

    //echo $sql;
    //Executte the query
    // if($conn->query($sql) == true){
    //     echo "Successfully Inserted";
    // }
    // else{
    //     echo "ERROR: $sql <br> $conn-> error"; 
    // }

    $conn-> close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to DevFest Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bgImage.jpg" alt="Unable to load image">
    <div class="container">
        <h1>Welcome to Google Developer's DevFest Application Form</h1>
        <p>
            Enter Your Details to confirm your seat.
        </p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name: ">
            <input type="text" name="Age" id="age" placeholder="Enter Your Age: ">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender: ">
            <input type="email" name="email" id="email" placeholder="Enter Your E-Mail: ">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number: ">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Please describe your technical skills: "></textarea>

            <button class="btn">Submit</button>
            <button class="btn">Reset</button>

        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>


