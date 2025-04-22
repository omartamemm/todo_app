<?php
session_start();
include __DIR__ . "/../database/info.php";

function show_posts()
{

    $sql = "SELECT * FROM `posts`";
    $reslut = mysqli_query($GLOBALS['conn'], $sql);

    if (mysqli_num_rows($reslut)) {
        while ($row = mysqli_fetch_assoc($reslut)) {

            echo "
            <div class='card mb-2'>
            <div class='card-body'>
                <h5 class='card-title'>{$row['title']}</h5>
                <p class='card-text'>{$row['content']}</p>
                <p class='card-text '><small class='text-danger'>Created at  : {$row['create_at']}</small></p>

                <a href='edit.php?post_id={$row['id']}' class='btn btn-warning btn-sm'>EDIT</a>

                <a href='handel/delete_post.php?user_id={$row['user_id']}' class='btn btn-danger btn-sm'>DELETE</a>
            </div>
        </div>
       
            
            
            ";

        }

    }


}

function delete_post($id)
{
    $sql = "DELETE FROM `posts` WHERE `user_id` = {$id}";
    $reslut = mysqli_query($GLOBALS['conn'], $sql);
    if ($reslut) {
        header("location: ../home.php");
        exit;
    } else {
        echo "error";
    }
}


function fetch_post($id)
{
    $sql = "SELECT * FROM `posts` WHERE id ='$id'";
    $result = mysqli_query($GLOBALS['conn'], $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;


}

function update_post($post_id, $title, $content)
{
    $sql = "UPDATE `posts` SET title ='$title' ,content ='$content', create_at=now()  WHERE id='$post_id' ;";
    $res = mysqli_query($GLOBALS['conn'], $sql);
    if ($res) {
        return true;
        
    } else {
        echo false;
    }


}


function message($type,$text){

   $_SESSION['message']=[
    'type'=>$type,
    'text'=>$text
   ];

}


function show_message(){
    if(isset($_SESSION['message'])){
        $type=$_SESSION['message']['type'];
        $text=$_SESSION['message']['text'];
        echo "<div class='alert alert-$type'> $text</div>";
        unset($_SESSION['message']);
    }
}