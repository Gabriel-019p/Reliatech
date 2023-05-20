<?php

require 'config/database.php';

//get signup form data if signup button was clicked

if(isset($_POST['submit'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $number = filter_var($_POST['number'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $country = filter_var($_POST['country'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $msg = filter_var($_POST['msg'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    
        
    // redirect back to  signup page if there was a problem
    if (isset($_SESSION['index'])) {
        //pass form data back to signup page
        $_SESSION['index-data'] = $_POST;
        header('location: index.php');
        die();
    }else {
        //insert new user into table
        $query = "INSERT INTO messages (name, number, email, country, msg) VALUES('$name', '$number', '$email', '$country', '$msg')";
        $result = mysqli_query($connection, $query);

        if(!mysqli_errno($connection)) {
            //redirect to login page with success message
            $_SESSION['index-success'] = "message successful Sent. Please Await our reply";
            header('location:  thankyou.php');
            die();
        }
    }

}

    //if button wasnt clicked, bounce back to signup page
    header('location: index.php');
    die();