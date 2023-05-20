<?php

require 'config/constants.php'; 

//get back form data if there is registration error

$username = $_SESSION['register-data']['username'] ?? null;
$email = $_SESSION['register-data']['email'] ?? null;
$password = $_SESSION['register-data']['password'] ?? null ;
$confirmpassword= $_SESSION['register-data']['confirmpassword'] ?? null ;

//delete data session
unset($_SESSION['register-data']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<body> 

    <div>

    <div class="bet">
        <?php if(isset($_SESSION['register-success'])) : ?>
          <div class="alert_message success">
          <p>
            <?= $_SESSION['register-success'];
            unset($_SESSION['register-success']);
            ?>
          </p>
         </div>
         <?php endif?>
      </div>

  

    <form action="register-logic.php" enctype="multipart/form-data" method="POST"> 
        <div class="container">
    
    <h2>Signup</h2>

      <div class="put">
        <?php if (isset($_SESSION['register'])) : ?>
          <div class= "alert_message error">
        <!-- <div class="alert alert-danger">Please fix the errors below</div>-->
         <div class="alert_message error">
        <p>
                 <?= $_SESSION['register'];
                 unset($_SESSION['register']);
                 ?>
          </p>
        </div>
        
        <?php endif ?>
        </div>
          
          <div class="for">
          <div><input type="text" placeholder="Enter Username" name="username" value="<?=$username ?>" required></div>
          </div>

          <div class="for">
          <div><input type="text" placeholder="Enter Email" name="email" value="<?=$email ?>" required></div>
          </div>
 

          <div class="for">
          <div><input type="password" placeholder="Enter Password" name="password" value="<?= $password ?>" required></div>
           </div>

         <div class="for">
          <div><input type="password" placeholder="Confirm Password" name="confirmpassword" value="<?=$confirmpassword ?>" required></div>
          </div>
        
          <div><input type= "file" name="avatar" id="avatar"></div>

          <div class="clearfix">
            <button type="submit" name="submit" class="btn">Create</button>
          </div>

        

        </div>
      </form>
    </div>
   
</body>

</html>

<style>
form{
    margin-left:35%;
    border: 1px solid black;
    width: 30%;
    padding:2%;
}

.container h2{
text-align: center;
margin-top:-2%;
}

input{
    padding-top: 2%;
    border-right: none;
    border-left: none;
    border-top: none;
    width: 90%;
}

.bet{
  text-align: center;
  color: green;
  font-size: 22px;
}

.put{
  text-align: center;
  color: red;
}

.for{
   padding-top:2%;
}

.container .btn{
     background: darkred;
     color: white;
     margin-top:2%;
     padding:1%;
     border: none;
     margin-left:43%;
}

.rel img{
    margin-left: 43%;
    margin-top:3%;
}


/*---------media Quary--------*/
@media screen and (max-width: 700px)
{
form{
  width: 95%;
  margin-left: -0.75px;
  border: none;
  margin-top: 60px;
 }

 input{
  width: 98%;
  background: none;
 }

 .bet{
  font-size:16px;
 }

}

@media screen and (max-width: 1100px)
  {
    form{
  width: 90%;
  margin-left: 13px;
  margin-top: 60px;
 }

  }

</style>

 

    
