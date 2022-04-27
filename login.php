<!DOCTYPE html>
<html lang="en">
<?php require "includes/header1.php"; ?>

<body>
    <?php require "includes/header2.php"; ?>
    <div class="title">LOGIN</div>
    <div class="main_container">

        <div class="main_body">
            <div class="form_container">
                <form action="" method="POST">

                    <h2>Login</h2>

                    <div class="form_control">
                        <p>EMAIL :</p>
                        <input type="email" name="email" class="form_input" required>
                    </div>

                    <div class="form_control">
                        <p>PASSWORD :</p>
                        <input type="password" name="password" class="form_input" required>
                    </div>

                    <div class="form_control">
                        <input type="submit" name="login" class="form_button" value="Login">
                    </div>
                </form>
            </div>
        </div><br><br>


</body>

</html>