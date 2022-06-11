<?php
if(isset($_GET['edit_id']))
{
        $id= $_GET['edit_id'];
        $_SESSION['id'] = $id;
        
$select = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");

if(mysqli_num_rows($select)>0)
{
     $row = mysqli_fetch_array($select); 
     $full_name = $row['full_name'];
     $email = $row['email'];
     $phone_number = $row['phone_number'];

}
}
else
{
        header('location:http://localhost/busness_website/dashboard.php?file=home.php&title=home');
}

?>
<form action="#" method="POST" id="profile_update_form">
        <div class="form_control">
                <p>FULL NAME :</p>
                <input type="text" name="full_name" id="full_name" class="form_input"
                        value="<?php echo "$full_name"; ?>" required>
        </div>

        <div class="form_control">
                <p>PHONE NUMBER :</p>
                <input type="tel" name="phone_number" id="phone_number" class="form_input"
                        value="<?php echo "$phone_number"; ?>" required>
        </div>

        <div class="form_control">
                <p>EMAIL :</p>
                <input type="email" name="email" id="email" class="form_input" value="<?php echo "$email"; ?>" required>
        </div>

        <div class="form_control">
                <p>UPLOAD PROFILE IMAGE (ALLOWED: *.jpg , *.png)</p>
                <input type="file" name="profile" id="profile_img" required>
        </div>

        <div class="form_control">
                <input type="submit" name="register" class='primary_button' id="profile_update_button" value="Update">
        </div>
</form>