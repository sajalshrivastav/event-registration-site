<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "zest2022";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    // if(mysqli_connect_errno()) {  
    //     die("Failed to connect with MySQL: ". mysqli_connect_error());  
    // }
    if($con) {
         ?>
         <script>
            console.log("DataBase connected success");
         </script>
         <?php 
    } 
    else {
        die("Error". mysqli_connect_error()); 
    }   
?> 