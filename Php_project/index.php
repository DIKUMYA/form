<?php

// include();
session_start();
if(empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Dikumya Konnect 2024</h2>

    <div class="container">
        <h3>Registration Form</h3>
        <form action="register.php" method="post" id="registe" enctype="multipart/form-data" autocomplete="off" >
            <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'] ?>"/>
            <input type="text" name="name" id="name" placeholder="Enter Fullname" value="Fullname" ><br>
            <input type="number" name="Phone" id="Phone" placeholder="Phone number" value="09887679697" ><br>
            <input type="email" name="email" id="email" placeholder="Example123@gmail.com" value="Example123@gmail.com" ><br>
            <input type="text" id="town" name="town" placeholder="Town\city" value="Sunyani" >
            <input type="password" name="password" id="password" placeholder="Password" value="Password" >
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" value="Confirm Password" >
            <select name="selects" id="">
                <option selected disabled>Select your gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <input type="submit" id="register" name="register" class="submit" value="Register">
        </form>
    </div>

    <!-- jQuery -->
     <script src="js/jquery.js" ></script>
     <!-- Bosstrap Core JavaScript -->
      <script src="js/bosstrap.min.js" ></script>
      <script src="js/bosstrap.js" ></script>
      <script src="js/register.js" ></script>

     
    
</body>
</html>