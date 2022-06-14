<?php

$select = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

if(mysqli_num_rows($select)>0)
{
     $row = mysqli_fetch_array($select); 
     $id = $row['id'];
     $full_name = $row['full_name'];
     $email = $row['email'];
     $phone_number = $row['phone_number'];
     $profile = $row['profile'];
     $date = $row['date'];
     $time = $row['time'];

     if(empty($profile))
     {
        $profile = "profile.png";
     }
     else
     {
        $profile =$profile;
     }

     echo "
        <div class='profile_frame'>
        <img src='images/profile/$profile'>
        </div>
     ";
     echo "<table class='table_format' border = '1'>";
     echo "<tr>
                <td>NAME</td>
                <td>$full_name</td>
         </tr>";
         echo "<tr>
                <td>EMAIL</td>
                <td>$email</td>
         </tr>";
         echo "<tr>
                 <td>PHONE NUMBER</td>
                <td>$phone_number</td>
        </tr>";
        echo "<tr>
                 <td>DATE REGISTERED</td>
                <td>$date</td>
        </tr>";
        echo "<tr>
                <td>TIME REGISTERED</td>
                <td>$time</td>
        </tr>";
        
         
     echo "</table>";


     echo "
     <a href='dashboard.php?file=edit_profile.php&title=edit-profile&edit_id=$id' class='edit_profile_link'><button class ='primary_button'>Edit Profile</button></a>
    " ;
}
else
{
        header("location: index.php");
}