<?php
session_start();
include __DIR__."/core/functions.php";
include __DIR__."/../database/info.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    

    $user_id=$_POST['user_id'];
    $title=$_POST['title'];
    $content=$_POST['content'];
    echo $title;
    if($title=="" || $content==""){
        $_SESSION['message']['type']="danger";
        $_SESSION['message']['text']="empty field";
      
         header("location:../home.php");
        exit;


          
    }

    $sql = "INSERT INTO `posts` (title,content,user_id)VALUES('$title','$content','$user_id');";
    mysqli_query($GLOBALS['conn'],$sql);
    $res=mysqli_affected_rows($conn);

    if ($res==1) {
        echo "done";
        
        header("location:../home.php");
        exit;
    }

    else{
        echo "eror cant add";
    }

}
?>