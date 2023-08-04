<?php  include 'header.php'?>
 
  <div class="container">
    <h1 class="text-center">User Details</h1>
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col">ID</th>
          <th  scope="col">Username</th>
          <th  scope="col">Email</th>
          <th  scope="col"> Password</th>

        </tr>  
      </thead>
        <tbody>
          <tr>
                
            <?php
 
                  $query = "SELECT * FROM users";  
                  $view_users = mysqli_query($conn,$query);            
 
                  if (mysqli_num_rows($view_users) > 0) 
                  {
                    while($row = mysqli_fetch_assoc($view_users)){
                        echo "<tr >";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["password"] . "</td>";


                    }
                  }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>