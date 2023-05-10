<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['uid'];
  $password = $_POST['password'];
  $repeat_password = $_POST['repeat_password'];

  require("dbcon.inc.php");
  require("functions.inc.php");

  if(emptyInput($name,$email,$username,$password,$repeat_password) != false){
    header("location:../signup.php?error=Empty Input");
    exit();
  }

  if(invalidUid($username) != false){
    header("location:../signup.php?error=Invalid Uid");
    exit();
  }

  if(invalidEmail($email) != false){
    header("location:../signup.php?error=Invalid Email");
    exit();
  }

  if(pwdmatch($password,$repeat_password) != false){
    header("location:../signup.php?error=This is not the same password");
    exit();
  }

  if(uidExists($con,$username,$email) != false){
    header("location:../signup.php?error=Username Taken");
    exit();
  }
  

  createUser($con,$name,$email,$username,$password);

}else{
  header("location:../signup.php");
  exit();
}
