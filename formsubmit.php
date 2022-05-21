<?php

   // Register Variables
$addname = $_POST['form_name'];
$addemail = $_POST['form_email'];
$addbody = $_POST['form_body'];

   // Connect with Database
$host_name = "localhost";
$database = 'dbwebsite1';
$user_name = 'root';
$password = '';
$connect = mysql_connect($host_name, $user_name, $password, $database);

    // Insert Information into Database
$user_info = "INSERT INTO user_database_entry (form_name, form_email, form_body) VALUES ('$_POST[form_name]', '$_POST[form_email]','$_POST[form_body]')";
if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }
echo "Your information was added to the database.";
mysql_close($connect);

