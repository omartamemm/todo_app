<?php
include __DIR__."/../database/info.php";

function show_posts(){

    $sql = "SELECT * FROM `posts`";
    $reslut=mysqli_query($GLOBALS['conn'],$sql);

    if (mysqli_num_rows($reslut)) {
        while ( $row=mysqli_fetch_assoc($reslut)  ) {
            
            echo "
            <div class='card mb-2'>
            <div class='card-body'>
                <h5 class='card-title'>{$row['title']}</h5>
                <p class='card-text'>{$row['content']}</p>

                <a href='' class='btn btn-warning btn-sm'>EDIT</a>

                <a href='handel/delete_post.php?user_id={$row['user_id']}' class='btn btn-danger btn-sm'>DELETE</a>
            </div>
        </div>
       
            
            
            ";
            
        }

    }

    
}

function delete_post($id){
    $sql = "DELETE FROM `posts` WHERE `user_id` = {$id}";
    $reslut=mysqli_query($GLOBALS['conn'],$sql);
    if ($reslut) {
        header("location: ../home.php");
        exit;
    }else{
        echo "error";
    }
}


