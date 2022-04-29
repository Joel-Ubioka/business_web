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

    //check if the email or phone number already exist
    
    $check_user = mysqli_query($conn, "SELECT * FROM users where email = '$email' OR phone_number = '$phone_number'");
    if(mysqli_num_rows($check_user) > 0)
    {
        header('location: ../register.php?error=user-exist');
    }
    else
    {
    
        if($password == $confirm_password)
        {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert = mysqli_query($conn, "INSERT INTO  users(full_name, phone_number, email, password, date, time) VALUES('$full_name', '$phone_number', '$email', '$hashed_password', '$date', '$time') ");
            
            if(!$insert)
            {
                header('location: ../register.php?error=failed');
            }
            else
            {
                //header('location: ../register.php?success');
                header('location: ../login.php');
            }
        }
            else
            {
                header('location: ../register.php?error=wrong-password');
            }
    }
}