<?php
include __DIR__."/../core/functions.php";
include __DIR__."/../database/info.php";

// Check if the user_id is set in the URL
if (!isset($_GET['user_id'])) {
    die("User ID not provided.");
}
$id=$_GET['user_id'];
delete_post($id);


