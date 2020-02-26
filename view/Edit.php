<?php
include '../controller/userController.php';
$conn = new userController();
$userid= $_GET['id'];
$select_edit = $conn->Edit($userid);
$row =mysqli_fetch_array($select_edit);

$update =$conn->Update();
?>
<html>
<head>
    <title>
        Edit page
    </title>
</head>
    <body>
        <center>
            <form method="post" action="">
                <input type="text" name="fname" placeholder="Firstname" value="<?php echo $row['fname'];?>"><br>
                <input type="text" name="lname" placeholder="Firstname" value="<?php echo $row['lname'];?>"><br>
                <input type="text" name="uname" placeholder="Firstname" value="<?php echo $row['username'];?>"><br>
                <input type="password" name="upass" placeholder="Firstname" value="<?php echo $row['password'];?>"><br>
                <input type="email" name="email" placeholder="Firstname" value="<?php echo $row['email'];?>"><br>
                <input type="submit" name="btn-update" value="Update">
            </form>
        </center>
    </body>
</html>