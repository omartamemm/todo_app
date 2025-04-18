<?php
include "database/info.php";
include "core/functions.php";

if (isset($_GET['post_id'])) {
    $post_id=$_GET['post_id'];
    // echo $post_id;
    $row= fetch_post($post_id);
    print_r($row);
 

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 20px;
        }

        .task-list {
            margin-top: 20px;
        }

        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="text-center mb-4">To-Do App</h1>

        <form class="mb-4" action="handel/edit_post.php" method="POST">
            <input type="hidden" name="post_id" value="<?=$post_id?>">    


            <input type="hidden" name="post_id" value="<?=$row['id']?>">

            <div class="form-group">
                <input type="text" name="title" value="<?=$row['title']?>">
            </div>

            <div class="form-group">
                <input type="text" name="content" value="<?=$row['content']?>">
            </div>
            <input type="submit" value="Update">

        </form>
    </div>
</body>