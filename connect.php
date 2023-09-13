<?php 
$server="localhost";
$username="root";
$password="";
$db_name="sign_up";

$conn=new mysqli($server,$username,$password,$db_name);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}

?>