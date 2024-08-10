<?php
include 'config/connection.php';
session_start();
// session_destroy();

if (!empty($_POST['token'])) {
    if (hash_equals($_SESSION['token'], $_POST['token'])) {
        // 
        $name = $_POST['name'];
        $Phone = $_POST['Phone'];
        $email = $_POST['email'];
        $town = $_POST['town'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if($password != $cpassword){
            echo "Password doesn't match!";
        }
        $selects = $_POST['selects'];

        // insert into database
        $insert_query = mysqli_prepare($con, "INSERT INTO event_db(name,phone,email,town,password,selects) VALUES (?,?,?,?,?,?)");
         mysqli_stmt_bind_param($insert_query, "ssssss", $name, $Phone, $email, $town, $password, $selects);
         mysqli_stmt_execute($insert_query);
         echo "<script>alert('inserted successfuly!'); windows.location='index.php'</script>";

       /* echo $name." ";
        echo $Phone." ";
        echo $email." ";
        echo $town." ";
        echo $password." ";
        echo $cpassword." ";
        echo $select." ";*/

    }else{
        echo "<script>alert('Token is invalid!'); windows.location='index.php'</script>";
    }
}else{
    echo "<script>alert('Token is empty, Please reload the page!'); windows.location='index.php'</script>";
}