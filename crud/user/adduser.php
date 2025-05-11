<?php
if(isset($_POST['send'])) {// check if the form is submitted
  if(isset($_POST['username']) && // check if the username and emailis set
   isset($_POST['email'])&&
   $_POST['username'] !="" &&// check if the username and email is not empty
   $_POST['username'] !=""  
   ){
    include_once '../connect_ddb.php';//
    extract($_POST);

    $sql = "INSERT INTO user (username, email) VALUES ('$username', '$email')";// insert the user into the database
    if (mysqli_query($conn, $sql)) {// if add is successful than redirect to showuser.php if not redirect to adduser.php
        header("location:showuser.php");
    } else {
        header("location:adduser.php");
    }
}
}
?>
  






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../all.css">
</head>
<body>
 
<form action="" method="POST">
    <h1> add a user </h1>
    <input type="text" name="username" placeholder="username" required>
    <input type="text" name="email" placeholder="Email" required>
    <input type="submit" value="Add User" name="send"> 
    <a class="link back" href="http://localhost:8888/crud/user%20/showuser.php">Back</a>
</form>








</body>
</html>