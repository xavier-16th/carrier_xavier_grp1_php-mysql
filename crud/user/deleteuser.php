<?php
$user_id = $_GET['id'];
include_once '../connect_ddb.php';
// delete user
$sql = "DELETE FROM user WHERE user_id = $user_id";// delete user from the database
if (mysqli_query($conn, $sql)) {
    header("location:showuser.php?");// redirect to showuser.php
} else {
    header("location:showuser.php? ");
}