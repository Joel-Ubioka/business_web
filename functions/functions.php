<?php


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