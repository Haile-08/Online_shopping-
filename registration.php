<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/ico.png">
    <title>Registration</title>
</head>
<body>
    <section class="re">
        <div class="re_container">
            <form action="register.php" method="post">
                 <p>Register</p>
                 <label for="username">Username</label>
                 <input type="text" name="username" id="" required>
                 <label for="email">email</label>
                 <input type="email" name="email" id="" required>
                 <label for="phone">Phone number</label>
                 <input type="text" name="phone" id="" required>
                 <label for="account">account number</label>
                 <input type="number" name="account" id="" required>
                 <label for="accountb">account balance</label>
                 <input type="number" name="accountb" id="">
                 <label for="password">Password</label>
                 <input type="password" name="password" required>
                 <input type="submit" value="Register" id="su">
            </form>
        </div>
    </section>
</body>
</html>
<?php
 if(isset($_POST['username'])){

          session_start();

          $username  = $_POST["username"];
          $email     = $_POST["email"];
          $phone     = $_POST["phone"];
          $account   = $_POST["account"];
          $accountb  = $_POST["accountb"];
          $password  = $_POST["password"];

          $host      = 'localhost:3306';  
          $user      = '';  
          $pass      = '';  
          $dbname    = 'online_shopping_db';

          $conn = mysqli_connect($host, $user, $pass,$dbname);  

          $sql_u = "SELECT * FROM user WHERE username='$username'";
           
          $res_u = mysqli_query($conn, $sql_u);
          if (mysqli_num_rows($res_u) > 0) {
            $name_error = "Sorry... username already taken"; 	
          }else{

          if(! $conn )  
               {  
                  die('Could not connect: ' . mysqli_error());  
               }

          echo 'Connected successfully'; 
          $sql = "INSERT INTO `user`(`username`, `email`, `phone`, `account`, `accountb`, `password`) VALUES ('$username','$email','$phone','$account','$accountb','$password')";

          if(mysqli_query($conn, $sql)){  
                         $_SESSION["name"] = $name;
                         $_SESSION["password"]=$password;
                         header("location:index.html"); 
          }else{
             echo "Could not insert record: ". mysqli_error($conn);  
          }  
   
        }
           mysqli_close($conn); 
 }

?>