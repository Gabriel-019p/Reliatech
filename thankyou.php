<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="tab">
    <div class="thank">Thank You</div>
    <div>
        <img src="image/checked.png" style="width:10%;">
        <h4>Your Submission has been received. A member of our team will reach out to you Shortly.</h4>
        <h2><a href="index.php">Continue</h2>
    </div>
</div>

</body>
</html>


<style>

body{
    background:#f5f5f5;
}
.tab{
    margin-top: 10%;
    width: 40%;
    border: 1px solid white;
    margin-left: 29%;
    padding:1%;
    border: 1px solid lightgrey;
}

.tab .thank{
   font-size:30px;
   font-family: Segoe UI;
   text-align: center;
   background: #50c878;
   font-weight: 500;
   padding:1%;
   margin-left: -1%;
   width: 100%
  
}

.tab img{
    margin-left: 44%;
    margin-top: 6%;
}

.tab h4{
     width:80%;
     font-family:sans-serif;
     text-align: center;
     margin-left:8%;
     margin-top:6%;
}

.tab h2{
    text-align: center;
    margin-top: 7%;
    background: lightgrey;
    margin-left:37%;
    margin-right: 37%;
    padding: 1%;
    font-weight: 500;
}

.tab h2:hover{
    background:  #50c878;
    color: white;
}
.tab h2 a{
    text-decoration: none;
    list-style: none;
    color: black;
}
    

@media screen and (max-width: 900px) 
{
    .tab{
        width:85%;
    margin-left:5%;
       
    }
}
</style>