<!DOCTYPE html>
<html lang="en">
<?php require "includes/header1.php"; ?>

<body>
    <?php require "includes/header2.php"; ?>
    <div class="title">REGISTER</div>
    <div class="main_container">

        <div class="main_body">
            <div class="form_container">
                <form action="./funtions/reg_function.php" method="POST">

                    <h2>Register</h2>

                    <div class="form_control">
                        <p>FULL NAME :</p>
                        <input type="text" name="full_name" class="form_input" required>
                    </div>

                    <div class="form_control">
                        <p>PHONE NUMBER :</p>
                        <input type="tel" name="phone_number" class="form_input" required>
                    </div>

                    <div class="form_control">
                        <p>EMAIL :</p>
                        <input type="email" name="email" class="form_input" required>
                    </div>

                    <div class="form_control">
                        <p>PASSWORD :</p>
                        <input type="password" name="password" class="form_input" required>
                    </div>

                    <div class="form_control">
                        <p>CONFIRM PASSWORD :</p>
                        <input type="password" name="confirm_password" class="form_input" required>
                    </div>

                    <div class="form_control">
                        <input type="submit" name="register" class="form_button" value="Register">
                    </div>
                </form>
            </div>
        </div><br><br>


</body>

</html>