<?php include('../dbconn.php');?>
<?php session_start(); ?>
<?php 
if(isset($_POST['login'])){
    $username = $_POST['uname'];
    $password = $_POST['password'];

     $query = "select * from `users` where `user_name` = '$username' and `Password` = '$password'";
     $result = mysqli_query($connection,$query);

     if(!$result){
        die("Query Failed".mysqli_error());
     }
     else{
        $row = mysqli_num_rows($result);
        if($row == 1){
            $_SESSION['uname'] = $username ;
            header('location:../index.php');
        }
        else{
            header('location:../login.php?message=Sorry your Username or Password is invalid');
        }
     }
}
?>