<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    //get from database
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$username_email) {
        $_SESSION['signin'] = "username or email required";
    } elseif (!$password) {
        $_SESSION['signin'] = "password required";
    } else{
        //fetch user from database
        $fetch_user_query = "SELECT * FROM admins WHERE username='$username_email' OR email='$username_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if(mysqli_num_rows($fetch_user_result) == 1) {
            //convert the records into assoc array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];

            //compare form password with database password
            if(password_verify($password, $db_password)) {
                //set session for access control
                $_SESSION['id'] = $user_record['id'];


             //log user in 
             header('location: display.php');
         
            } else {
 
                $_SESSION['signin'] = "please check your input";
            }

      } else {
 
            $_SESSION['signin'] = "user not found";
        }
    }

     //if any problem, redirect back to signin page with login data
     if(isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location: signin.php');
        die();
        
      }
} else {
    header('location: signin.php');
    die();
}