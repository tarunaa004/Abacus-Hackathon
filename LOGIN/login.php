<?php
   include("config.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $sql = "SELECT id FROM user WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         header("location: /organ/organization.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>