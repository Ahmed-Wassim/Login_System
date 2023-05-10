<?php

define("HOST","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","login-system");

$con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

if(!$con){
  die("Failed" . mysqli_connect_error());
}