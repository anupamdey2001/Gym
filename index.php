<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $locality = $_POST['locality'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 

    echo "Hello" . $name;
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anupam's Fitness</title>
    <script src="https://kit.fontawesome.com/cfb015dace.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <div class="left">
            <i class="fas fa-dumbbell"></i>
            <div>ANUPAM'S FITNESS</div>
        </div>
        <div class="mid">
            <ul class="navber">
                <li> <A class="active" href="#">HOME </A></li>
                <li> <A href="#"> ABOUT </A></li>
                <li> <A href="#"> CONTACT US </A></li>
                <li> <A href="#"> FITNESS <i class="fas fa-calculator"></i> </A></li>
            </ul>
        </div>
        <div class="right">
            <button class="btn"><i class="fas fa-phone-volume"></i></button>
            <button class="btn"><i class="fas fa-envelope"></i></button>
        </div>
    </header>
    <div class="container">
        <h1>Join The Best Gym of<strong> BARRACKPORE </strong>NOW</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your Name">
            </div>
            <div class="form-group">
                <input type="number" name="age" placeholder="Enter your Age">
            </div>
            <div class="form-group">
                <input type="text" name="gender" placeholder="Enter your Gender">
            </div>
            <div class="form-group">
                <input type="text" name="locality" placeholder="Enter your Locality">
            </div>
            <div class="form-group">
                <input type="number" name="weight" placeholder="Enter your Weight">
            </div>
            <div class="form-group">
                <input type="number" name="height" placeholder="Enter your Height">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your Emali Id">
            </div>
            <div class="form-group">
                <input type="number" name="phone" placeholder="Enter your Phone No.">
            </div>
            <button type="submit" class="btn">Submit <i class="fas fa-share-square"></i></button>
        </form>
    </div>
</body>

</html>