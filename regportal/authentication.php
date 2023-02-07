<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];
  

      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from sign where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
          
        if($count == 2){  
            echo '<script>alert("Welcome User , Login Successfully")</script>'; 
            header("Location: ");
            exit(); 
            
        }  
        elseif($count == 1){  
            echo '<script>alert("Welcome Admin , Login Successfully")</script>'; 
            header("Location: admin");
            exit(); 
        }
        elseif($count == 3){  
            echo '<script>alert("Welcome Admin , Login Successfully")</script>'; 
            header("Location: judgement");
            exit(); 
        }
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  
