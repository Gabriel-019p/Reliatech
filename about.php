
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<!---------navbar begins----------->

<nav>
    <div class="navbar">
    <div class="logo"><a href="index.php"><span class="re">R</span><span class="el">elia</span><span class="te">tech</span></a></div>
 
    <div class="web"><a href="index.php">Get a Website</a></div>
</div>
</nav> 

<!--------section---------->

<section class="aboutt">
   <div class="about">
     <h2>About Us</h2>
   </div>

</section>

<section class="abt">
    <div>
    <h5>Reliatech is an Innovative Website design, Development, Digital marketing and Software Development company established to employ the best methods available to provide quality web related services for our clients. Right from Inception, our approach to service delivery has been a blend of quality, innovation, speed and affordability. </h5>
</div>

<div class="check">
<h5>• At Reliatech we are in the industry to serve all strata of businesses, from start-ups to large cooperations, with the sole aim of helping our clients to maximize the countless benefits associated with using the internet.</h5>
</div>

<div class="check">
<h5>• Our services are highly Affordable. Our rates are flexible in such a way that any one can afford to get a website from us. </h5>
</div>

<div class="check">
   <h5>• Over the years we have taken Projects from client from different parts of the World, our expertise is not limited and neither is our Experience. </h5>
</div>

</section>

<section class="mission">
    <div>
    <h1>Our Mission</h1>
    <h6>To Significantly improve our client's businesses with innovative designs and development aimed at maximizing the benefits of being on the digital space and giving them a competitive advantage by making use of the most suitable techniques and tools for their business</h6>
 </div>
</section>

<?php
include 'partial/footer.php';

?>

</body>
</html>

<style>

/*---nav begin----*/
nav{
 height: 73px;
 width: 100%;
 background:white;
 transition: all 0.3s ease;
 position: fixed;
}

nav .menu{
    display: flex;
}

nav .menu{
    width: 15%;
    justify-content: space-between;
}

nav .menu {
    display: flex;
}

.navbar.sticky{
  background: red;
}

.re{
        color: darkred;
        font-size:50px;
        font-family:Vivaldi;
        font-weight:500;
    }

    .te{
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: darkred;
        font-size:25px;
    }

    .el{
      font-size:25px;
      font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      color: black;
    }

nav .menu li{
    font-size:18px;
    list-style: none;
    margin-top:50px;
}

nav .menu li a{
    text-decoration: none;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 500;
    color: black;
}

nav .menu li a:hover{
  color:grey;
  border-bottom: 2px solid white;
}
nav .navbar{
    width:90%;
    margin-top:-1.5%;
    margin-left:1%;
   
}

.logo a{
    text-decoration: none;
}

nav .web a{
     text-decoration: none;
     font-size: 21px;
     font-family: Segoe;
     color: white;
     background:darkred;
     padding: 11px;
     cursor: pointer;
     border-radius:50px;
}

nav .web{
   margin-top:1%;
 
}

nav .web a:hover{
  background: white;
  border: 1px solid darkred;
  color: darkred;
}
.checkbox div{
  width: 30px;
  height: 4px;
  background-color: darkred;
  margin: 6px 0;
  display: none;
}

.tech{
  display: none;
}
/*media query*/

.webe {
  display: none;
}


/*------- about-----*/
.aboutt{
    height:450px;
    background-image: 
    linear-gradient(to right, rgba(241, 233, 233, 0), rgb(10, 10, 10)),
    url("image/web7.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

.about h2{
    text-align: center;
    color: white;
    font-size: 85px;
    padding-top: 14%;
    font-family:Segoe;
}

/*------abt----------*/
.abt {
    width:80%;
    font-family: sogoe;
    margin-left:10%;
    padding-top:5%;
    line-height: 33px;
    font-size:22px;
}

.abt h5{
    padding-top:1%;
    font-family:Segoe;
}

/*------mission-----*/


.mission h1{
    text-align:center;
    padding-top:3%;
    font-family:Segoe;
    font-weight: 500;
}

.mission h6{
    width:62%;
    margin-left:20%;
    font-family: sogoe;
    font-size: 22px;
    line-height: 33px;
    font-family:Segoe;
}






/*----media Queries------*/

@media screen and (max-width: 700px)
{

nav{
    margin-top: -3%;
}
nav .web{
    display: none;
}
.aboutt{
    background-size: cover;
    height: 300px;
}

.aboutt h2{
    font-size:30px;
    padding-top:120px;
}
.abt{
    margin-top: 20px;
}

footer{
    height:80px;
}

}

</style>