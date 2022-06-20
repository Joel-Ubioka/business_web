<?php

if(mysqli_num_rows($select_admin) == 0)
{
   header('location: dashboard.php?file=home.php&title=home') ;    
}
else
{

// Delete User
if(isset($_GET['delete_id']))
{
        $delete_id = $_GET['delete_id'];
        $delete_user = mysqli_query($conn, "DELETE FROM users WHERE id=' $delete_id'");
        if( $delete_user)
        {
                echo "<p style='color:green'>Successfully Deleted</p>";
        }
        else
        {
                echo "<p style='color:red'>Failed!</p>";
        }
}

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
        echo "<th>Make Admin</th>";
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
        echo "<td><img src='images/profile/$profile'></td>";
        echo "<td>$date</td>";
        echo "<td>$time</td>";
        echo "<td><a href='#'><button class='status_button' data-table='users' data-columm='status' data-id='$id' data-status='Admin'>Make Admin</button></a></td>";
        echo "<td><a href='dashboard.php?file=edit_user.php&title=users&edit_id=$id'><button class='edit_button'>Edit</button></a></td>";
        echo "<td><a href='dashboard.php?file=users.php&title=users&delete_id=$id'><button class='delete_button'>Delete</button></a></td>";
        echo "</tr>";
        $sn++;

}
   
       echo "</table>";        

  
}
else
{
        header("location: index.php");
}
}