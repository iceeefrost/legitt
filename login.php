<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin/admin_page.php');

      }elseif(mysqli_num_rows($result) >0){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
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
   <title>Legit Tech Tips — Log In</title>
    </head>
    <body>
     
        <div class ="container">
            <input class ="checkbox"type="checkbox" id="flip">
            <div class="cover">
                <div class="front">
                    <img class="frontimg" src ="act3/james-weber-japan-one.jpg" alt="">
                </div>
                <div class="back">
                    <img class="frontimg" src ="act3/tokyo-main.avif" alt="">
                </div> 
      
               
            </div>
              
            <div class="forms">
               
                     <div class="form-content"style="padding: 68px;">

                <div class ="login-form" style="margin-left:80px;" >
                     <a href="index.php" class="logo"><img src= "assets/img/2018_Linus_Tech_Tips_logo.svg.png" alt="" class="img-fluid" style="max-width: 50px; margin-left: 120px;"></a>
                              <!---Log-in form-->
                    <form action ="" method="post">
                        <div class ="title"  >Login</div>
                        <?php
                            if(isset($error)){
                            foreach($error as $error){
                                echo '<span class="error-msg" style = " margin:10px 0; display: block; background: #cb4000; color:#fff; border-radius: 5px; font-size: small; padding:10px; text-align: center;">'.$error.'</span>';
                                };
                            };
                        ?>
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type ="email" placeholder="Enter your e-mail" name = "email" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Enter your password" name = "password" required>
                            </div>
                            <br>

                            <div class="text">
                                <a href ="#" >Forgot Password?</a>
                            </div>
                            <div class="button input-box">
                                    <input type="submit" name="submit" value="Login">
                            </div>
                            <div class ="text">Don't have an account? <label><a href = "reg.php">Sign Up</a></label> </div>
                        </div>
                    </form>

                </div>
            </div>
  
  
</div>
        </div>
    </body>

</html>