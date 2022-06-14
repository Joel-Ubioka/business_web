<?php
session_start();
 require "includes/dashboard_header.php"; 
 require "functions/functions.php";
 require "config/config.php";

 if(isset($_SESSION['email']))
 {
        $email = $_SESSION['email'] ;   
 }
 else
 {
        header('location: index.php');
 }

  ?>

<body>

        <div class="nav_container">
                <div class="logo_container">
                        <img src="./images/MORRHTECH SOLUTIONS_free-file.png" alt="">
                </div>
                <div class="logout_container">
                        <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                </div>
        </div>

        <div class="main_container">
                <div class="sidebar">
                        <div class="sidebar_menu">
                                <i class="fa-solid fa-house-chimney"></i><a
                                        href="dashboard.php?file=home.php&title=home">Home</a>
                        </div>

                        <div class="sidebar_menu">
                                <i class="fa-solid fa-user"></i><a
                                        href="dashboard.php?file=profile.php&title=profile">Profile</a>
                        </div>

                        <div class="sidebar_menu">
                                <i class="fa-solid fa-users"></i><a
                                        href="dashboard.php?file=users.php&title=users">Users</a>
                        </div>
                        <div class="sidebar_menu">
                                <div class="menu_item">
                                        <i class="fa-solid fa-envelopes-bulk"></i><a href="#">Post</a>
                                </div>
                                <div class="dropdown">
                                        <div class="dropdown_menu">
                                                <i class="fa-solid fa-angle-right"></i><a
                                                        href="dashboard.php?file=add_post.php&title=post">Add
                                                        New Post</a>
                                        </div>
                                        <div class="dropdown_menu">
                                                <i class="fa-solid fa-angle-right"></i><a
                                                        href="dashboard.php?file=view_post.php&title=view-post">View
                                                        Post</a>
                                        </div>

                                </div>
                        </div>


                        <div class="sidebar_menu">


                                <div class="menu_item">
                                        <i class="fa-brands fa-product-hunt"></i><a href="#">Products</a>
                                </div>
                                <div class="dropdown">
                                        <div class="dropdown_menu">
                                                <i class="fa-solid fa-angle-right"></i><a
                                                        href="dashboard.php?file=add_product.php&title=products">Add New
                                                        Product</a>
                                        </div>
                                        <div class="dropdown_menu">
                                                <i class="fa-solid fa-angle-right"></i><a
                                                        href="dashboard.php?file=view_products.php&title=products">View
                                                        Products</a>
                                        </div>

                                </div>
                        </div>

                        <div class="sidebar_menu">
                                <i class="fa-solid fa-bell"></i><a
                                        href="dashboard.php?file=notification.php&title=notifications">Notifications</a>
                        </div>

                        <div class="sidebar_menu">
                                <i class="fa-solid fa-comment-dots"></i><a
                                        href="dashboard.php?file=comments.php&title=comments">Comments</a>
                        </div>

                        <div class="sidebar_menu">
                                <i class="fa-solid fa-video"></i><a
                                        href="dashboard.php?file=tutorials.php&title=tutorials">Tutorials</a>
                        </div>

                        <div class="sidebar_menu">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i><a href="logout.php">Logout</a>
                        </div>


                </div>
                <div class="main_body">

                        <div class="title_container">
                                <h2>
                                        <?php echo get_title(); ?></h2>
                        </div>
                        <div class="main_content">
                                <div class="message_container">
                                        <span class="success_msg"></span>
                                        <span class="fail_msg"></span>
                                </div>
                                <?php 
                                
                                 get_files();
                                  ?>
                        </div>

                </div>
        </div>

        <script src="./javascripts/jquery.js"></script>
        <script src="./javascripts/dashboard_script.js"></script>
</body>

</html>