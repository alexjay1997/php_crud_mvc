<?php
include '../model/dbh.php';
class userController extends UserModel{

public function __construct()
{
    $this->db_connection();
}

public function Create(){

  if(isset($_POST['reg-btn'])){
    
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $uname= $_POST['uname'];
        $upass= $_POST['upass'];
        $email= $_POST['email'];

        //check if already exist

        $check ="Select * from tbl_users where username ='$uname' || email='$email'";
        $result_check = mysqli_query($this->connection,$check);
        
        if(mysqli_num_rows($result_check) > 0){

          echo "<script>alert('already exist');</script>";
          echo "<script>window.location.href='../view/index.php'</script>";
        }

        else{

        $query ="Insert into tbl_users (fname,lname,username,password,email) values ('$fname','$lname','$uname','$upass','$email')";
        $result=mysqli_query($this->connection,$query);
       
        header('location:../view/index.php');
        
        return $result;
        }

    }

}

public function Edit($userid){

$query = "Select * from tbl_users where id ='$userid'";
$result = mysqli_query($this->connection,$query);
return $result;

}

public function Update(){

  if(isset($_POST['btn-update'])){

    $userid = $_GET['id'];

    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $uname =$_POST['uname'];
    $upass =$_POST['upass'];
    $email =$_POST['email'];
    
    $query ="Update tbl_users set fname='$fname',lname='$lname',username='$uname',password='$upass',email='$email' where id  ='$userid'";
    $result=mysqli_query($this->connection,$query);

    header('location:../view/index.php');
    return $result;
  }


}

public function destroy_user(){

  if(isset($_GET['id'])){
    $userid =$_GET['id'];
    $destroy_query ="Delete from tbl_users where id ='$userid'";
    $result =mysqli_query($this->connection,$destroy_query);
    
    header('location:../view/index.php');
    return $result;

  }
}

public function select_all(){
    $query ="Select * from tbl_users";
    $result =mysqli_query($this->connection,$query);
    return $result;
}


}

?>