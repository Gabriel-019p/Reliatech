<?php

require 'config/database.php';

//get signup form data if signup button was clicked

if(isset($_POST['submit'])) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];
    
    //validate input values
    if (!$username) {
       $_SESSION['register'] = "please enter your Username";

    } elseif (strlen($password) < 8 || strlen ($confirmpassword) < 8) {
    $_SESSION['register'] = "password should be 8 or more characters";

    } elseif (!$avatar['name']) {
        $_SESSION['register'] = "please add avatar";
    } else {
        //check password match
        if($password !== $confirmpassword) {
            $_SESSION['register'] = "password do not match";
        } else {
            //hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            //check if username or email already exists in the database
            $user_check_query = "SELECT * FROM admins WHERE username='$username'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if (mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['register'] = "username  already exists";
            } else {

                // WORK ON AVATAR
                //rename avatar
                $time = time(); // make each  image name unique using current timestamp
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = '../image/' .$avatar_name;

                // make sure file is an image 
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);
                if(in_array($extention, $allowed_files)) {
                    // make sure image is not too large(1mb+)
                 if ($avatar['size'] < 1000000) {
                    // upload avatar
                    move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                 } else{
                    $_SESSION['register'] = "File size too big. should be less than 1mb";
                 }

                }else {
                    $_SESSION['register'] = "File should be png, jpg, or jpeg";
                }
            }
        }
    }

    // redirect back to  signup page if there was a problem
    if (isset($_SESSION['register'])) {
        //pass form data back to signup page
        $_SESSION['register-data'] = $_POST;
        header('location: register.php');
        die();
    }else {
        //insert new user into table
        $insert_user_query = "INSERT INTO admins (username, email,  password, avatar) VALUES('$username', '$email','$hashed_password', '$avatar_name')";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if(!mysqli_errno($connection)) {
            //redirect to login page with success message
            $_SESSION['register-success'] = "Registration successful. Please proceed to Login";
            header('location: register.php');
            die();
        }
    }

}else {
    //if button wasnt clicked, bounce back to signup page
    header('location: register.php');
    die();
}