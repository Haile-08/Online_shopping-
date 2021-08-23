<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/ico.png">
    <title>login</title>
</head>
<body>
    <section class="login">
        <div class="login_container">
            <form action="login.php" method="post">
                 <p>Login</p>
                 <label for="username">Username</label>
                 <input type="text" name="username" id="" required>
                 <label for="password">Password</label>
                 <input type="password" name="password" required>
                 <input type="submit" value="Login" id="su">
            </form>
        </div>
    </section>
</body>
</html>
<?php
     if(isset($_POST['username'])){
     
     session_start();
     
     $username = $_POST['username'];  
     $password = $_POST['password'];  
    
     $host      = 'localhost:3306';  
     $user      = '';  
     $pass      = '';  
     $dbname    = 'online_shopping_db';

     $con = mysqli_connect($host, $user, $pass,$dbname);  
       
         //to prevent from mysqli injection  
         $username = stripcslashes($username);  
         $password = stripcslashes($password);  
         $username = mysqli_real_escape_string($con, $username);  
         $password = mysqli_real_escape_string($con, $password);  
       
         $sql = "select *from user where username = '$username' and password = '$password'";  
         $result = mysqli_query($con, $sql);  
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
         $count = mysqli_num_rows($result);  
           
         if($count == 1){  
            $_SESSION["username"] = $username;
            $_SESSION["password"]= $password;
            header("location:loged.php"); 
         }  
         else{  
             header("location:login.php");
             
         } 

         mysqli_close($con); 
        }

?>