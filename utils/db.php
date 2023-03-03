<?php

$server_name="localhost";
$user_name="root";
$password="";
$database_name="wtproject";

$conn=new mysqli($server_name ,$user_name, $password , $database_name);

if ($conn->connect_error){
    die("Connection FAiled!");
}
