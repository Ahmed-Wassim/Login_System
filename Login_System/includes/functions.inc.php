<?php

function emptyInput($name,$email,$username,$password,$repeat_password){
  $result = NULL;
  if(empty($name) || empty($email) || empty($username) || empty($password) || empty($repeat_password)){
      $result = true;
  }else{
    $result = false;
  }
  return $result;
}

function invalidUid($username) {
  $result = NULL;
  if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
      $result = true;
  }else{
    $result = false;
  }
  return $result;
}

function invalidEmail($email){
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $result = true;
  }else{
    $result = false;
  }
  return $result;
}

function pwdmatch($password,$repeat_password) {
  $result = 0;
  if($password != $repeat_password){
    $result = true;
  }else{
    $result = false;
  }
  return $result;
}


function uidExists($con,$username,$email){
  $query = "SELECT * FROM user WHERE user_uid = ? OR  user_email = ? ; ";
  $stmt = mysqli_stmt_init($con);
  if(!mysqli_stmt_prepare($stmt,$query)){
    header("location:../signup.php?error=Failed");
    exit();
  }
  mysqli_stmt_bind_param($stmt , "ss" ,$username,$email);
  mysqli_stmt_execute($stmt);

  $result_data = mysqli_stmt_get_result($stmt);

  if($row = mysqli_fetch_assoc($result_data)){
    return $row;
  }else{
    $result = false;
    return $result;

  }
  mysqli_stmt_close($stmt);
}

function createUser($con,$name,$email,$username,$password){
  $query = "INSERT INTO user(user_name,user_email,user_uid,user_password) VALUES(?,?,?,?); ";
  $stmt = mysqli_stmt_init($con);
  if(!mysqli_stmt_prepare($stmt,$query)){
    header("location:../signup.php?error=Failed");
    exit();
  }

  // $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt , "ssss" ,$name,$email,$username,$password);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../signup.php?error=none");
  exit();
}