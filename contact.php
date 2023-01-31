<?php 
include'forms/config.php';
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sub = $_POST['subject'];
  $message = $_POST['message'];


  $query = "INSERT INTO contact_form (name, email, subject, message) VALUES ('$name', '$email', '$sub','$message')";

  if (mysqli_query($conn, $query)) {
   echo "<script>alert('Message sent successfully');
          window.history.back();
          reload();</script>";

  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}?>