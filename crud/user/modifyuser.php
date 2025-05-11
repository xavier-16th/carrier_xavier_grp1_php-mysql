<?php
$user_id = $_GET['id'];
if (isset($_POST['send'])) {// check if the form is submitted
    if (isset($_POST['username']) && // check if the username and emailis set
        isset($_POST['email']) &&
        $_POST['username'] != "" &&// check if the username and email is not empty
        $_POST['username'] != ""
    ) {
        include_once '../connect_ddb.php';//
        extract($_POST);

        $sql = "UPDATE user SET username = '$username', email = '$email' WHERE user_id = $user_id";// update the user in the database
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
    <?php
    include_once '../connect_ddb.php';

    //list of user info
    $sql = "SELECT *  FROM user where user_id = $user_id";
    $result = mysqli_query($conn, $sql);// get the user info from the database
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
    




<form action="" method="POST">
    <h1> modify a user </h1>
    <input type="text" name="username" value= "<?=$row ['username'] ?>" placeholder="username" required>
    <input type="text" name="email" value="<?=$row ['email'] ?>"placeholder="Email" required>
    <input type="submit" value="modify" name="send"> 
    <a class="link back" href="http://localhost:8888/crud/user%20/showuser.php">Back</a>
</form>
<?php
    }
    ?>



</body>
</head> 