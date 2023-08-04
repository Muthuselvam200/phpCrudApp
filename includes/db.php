<?php

  $db_server = '127.0.0.1'; 
  $db_user = 'stand21orders';   
  $db_pass = "45khgyhjf52";   
  $db_name = 'stand21orders';

  try {
    $conn = mysqli_connect($db_server, 
                           $db_user, 
                           $db_pass, 
                           $db_name);
  } catch (mysqli_sql_exception $e) {
      echo "Could not connect : " . $e->getMessage();
  }

  
?>