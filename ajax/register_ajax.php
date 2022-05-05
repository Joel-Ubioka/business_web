<?php
require "../config_ajax/config.php";
$full_name = trim(mysqli_real_escape_string($conn, $_POST['full_name']));
$email = trim(mysqli_real_escape_string($conn,$_POST['email']));

$insert = mysqli_query($conn, "INSERT INTO students (full_name, email) VALUES('$full_name', '$email')");

if($insert)
{
    echo "Successfully Registered!";
}
else
{
    echo "failed!";
}