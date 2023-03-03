
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="project.css">
</head>
<body>
    <div class="div-form">
        <form method="post" action="./Main/save.php" id="Register_Form" enctype="multipart/form-data" onsubmit="return check()">
            <div>
                <label for="FirstName">
                    First Name:
                    <input type="text" name="FirstName" id="firstname">
                </label>
            </div>
            <div>
                    <label for="LastName">
                    Last Name:
                    <input type="text" name="LastName" id="lastname">
                </label>
            </div>
            <div>
                <label for="UserName">
                    Username:
                    <input type="text" name="UserName" id="username">
                </label>
            </div>
            <div>
                <label for="Email">
                    Email:
                    <input type="email" name="Email" id="email" placeholder="anything@gmail.com">
                </label>
            </div>
            <div>
                <label for="Password">
                    Password:
                    <input type="password" name="Password" id="password">
                </label>
            </div>
            <div>
                <label for="ConfirmPassword">
                    Confirm Password:
                    <input type="password" name="ConfirmPasssword" id="confirmpassword">
                </label>
            </div>
            <div>
                <label for="Submit">
                    <input type="submit" value="Register" id="submit">
                </label>
            </div>
        </form>
        <h3>Already have an account! <a href="login.php">Login Directly</a></h3>
    </div>
    <script type="text/javascript">
        
        function check(){
            var p=document.getElementById("password").value;
            var cp=document.getElementById("confirmpassword").value;
            var FirstName=document.getElementById("firstname").value;
            var LastName=document.getElementById("lastname").value;
            var UserName=document.getElementById("username").value;
            var Email=document.getElementById("email").value;

            if (FirstName==""){
               alert("Enter your FirstName");
               return false;
            }
            else if (LastName==""){
               alert("Enter your LastName");
               return false;
            }
            else if (UserName==""){
               alert("Enter your UserName");
               return false;
            }
            else if(Email==""){  
                alert("Enter your Email");  
                return false;  
            } 
            else if(p==""){
                alert("Enter your Password");
                return false;
            }
            else if(p!==cp){
                alert("Your Paasswords dont matches. Please Re-Enter your Password.");
                return false;
            }
        }
        
    </script>
</body>
</html>