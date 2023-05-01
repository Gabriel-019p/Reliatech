<?php
require 'config/database.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="login_style.css">
</head>
<body>
         
     <div class="rel"><img src="images/relia.png" style="width:17%;"></div>

       <form  action=" signin-logic.php" method="POST">
         <div class="formm">
         <div class="container">
    
     <h2 class="admin">Sign In</h2>

         <div class="put">
         <?php if(isset($_SESSION['signin'])) : ?>

         <div class="alert_message error">
          <p>
            <?= $_SESSION['signin'];
            unset($_SESSION['signin']);
            ?>
          </p>
         </div>
         <?php endif ?>

         </div>

       
          <div class="sign">
          <input type="text" placeholder="Enter Username or Passwword" value="<?= $username_email ?>" name="username_email" required>
         </div>

          <div class="sign">
          <input type="password" placeholder="Enter Password" value="<?= $password?>" name="password" required>
          </div>
      
          <button class="btn" type="submit" name="submit">Login</button>

         
    
        </div>

        </div>
      
</body>
</html>
<style>

form{
  margin-left: 35%;
  margin-top:-5%;
  border: 1px solid black;
  width: 30%;
  padding: 1%;
}

.admin{
  text-align: center;
}

input{
  width: 80%;
  margin-left: 8%;
  padding-top: 4%;
  border-left: none;
  border-right: none;
  border-top: none;
  border-bottom: 1px solid black;
  background: none;
}

.rel img{
  margin-left: 43%;
  margin-top: 4%;
}

.sign{
  padding-top:2%;
}

.btn{
  margin-left: 38%;
  margin-top: 5%;
  padding:1%;
  width:25%;
  background: darkred;
  border: none;
  color: white;
}

.put{
  text-align: center;
  color: red;
}

/*---------media Quary--------*/
@media screen and (max-width: 700px)
{

  form{
    width: 90%;
    margin-left: -1px;
    margin-top: 120px;
    padding:20px;
    border:none;
  }

  .btn{
    border-radius: 5px;
    padding: 8px;
    
  }

  input{
    border: 1px solid black;
    width: 98%;
    margin-left: -1px;
  }

}

</style>