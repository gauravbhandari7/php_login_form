<?php
include_once 'dbh-inc.php';
$username=$_POST['username'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
if(empty($username))
{
    $username_error="Please enter username";
}
elseif(strlen($username)<6){
    $username_error="Username should be minimum of 6 characters.";
}
if(empty($password1))
{
    $password1_error="Please enter password";
}
if(empty($password2))
{
    $password2_error="Please enter password";
}
elseif($password1!=$password2){
    $password2_error="Password don't match.";
}
if(empty($username_error)&&empty($password1_error)&&empty($password2_error))
{
    $sql="INSERT INTO userinfo(username,password) VALUES('$username','$password1'); "; 
    mysqli_query($conn,$sql);
    include('success.php');
}
else{
include('index.php');}
?>