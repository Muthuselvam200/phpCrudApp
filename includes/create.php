<?php
  include("header.php");

  if(isset($_POST['create'])) {
    $user = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "INSERT INTO users (name, email, password) VALUES ('{$user}', '{$email}', '{$pass}')";

    //$hashed = password_hash($pass, PASSWORD_DEFAULT);

    try {
      $addUser = mysqli_query($conn, $query);
      echo "<p class='text text-success'>User added successfully </p>";
    } catch (mysqli_sql_exception) {
      echo "<p class='text text-danger'>Something went wrong </p>";
    }
  }

?>

<div>
  <h1 class="text-center">Add User Details</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group mb-3">
        <label for="name" class="form-label">Username</label>
        <input type="text" name="name" id="name" class="form-control">
      </div>

      <div class="form-group mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">
      </div>

      <div class="form-group mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>

      <div class="form-group mb-3">
        <input type="submit" name="create" class="btn btn-success">
      </div>
    </form>
  </div>
</div>