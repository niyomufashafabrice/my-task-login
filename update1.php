<?php include ('header.php'); ?>
<?php include('dbconn.php') ?>


<?php 

if(isset($_GET['id'])){
    $id=$_GET['id'];


    $query = "select * from `students` where `id` = '$id' ";
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("query Faild".mysqli_error());
    }
    else{
      $row = mysqli_fetch_assoc($result);
     
    }
}

?>

<?php 
 if(isset($_POST['update_students'])){
    
    if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
    }

    $fname= $_POST['f_name'];
    $lname= $_POST['l_name'];
    $age= $_POST['age'];

    $query= "update `students` set `first_name` ='$fname', `last_name` = '$lname', `age` = '$age' where `id` = '$idnew' ";

    $result = mysqli_query($connection, $query);
     
    if(!$result){
        die("query Faild".mysqli_error());
    }
    else{
         header('location:index.php?updte_message=you have update successful');
    }
 }


?>


      <form action="update1.php?id_new=<?=$id?>" method="post">
        <div class="form-group">
            <label for="f_name">First Name</label>
            <input type="text" name="f_name" class="form-control" value="<?=$row['first_name']?>">
          </div>
          <div class="form-group">
            <label for="l_name">last Name</label>
            <input type="text" name="l_name" class="form-control" value="<?=$row['last_name']?>">
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type="text" name="age" class="form-control" value="<?=$row['age']?>">
          </div>
          <input type="submit" class="btn btn-success mt-3" name="update_students" value="UPDATE">
     </form>



<?php include('footer.php'); ?>