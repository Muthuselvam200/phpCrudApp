<?php  include "header.php" ?>
<?php 
     if(isset($_GET['delete']))
     {
         $userid= $_GET['delete'];
         $query = "DELETE FROM users WHERE id = {$userid}"; 
         
         try {
            $delete_query= mysqli_query($conn, $query);
            header("Location: ./index.php");
         }catch (mysqli_sql_exception){
            echo "Couldn't delete the userdata"; 
         }
     }
?>