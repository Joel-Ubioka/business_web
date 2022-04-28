<?php

if(isset($_POST['register']))
{
    require "../config/config.php";
    $full_name = trim(mysqli_real_escape_string($conn, $_POST['full_name']));
    $phone_number = trim(mysqli_real_escape_string($conn, $_POST['phone_number']));
    $email = trim(mysqli_real_escape_string($conn, $_POST['email']));
    $password = trim(mysqli_real_escape_string($conn, $_POST['password']));
    $confirm_password = trim(mysqli_real_escape_string($conn, $_POST['confirm_password']));


    date_default_timezone_set("Africa/Lagos");
    $date = date(" M d  Y");
    $time = date("h:ia");
    
    if($password == $confirm_password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $insert = mysqli_query($conn, "INSERT INTO  users(full_name, phone_number, email, password, date, time) VALUES('$full_name', '$phone_number', '$email', '$password', '$date', '$time') ");
        
        if(!$insert)
        {
            header('location: ../register.php?error=failed');
        }
        else
        {
            header('location: ../register.php?error=success');
        }
    }
    else
    {
        header('location: ../register.php?error=wrong-password');
    }
}