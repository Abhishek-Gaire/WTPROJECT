<?php
require_once "../Main/save.php";
error_reporting(0);

session_start();

$error = '';

if(isset($_POST['submit'])){
   $select = "SELECT * FROM Register WHERE Email = '$Email' && Password = '$Password'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);

      }elseif($row['user_type'] == 'user'){
         $_SESSION['user_name'] = $row['name'];
         header('location:user_dashboard.php');
      }
   }else{
      $error = 'Incorrect email or password!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="./project.css">
</head>
<body>
    <div class="div-form">
        <form method="post" action="" id="Login_Form" enctype="multipart/form-data" onsubmit="return validatePassword()">
            <div>
                <label for="Username">
                    Username:
                    <input type="text" id="username" name="UserName">
                </label>
            </div>         
            <div>
                <label for="Password">
                    Password:
                    <input type="password" id="password" name="Password">
                </label>
            </div>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
        <h3>Don't have an account! <a href="./index.html">Register Now</a></h3>
    </div>
    <script>
        function validatePassword(){

        }
    </script>
</body>
</html>