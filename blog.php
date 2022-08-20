<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Business_Website</title>
        <link rel="stylesheet" href="css/style.css">
</head>

<?php 
require "includes/header2.php"; 
require "config/config.php"; 
require "functions/functions.php";


?>

<body>

        <!-- <div class="title">Latest News About Morrhtech Solutions</div> -->
        <div class="main_container">

                <div class="main_body">

                        <?php echo fetch_all_posts(); ?>



                </div>
                <div class="sidebar">
                        <?php require "includes/sidebar.php"; ?>
                </div>

        </div>

        <?php include "includes/footer.php"; ?>

        <script src="javascripts/script1.js"></script>
</body>

</html>