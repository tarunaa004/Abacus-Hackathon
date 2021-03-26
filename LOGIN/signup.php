<?php
      include("config.php");


      $user_check_query = "SELECT * FROM user WHERE username='".$_POST['username']."'  ;";
      $result = mysqli_query($conn, $user_check_query);
      $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
          if ($user['username'] === $username) {
                echo "
                        User name already exists <br>
                        <a href=#sign_up.html>Go to sign up page</a>"
                  ;
          }
        }
        else {
             $query = "INSERT INTO user (username, password)
                    VALUES('".$_POST['username']."', '".$_POST['password']."'); ";

     mysqli_query($conn, $query);
      header("location: index.php");
        }
 ?>
</body>
</html>
