<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'Password does not match!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};


?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="act3/act3.css">
        <link rel="shortcut icon" type="img/png" href="pngwing.com.png">
        <script src="https://kit.fontawesome.com/ceb8b66c45.js" crossorigin="anonymous"></script>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Legit Tech Tips</title>
    </head>

    <body>  
     
        <div class ="container">
            <input class ="checkbox"type="checkbox" id="flip" checked>
            <div class="cover">
                <div class="front">
                    <img class="frontimg" src ="assets/img/Tech.png" alt="">
                </div>
                <div class="back">
                    <img class="frontimg" src ="act3/tokyo-main.avif" alt="">
                </div> 
               
            </div>
              
            <div class="forms">
                 <div class="form-content" style ="margin-left: 750px;">
                    <!---Reg for,-->
                    <div class ="signup-form">
                        <a href="index.php" class="logo"><img src= "assets/img/2018_Linus_Tech_Tips_logo.svg.png" alt="" class="img-fluid" style="max-width: 50px; margin-left: 120px;"></a>

                            <form action="" method="post">
                                <div class ="title">Register</div>
                                    <?php
                                        if(isset($error)){
                                            foreach($error as $error){
                                                echo '<span class="error-msg" style = " margin:10px 0; display: block; background: #cb4000; color:#fff; border-radius: 5px; font-size: small; padding:10px; text-align: center;">'.$error.'</span>';
                                            };
                                        };
                                    ?>
                                <div class="input-box">
                                    <i class="fas fa-user"></i><input type="text" name="name" required placeholder="Enter your name">
                                        
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-envelope"></i>
                                        <input type="email" name="email" required placeholder="Enter your email">
                                </div>
                                <div class="input-box">
                                        <i class="fas fa-lock"></i>
                                            <input type="password" name="password" required placeholder="Enter your password">
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                        <input type="password" name="cpassword" required placeholder="Confirm your password">
                                </div>
                               
                                <div class="button input-box">
                                    <input type="submit" name="submit" value="Register">
                                </div>
                                <div class ="text">Already have an account? <label class="login"><a href="login.php">Sign In</a></label> </div>
                               </form>


                    </div>
                </div>
                </div>
            </div>
                
    </body>

</html>