<?php 
session_start();

//initializing variables

  $username = "";
  $email = "";

  $errors = array();
  // connect to Data base

  $db = mysqli_connect('localhost','root','','menstrualcycle') or die("could not connect to data base");

//Register users 

  $username =mysqli_real_escape_string($db, $_POST['username']);
  $email =mysqli_real_escape_string($db, $_POST['email']);
  $password_1 =mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 =mysqli_real_escape_string($db, $_POST['password_2']);



  // form validation 
   if (empty($username)) {array_push($errors, "Username is required");}
   if (empty($email)) {array_push($errors, "Email is required");}
   if (empty($password_1)) {array_push($errors, "Password is required");}
   if($password_1 != $password_2){array_push($errors,"Passwords need to be the same");}
