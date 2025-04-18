<?php
include __DIR__."/../core/functions.php";
include __DIR__."/../database/info.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_id=$_POST['post_id'];
    $title=$_POST['title'];
    $content=$_POST['content'];

    $res=update_post($post_id,$title,$content);
    if ($res==true) 
    {
        header("location:../home.php");
        exit;
    }
    else{
        echo "error in edit";
        header("location:../edit.php");
        exit;

    }



    
}
