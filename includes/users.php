<?php

$select = mysqli_query($conn, "SELECT * FROM users");

if(mysqli_num_rows($select)>0)
{

        echo "<table class='table_format' border = '1'>";
        echo "<tr>";
        echo "<th>S/N</th>";
        echo "<th>ID</th>";
        echo "<th>Full Name</th>";
        echo "<th>Email</th>";
        echo "<th>Phone Number</th>";
        echo "<th>Proflie</th>";
        echo "<th>Date Registered</th>";
        echo "<th>Time Registered</th>";
        echo "<th>Edit</th>";
        echo "<th>Delete</th>";
        echo "</tr>";
       
        
        $sn = 1;
        
   while($row = mysqli_fetch_array($select)) 
 {
     
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
        echo "<tr>";
        echo "<td>$sn</td>";
        echo "<td>$id</td>";
        echo "<td>$full_name</td>";
        echo "<td>$email</td>";
        echo "<td>$phone_number</td>";
        echo "<td>$profile</td>";
        echo "<td>$date</td>";
        echo "<td> $time</td>";
        echo "<td><button class='edit_button'>Edit</button></td>";
        echo "<td><button class='edit_button'>Delete</button></td>";
        echo "</tr>";
        $sn++;

}
   
       echo "</table>";        

  
}
else
{
        header("location: index.php");
}