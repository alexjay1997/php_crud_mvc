<?php
include '../controller/userController.php';
$conn = new userController();
//select all
$read = $conn->select_all();
//--------------------
//insert
$create = $conn->Create();
//--------------------

$destroy_user = $conn->destroy_user();

?>
<html>
    <style>
        .tbl1{

            border:2px solid #eee;
            border-radius:10px;
            padding:3px;
           max-width:70%;
          height:400px;
            overflow: auto;
        }
        table{
            border-collapse:collapse;
            width:100%;

        }
   
        th,td{
            padding:10px;
            font-family: Calibri;
            font-style:none;
            color:;
            border-bottom:1px solid #ccc;
            text-align: center;
        }
  
        </style>
<body>
    <center>
<form method="post" action="">
<input type="text" name="fname" placeholder="Firstname"><br>
<input type="text" name="lname" placeholder="Lasttname"><br>
<input type="text" name="uname" placeholder="Username"><br>
<input type="password" name="upass" placeholder="Password"></br>
<input type="email" name="email" placeholder="Email"></br>
<input type="submit" name ="reg-btn" value="Submit">
</form>
<br>
<div class="tbl1">
<table >
<tr>
<th>Id</th><th>First Name</th><th>Last Name</th><th>User Name</th><th>Email</th><th>Actions</th>
</tr>
<?php
while($row=mysqli_fetch_array($read))
{
    ?>
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['fname']?></td>
    <td><?php echo $row['lname']?></td>
    <td><?php echo $row['username']?></td>
    <td><?php echo $row['email']?></td>
    <td><a href="Edit.php?id=<?php echo $row['id'];?>">Edit</a>&nbsp;&nbsp;<a href="index.php?id=<?php echo $row['id'];?>" onClick="return confirm('Delete User?')";>Delete</a></td>
    
</tr>
<?php
}

?>
</table>
</div>
</center>
</body>
</html>

