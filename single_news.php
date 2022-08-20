<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Business_Website</title>
        <link rel="stylesheet" href="css/style.css">

        <?php 
                session_start();
                require "includes/header1.php"; 
                require "config/config.php"; 
                require "functions/functions.php";


                if(isset($_GET['id']))
                {
                     $id = $_GET['id'];  
                     $_SESSION['post_id'] = $id;
                }
                else
                {
                        header('location: blog.php');
                        exit();
                }


?>
</head>

<body>
        <?Php require "includes/header2.php"; ?>
        <!-- <div class="title">Latest News About Morrhtech Solutions</div> -->
        <div class="main_container">

                <div class="main_body">

                        <div class="single_news_container">

                                <div class="post_img">
                                        <?php echo fetch_single_post_img($id); ?>
                                        <!-- <img src="./images/blog1.png" alt="">-->
                                </div>
                                <div class="single_post_content">
                                        <?php fetch_single_post($id); ?>

                                        <!--    COMMENT SECTION -->
                                        <div class="comment_container">
                                                <h3>COMMENTS</h3>

                                                <?php echo fetch_comments($id); ?>


                                                <div class="message_container">
                                                        <span class="success_msg"></span>
                                                        <span class="fail_msg"></span>
                                                </div>


                                                <div class="comment_form">
                                                        <form method="POST" id="comment_form">
                                                                <h3>Post Your Comments</h3>
                                                                <div class="input_box">
                                                                        <label for="name">YOUR NAME</label>
                                                                        <input type="text" name="name"
                                                                                class="form_input" id="name">
                                                                </div>

                                                                <div class="input_box">
                                                                        <label for="email">YOUR EMAIL</label>
                                                                        <input type="email" name="email"
                                                                                class="form_input" id="email">
                                                                </div>

                                                                <div class="input_box">
                                                                        <label for="comment">YOUR
                                                                                COMMENT</label>
                                                                        <textarea name="comment" id="comment"
                                                                                class="form_input" cols="20"
                                                                                rows="15"></textarea>
                                                                </div>
                                                                <input type="hidden" name="post_id" id="post_id"
                                                                        value="<?php echo  $id; ?>">
                                                                <div class="input_box">
                                                                        <button type="submit" name="submit"
                                                                                id="post_comment"
                                                                                class="form_button">Post
                                                                                Comment</button>
                                                                </div>


                                                        </form>

                                                </div>
                                        </div>
                                </div>
                        </div>




                </div>
                <div class="sidebar">
                        <?php require "includes/sidebar.php"; ?>
                </div>
        </div>

        <?php include "includes/footer.php"; ?>

        <script src=" javascripts/script1.js"></script>
</body>

</html>