<?php 

require_once "../utils/db.php";

$FirstName=$_POST['FirstName'] ?? '';
$LastName=$_POST['LastName'] ?? '';
$UserName=$_POST['UserName'] ?? '';
$Email=$_POST['Email'] ?? '';
$Password=password_hash($_POST['Password'] ?? '', PASSWORD_DEFAULT);
$ConfirmPassword=password_hash($_POST['ConfirmPassword'] ?? '', PASSWORD_DEFAULT);

$sql="INSERT INTO Register(FirstName, LastName, Username, Email, Password, ConfirmPassword)
VALUES('$FirstName' , '$LastName' , '$UserName' , '$Email' , '$Password' , '$ConfirmPassword')";

mysqli_query($conn, $sql);
header('<location: class="../Create/login.php">');

?>


