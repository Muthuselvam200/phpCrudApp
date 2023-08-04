<?php include "header.php"?>
 
<?php
   if(isset($_GET['user_id'])){
      
    $userid = $_GET['user_id']; 

      $query="SELECT * FROM users WHERE id = '$userid' ";
      $view_users= mysqli_query($conn,$query);
 
      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];
          $user = $row['name'];
          $email = $row['email'];
          $pass = $row['password'];

        }
      }
  
    if(isset($_POST['update'])) 
    {
      $user = $_POST['name'];
      $email = $_POST['email'];
      $pass = $_POST['password'];

       
      $query = "UPDATE users SET name = '{$user}' , email = '{$email}' , password = '{$pass}' WHERE id = $userid";

      try {
        $update_user = mysqli_query($conn, $query);
        echo "<p class='text text-success'>User data updated successfully </p>";    
     } catch (mysqli_sql_exception) {
        echo "<p class='text text-danger'>Couldn't update the user data </p>";
      }
    }             
?>
 
<h1 class="text-center">Update User Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="user" >Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $user  ?>">
      </div>
 
      <div class="form-group">
        <label for="email" >Email ID</label>
        <input type="text" name="email"  class="form-control" value="<?php echo $email  ?>">
      </div>
     
      <div class="form-group">
        <label for="pass" >Password</label>
        <input type="password" name="password"  class="form-control" value="<?php echo $pass  ?>">
      </div>    
 
      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>
 