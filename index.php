<?php
$insert = false;
if (isset($_POST['name'])){
    $server = 'localhost';
    $username = 'root';
    $password ="";


    $con = mysqli_connect($server, $username, $password);
    if (!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
   // echo "success Connecting to the db"
   

   $name = $_POST['name'];
   $gender = $_POST['gender'];
   $age = $_POST['age'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $other = $_POST['desc'];
   $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
   //echo $sql;

   if($con->query($sql) == true){
       //echo "successfully inserted";
       $insert =true;
   }
   else{
       echo "not inserted due to" . mysqli_connect_error();
   }

   $con-> close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Welcome to travel form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
</head>

<body>
    <img class="bg" src="bg.jpg" alt="IIT KPG">
    <div class="container">
        <h1>Welcome to travel form for us</h1>
        <p>Enter your details and submit this form to confrim your perticipation</p>
        <?php
        if ($insert == true) {
        echo "<p class='submitmsg'>Thanks for submitting your form. We are happy to have you with us</p>";
        }
        ?>
        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="email" name="email" id="email" placeholder="enter your email">
            <input type="phone" name="phone" id="phone" placeholder="enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>