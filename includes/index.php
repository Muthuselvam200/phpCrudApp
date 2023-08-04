<?php
  include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
  <h1 class="text-center">
    PHP CRUD Operations Data
  </h1>
  <a href="create.php" class="btn btn-success mb-2"><i class="bi bi-person-plus"></i>Create new user</a>
  <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col" class="text-center">ID</th>
              <th  scope="col" class="text-center">name</th>
              <th  scope="col" class="text-center">Email</th>
              <th  scope="col" class="text-center">Password</th>
              <th  scope="col" class="text-center">Crud operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>

              <?php
                $query = "SELECT * FROM users";
                $view_users = mysqli_query($conn, $query);            
 
                  if (mysqli_num_rows($view_users) > 0){
                    while($row = mysqli_fetch_assoc($view_users)){
                        echo "<tr >";
                        echo "<td class='text-center'>" . $row["id"] . "</td>";
                        echo "<td class='text-center'>" . $row["name"] . "</td>";
                        echo "<td class='text-center'>" . $row["email"] . "</td>";
                        echo "<td class='text-center'>" . $row["password"] . "</td>";


                        echo " <td class='text-center' > <a href='update.php?edit&user_id={$row["id"]}' class='btn btn-secondary'>EDIT</a> <a href='delete.php?delete={$row["id"]}' class='btn btn-danger'>DELETE</a> </td>";
                        echo " </tr> ";
                    }

            }
            ?>
              </tr>
            </tbody>
</div>
</body>
</html>