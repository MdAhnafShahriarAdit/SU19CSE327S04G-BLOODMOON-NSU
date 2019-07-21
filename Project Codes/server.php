<?php 
session_start();

//initializing variables

  $username = "";
  $email = "";

  $errors = array();
  // connect to Data base

  $db = mysqli_connect('localhost','root','','menstrualcycle') or die("could not connect to data base");

