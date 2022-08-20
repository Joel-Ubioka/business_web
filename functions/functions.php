<?php


// FETCH ALL POSTS
function fetch_comments($id)
{
    global $conn;
    
    $select = mysqli_query($conn, "SELECT * FROM comments WHERE post_id='$id'");
    if(mysqli_num_rows($select) > 0 )
    {
        $result = "";
        
                while($row = mysqli_fetch_array($select))
                {
        
                            $id = $row['id'];
                            $name = $row['name'];
                            $comment = $row['comment'];
                            $datetime = $row['datetime'];

                            $result .= "
                            
                            <div class='comment_content'>
                            <div class='comment_img'>
                                    <img src='./images/profile/profile.png' >
                            </div>
                            <div class='comment_text'>
                                    <p>$comment</p>
                                    <small>$name</small>
                            </div>
                    </div>

                        ";
        
                }
        return $result; 
      
    }
}




// FETCH ALL POSTS
function fetch_single_post_img($id)
{
    global $conn;
    
    $select = mysqli_query($conn, "SELECT * FROM posts WHERE id='$id' && post_status='Published'");
    if(mysqli_num_rows($select) > 0 )
    {
        $result = "";
        
                $row = mysqli_fetch_array($select);
        
                $post_image = $row['post_image'];
               

                $result .= "
                
                <img src='./images/post_images/$post_image'>

            ";
        
        
        return $result; 
      
    }
}


// FETCH ALL POSTS
function fetch_single_post($id)
{
    global $conn;
    
    $select = mysqli_query($conn, "SELECT * FROM posts WHERE id='$id' && post_status='Published'");
    if(mysqli_num_rows($select) > 0 )
    {
        $result = "";
        
                $row = mysqli_fetch_array($select);
        
                $id = $row['id'];
                $post_title = $row['post_title'];
                $post_category_id = $row['post_category_id'];
                $post_author = $row['post_author'];
                $post_content = $row['post_content'];
                $post_image = $row['post_image'];
                $post_status = $row['post_status'];
                $datetime = $row['datetime'];

                $result .= "
                
                <h1 class='single_news_head'>$post_title</h1>
                <small>By  $post_author, </small>
                <small>2 hours ago</small>
                <p>$post_content</p>

            ";
        
        
        return $result; 
      
    }
}






// FETCH ALL POSTS
function fetch_siderbar_posts()
{
    global $conn;
    
    $select = mysqli_query($conn, "SELECT * FROM posts WHERE post_status='Published' ORDER BY id DESC LIMIT 5");
    if(mysqli_num_rows($select) > 0 )
    {
        $result = "";
        
        while($row = mysqli_fetch_array($select))
        {
                $id = $row['id'];
                $post_title = $row['post_title'];
                $post_category_id = $row['post_category_id'];
                $post_author = $row['post_author'];
                $post_content = $row['post_content'];
                $post_image = $row['post_image'];
                $post_status = $row['post_status'];
                $datetime = $row['datetime'];

                $result .= "
                
                        <div class='post_container_sidebar'>

                                <div class='sidebar_post_img'>
                                        <img src='./images/post_images/$post_image'>
                                </div>
                                <div class='sidebar_post_content'>
                                        <h4>$post_title</h4>
                                        <small>By $post_author, </small>
                                        <small>2 hours ago</small>
                        
                                        <a href='single_news.php?id=$id'><button class='sidebar_read_more'>Read More</button></a>
                                </div>
                        </div>

            ";
        }
        
        return $result; 
      
    }
}






// FETCH ALL POSTS
function fetch_all_posts()
{
    global $conn;
    
    $select = mysqli_query($conn, "SELECT * FROM posts WHERE post_status='Published' ORDER BY id DESC LIMIT 10");
    if(mysqli_num_rows($select) > 0 )
    {
        $result = "";
        
        while($row = mysqli_fetch_array($select))
        {
                $id = $row['id'];
                $post_title = $row['post_title'];
                $post_category_id = $row['post_category_id'];
                $post_author = $row['post_author'];
                $post_content = $row['post_content'];
                $post_image = $row['post_image'];
                $post_status = $row['post_status'];
                $datetime = $row['datetime'];

                $result .= "
                
                        <div class='post_container'>

                                <div class='post_img'>
                                        <img src='./images/post_images/$post_image' >
                                </div>
                                <div class='post_content'>
                                        <h2 class='blog_head'>$post_title</h2>
                                        <small>By  $post_author, </small>
                                        <small>2 hours ago</small>
                                        <p> $post_content </p>
                                        <a href='single_news.php?id=$id'><button class='read_more'>Read More</button></a>
                                </div>
                        </div>
                            
            ";
        }
        
        return $result; 
      
    }
}



// GET POST CATEGORy ID
function get_post_category_id($post_category)
{
    global $conn;
    
    $select = mysqli_query($conn, "SELECT * FROM post_categories WHERE post_category='$post_category'");
    if(mysqli_num_rows($select) > 0 )
    {
   
        $row = mysqli_fetch_array($select);
        $id = $row['id'];
       
        
        return $id;
    }
}





// FETCH POST CATEGORIES
function fetch_post_categories()
{
    global $conn;
    
    $select = mysqli_query($conn, "SELECT * FROM post_categories");
    if(mysqli_num_rows($select) > 0 )
    {
        $result = "";
        while($row = mysqli_fetch_array($select))
        {  
            $post_category = $row['post_category'];
            $result.= "<option value=' $post_category'> $post_category</option>";
        }
        return $result;
    }
}













// GET DASHBOARD PAGE TITLE
function get_title()
{
    if(isset($_GET['title']))
    {
        $title = $_GET['title'];
        $title = str_replace('-', ' ',$title );
        $title=  ucwords(strtolower($title));
      // $title=  strtoupper($title);
        return $title;
    } 
    else 
    {
        return "DASHBOARD";
    }
}

// INCLUDE FILES TO  THE DASHBOARD
function get_files()
{
    global $email, $conn, $select_admin;
    
    if(isset($_GET['file']))
    {
        $file = $_GET['file'];
        include "includes/$file";
       
    } 
    else 
    {
        include "includes/home.php";
    }
}