<?php
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