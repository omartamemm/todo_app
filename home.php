<?php
include "database/info.php";
include "core/functions.php";
session_start();
if(isset($_SESSION['message'])){
  show_message();
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

        <form class="mb-4" action="handel/add_post.php" method="POST">

        <input type="hidden" name="user_id" value="3"> 

            <div class="form-group">
                <input type="text" name="title">
            </div>

            <div class="form-group">
                <input type="text" name="content">
            </div>
            <input class="btn btn-primary" type="submit" value="ADD">

        </form>

        <div class="task-list">
            <?php

            echo show_posts();

            ?>
           


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>