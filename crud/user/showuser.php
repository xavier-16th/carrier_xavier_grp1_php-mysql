<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../all.css">
</head>
<body>
    
<main>
    <div classe="link_container">
        <a class="link" href="adduser.php">Add User</a>
        


    </div>
    <table>
        <thead>
        <?php
        include_once '../connect_ddb.php';
        // liste of users
        $sql = "SELECT * FROM user"; 
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        // show the users 
        ?>

            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>modify</th>
                <th>remove</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?=$row['username'] ?></td>
                <td><?=$row['email'] ?></td>
                <td classe = "image"> <a href="modifyuser.php?id=<?=$row['user_id']?>"><img src="../images /write.jpg" alt=""></a></td>
                <td classe = "image"> <a href="deleteuser.php?id=<?=$row['user_id']?>"><img src="../images /remove.jpg" alt=""></a></td>

            <?php
        }
        } else {
            echo "<p classe='message'>0 users found ! </p>";
        }
        ?>           
                    
        </tbody>
    </table>
</main>
</body>
</head> 
