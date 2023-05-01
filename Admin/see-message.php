<?php 
include 'config/database.php';

//fetch post from database if id is set
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM messages WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $message = mysqli_fetch_assoc($result);

}else {
    header('location: ' . ROOT_URL . 'display.php');
    die();
}

?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<section class="singlepost">
<div class="container">
      <h1>Relia<span>tech</span></h1>
      <div class="flex">
      <div class="name">Name: <?= $message['name'] ?></div>
      <div class="name">Number: <?= $message['number'] ?></div>
      </div>
      <div class="email">Email:<?= $message['email'] ?></div>   
      <div class="message"><?= $message['msg'] ?></div>        
      
     

</div> 
</section>
</body>
</html>  

<style>

.container{
    margin-left:27%;
    margin-top:10%;
    width:40%;
    background: #EEECE6;
    height:300px;
    padding:1%;
    border-radius:10px;
}

.container h1{
    text-align: center;
    font-size: 30px;
}

.name{
    font-size: 20px;
}

.message{
    padding-top: 6%;
    width:90%;
    margin-left: 6%;
}

span{
    color: darkred;
}

.flex{
    display: flex;
    justify-content: space-between;
    width: 80%;
    margin-left:8%;
}

.email{
    margin-left:7%;
    padding-top: 4%;
}
@media screen and (max-width: 700px)
{
.container{
    width: 98%;
    margin-left: -1px;
}

.container .flex{
    width: 85%;
    text-align: center;
}

.container .name{
    font-size:15px;
}

}

@media screen and (max-width: 1100px)
  {
    .container {
    padding: 5%;
  
}

  }


</style>