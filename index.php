<?php
require 'config/database.php';

?>



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
    <div class="logo"><img src="image/relia.png"></div>
    <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="Portfolio.php">Catalogue</a></li>
</ul>
    <div class="web"><a href="#contact">Get a Website</a></div>
</div>
</nav> 

<!-----home begin------->
<section class="home" id="home">

<div class="slideshow-container">

         <div class="mySlides">
                <!--<img src="images/img19.webp" style="width:800px; height: 300px;"-->
                <div class="text2">"Welcome to Reliatech"</div>
              </div>

              <div class="mySlides">
                <!--<img src="images/img19.webp" style="width:800px; height: 300px;"-->
                <div class="text2">"At Reliatech we build Websites that deliver Real Business Results"</div>
              </div>
            
              <div class="mySlides">
                <!--<img src="images/pic41.jpg" style="width:800px; height: 300px;"-->
                <div class="text2">"We don't just build Websites, we build Websites that sells."</div>
              </div>
            
              <div class="mySlides">
                <!--<img src="images/pic41.jpg" style="width:800px; height: 300px;"-->
                <div class="text2">"Getting a quality Website is not an Expense, but rather an investment."</div>
              </div>
            
              <div class="mySlides">
                <!--<img src="images/pic41.jpg" style="width:800px; height: 300px;"-->
                <div class="text2">"Your Website is the Window of your Business. Keep it fresh, keep it exciting."</div>
              </div>
              </div>
           </div>

</section>



<!-----------new section------------------->
<section class="over">
<h1>Over 110 Clients from Different Countries</h1>

<div class="client">

  <div class="four">
  <h4>110+</h4>
  <h6>Clients</h6>
  </div>

<div class="finish">
  <h4>126+</h4>
  <h6>Finished Projects</h6>
</div>


</div>
</section>

<!------about begins------>
<section class="about" id="about">

<div class="whopic">
    <div class="whobg">
        <div class="whopicture">
         <img src="image/web2.jpg" style="height:250px;">
        </div>
    </div>
</div>

<div class="who">
<h4>Who We Are</h4>
<h6>Reliatech is a Web Development Agency, that provides innovative, creative and strategic websites for forward-thinking companies. We specialize in brand identity, website production and search engine optimization driven by a passion for building positive connections between brands and human emotions. We work closely with startups, corporates and advertising agencies all over the world to create iconic brands and engaging experiences that connect people to brands and organizations.</h6>
<div class="learn"><a href="about.php">Learn More</a></div>
</div>



</section>

<!-----------services begins------->
<section class="services" id="services">
  <h4>Services We Provide<h4>

   <div class="service-flex">
       
     <div class="serv">
        <img src="image/web4.png" style="width:23%;">
        <h4>Web Development & Design</h4>
        <h6>The Importance of a Web development & Design to any business in todays world cannot be Overemphasized.</h6>
     </div>

     <div class="serv">
     <img src="image/web5.png" style="width:23%;">
        <h4>Web Maintenance</h4>
        <h6>At Reliatech, we are dedicated to maintaining your site for your, ensuring your website is up to date, regularly updating content and fixing any brokwn links.</h6>
     </div>

     <div class="serv">
     <img src="image/web6.png" style="width:23%;">
        <h4>Web Technology Consulting</h4>
        <h6>Reliatech Offers Prospective & Existing Clients the opportunity to outsource some of their IT-related Work. </h6>
     </div>

   </div> 
</section>

<!-----------how it works ------------------>


<section class="how">
<h4 class="work">How it works</h4>


<div class="how-flex">

<div class="imgbg">
<div class="img">
<img src="image/web1.jpg" style="height:280px">
</div>
</div>
<div>
<div class="step">

<div class="steps">
<img src="image/telephone-call.png " style="height:40px";>
<h5>Step 1</h5>
<h4>Contact Us</h4>
<h6>Send Us a Message with your Name, Phone Number, Address, and details on the type of Site you want. </h6>
</div>

<div class="steps">
<img src="image/meeting.png " style="height:40px";>
<h5>Step 2</h5>
<h4>Meeting</h4>
<h6>We will contact you to further discuss your project in details and sign an Agreement</h6>
</div>

</div>

<div class="step">

<div class="steps">
<img src="image/illustration.png " style="height:40px";>
<h5>Step 3</h5>
<h4>Design</h4>
<div><h6>We will design a unique sample Website/Layout, tailored for your brand to choose from</h6></div>
</div>

<div class="steps">
<img src="image/shopping.png " style="height:40px";>
<h5>Step 4</h5>
<h4>Delivery</h4>
<div><h6>We will then proceed to complete the website within the agreed date and deliver projects including all Logins</h6></div>
</div>
</div>
</div>
</div>

</section>

<!---------Contact------------>
<section class="contact" id="contact">
  
  <div class="containerd">
    <div class="get">Get In Touch</div>
    <div class="touch">
    <form action="index-logic.php" enctype="multipart/form-data" method="POST" >

      <div class="form">
    <div>
      <input type="text" class="input" name="name" placeholder="Enter Full Name">
    </div>
    <div>
      <input type="text" class="input" name="number" placeholder="Enter Phone Number">
    </div>
    <div>
      <input type="text" class="input" name="email" placeholder="Enter Email">
    </div>
    <div>
      <select id="country" name="country">
        <option value="nigeria">Nigeria</option>
        <option value="ghana">Ghana</option>
        <option value="usa">USA</option>
        <option value="uk">United Kingdom</option>
        <option value="others">Others</option>
      </select>
    </div>
     <div>
      </div>
      <textarea id="msg" name="msg" placeholder="Hello there! What can we do for you today?" style="height:160px"></textarea>
  <div>
      <input class="" type="submit" name="submit" value="Send">
  </div>
  </div>
  </div>
    </form>
    </div>
  </div>
  </section>

  <!------review------->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="contain">

<span class="head">User Rating</span>
<div class="cont">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
</div>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>
    </div>

 <a href="https://wa.me/+2349138861254" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a></div>
  

<footer>

<div class="icon">
<img src="image/twitter.png" style="width:2%;">
<img src="image/facebook.png" style="width:2%;">
<img src="image/whatsapp.png" style="width:2%;">
</div>


<h6 class="copy">Copyright 2023 by Reliatech. All Rights Reserved.</h6>

</footer>


<script src="js/script.js"></script>
    
</body>
</html>









<style>
/*---nav begin----*/
nav{
 border-bottom: 1px solid black;
 height: 200px;
 background: white;
 transition: all 0.3s ease;
}

nav .menu{
    display: flex;
}

nav .menu{
    width: 30%;
    justify-content: space-between;
    margin-left:-40%;
}

nav .menu li{
    font-size:18px;
    list-style: none;
    margin-top:50px;
}

nav .menu li a{
    text-decoration: none;
    font-family: Segoe;
    font-weight: 500;
    color: black;
}

nav .navbar{
    width:98%;
    margin-top: -135px;
}

nav .navbar .logo img{
width:40%;
}

nav .web a{
     text-decoration: none;
     font-size: 23px;
     font-family: Segoe;
     color: white;
     background:darkred;
     padding: 13px;
     cursor: pointer;
}

nav .web{
    margin-top:29px;
}
.checkbox div{
  width: 30px;
  height: 4px;
  background-color: darkred;
  margin: 6px 0;
  display: none;
}

/*media query*/

.webe {
  display: none;
}


/*-----home begin-----*/
.home{
    height:600px;
    background-image: 
    linear-gradient(to right, rgba(241, 233, 233, 0), rgb(10, 10, 10)),
    url("image/web3.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    border-bottom: 1px solid black;
}

.home .text2{
    font-size:40px;
    color: white;
    width:40%;
    margin-left:35%;
    padding-top: 17%;
    font-weight: 500;
}

/*------over-----*/
.over h1{
  font-size:50px;
  text-align: center;
  margin-top:7%;
  font-weight: 500;
}

.over .client{
  display: flex;
  width: 30%;
  justify-content:space-between;
  margin-left: 52%;
}

.over .client h4{
  font-size:25px;
}

/*---About begins----*/
.about{
    display: flex;
    margin-top: 3%;
}
.about h4{
    font-size: 33px;
    padding-top: 10%;
    margin-left: 4%;
    font-family: Segoe;
    font-weight: 500;
}

.about h6{
    margin-left: 4%;
    width:80%;
    font-size:20px;
    font-family: Segoe;
    line-height:40px;
}

.learn{
    margin-top:2%;
    margin-left:4%;
    font-size: 18px;  
    font-family: Segoe;   
    background: darkred;
    margin-right:80%;
    text-align: center;
    padding:1%;
}

.learn a{
    text-decoration: none;
    color: white;
}

.about .whopic{
    padding-top: 6%;
    padding-right:5%;
}

.about .whobg{
    background: orange;
    padding-bottom:6%;
    padding-left:7%;
}

/*-------services begins---------*/
.services h4{
    font-size:33px;
    padding-top:6%;
    text-align: center;
    font-family: Segoe;
    font-weight: 500;
}

.services .service-flex{
    display: flex;
    margin-left: 8%;
    justify-content: space-between;
    width: 85%;
    margin-top:-4%;

}

.services .service-flex h4{
  font-size:23px;
  font-weight: 500;
  font-weight: 500;
}

.services .service-flex h6{
  font-size:17px;
  font-family:segoe;
}


.services .serv{
    width:30%;
    border:1px solid black;
    padding: 1%;
}



/* ------how it works-----*/
.how{
    padding-top:2%;
}

.how .work{
    font-size:33px;
    padding-top:6%;
    text-align: center;
    font-family: Segoe;
    font-weight: 500;
}

.how .how-flex{
    display: flex;
}

.how .img{
    padding-top:3%;
    padding-left:5%;
}

.img img{
    border-bottom-left-radius:20%;
}

.how .imgbg{
    background:yellow;
    height:250px;
    margin-left:3%;
}
.step{
    display: flex;
    width:80%;
    margin-left:13%;
    justify-content: space-between;
} 

.step .steps{
    width:40%;
    padding-top:3%;
}

.steps h4{
    font-size:20px;
    color:darkred;
}

.how h6 .step{
  text-align: center;
}

/*----Contact--------*/
.contact{
    background-color:#faf8f8;
    padding-top:5%;
}
.form{
    padding-top:20px;
}
.form input[type=text], select, textarea {
    width: 40%; 
    padding: 12px; 
    border: 1px solid black; 
    margin-top: 6px; 
    padding-top:15px;
    border-top: none;
    border-left: none;
    border-right: none;
    background: none;
  }
  
  .form input[type=submit] {
    background-color: darkred;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight:500;
  }
  
  .form input[type=submit]:hover {
    background:none;
    border:2px solid darkred;
    color: black;

  }
  
  .containerd {
    border-radius: 5px;
    padding: 20px;
    text-align: center;
  }

 .get{
    color:black;
    font-size:30px;
    text-align: center;
    font-family:Segoe; 
  }
    
/*-------review--------*/
.contain{
    padding-top:5%;
    width:55%;
    margin-left:25%;
}
.head {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top: 10px;
}

.middle {
  float: left;
  width: 70%;
  margin-top: 10px;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}


/*whatsapp design*/
.whatsapp_float{
    position:fixed;
    width:60px;
    height:60px;
    bottom:40px;
    right:40px;
    background-color:#25d366;
    color:white;
    border-radius:50px;
    text-align:center;
    font-size:30px;
    box-shadow:1px 1px 2px #999;
    z-index:100;
  }

  .whatsapp-icon {
    margin-top:16px;
  }

.help{
    position: fixed;
    font-size: 40px;
}

/*----footer-----*/

 footer{
  margin-top: 5%;
  background: #B2BEB5;
  height:140px;
  padding: 4%;
 }

 footer .icon {
  margin-left: 47%;
 }

 footer h6{
  text-align: center;
 }







/*----------Media Query----------*/

@media screen and (max-width: 500px)
{ 
   .home{
    margin-top: -26%;
    background-size:contain;
    height:200px; 
}

}
@media screen and (max-width: 928px) 
{

  .navbar{
    display:inline;
  }

  nav .navbar .logo img{
    margin-top: -14%;
    margin-left: 115px;
  }
  .home{
    margin-top: -36%;
    background-size:contain;
    height:200px; 
}
ul li{
 display: none;
}

.web{
  display: none;
 
}



.home .text2{
      display: none;
}

.over h1{
  font-size: 30px;
}

.over .client{
  width:60%;
   margin-left: 90px;
}

.client h4{
   background:orange;
   padding:4px;
   border-radius:5px;
}

.over .finish{
  margin-left: -55%;
}

.about{
  display: inline;
  text-align: center;
}

.about h4{
  font-size: 27px;
  font-weight: 500;
}

.about h6{
  margin-left: 9%;
  font-size: 17px;
  line-height:30px;
}

.about .whopic{
     width:100%;  
     margin-top: 6%;   
}

.about .whopic img{
  width: 105%;
  padding-left:-20px;
}

.whobg{
  width:100%;
  border-bottom-left-radius: ;
}

.who .learn{
  font-size:15px;
  width:50%;
  margin-left:25%;
  border-radius: 5px;
}

.services{
  margin-top:5%;
}

.services h4{
  font-size:27px;
}

.services .serv h4{
  font-size:23px;
}
.services .service-flex{
  display: inline;
}

.services .serv{
  width: 90%;
  margin-left:5%;
  padding:3%;
  border:none;
}

.how .how-flex{
  display: inline;
 
}

.img img {
  width: 100%;
  border-bottom-left-radius:35%;
}

.step{
  
  display: inline;
}

.steps{
  margin-top:12%;
  padding-left:40px;
}

.steps img{
  margin-left: 110%;
}

.steps h4{
  margin-left: 98%;
  width:100%;
}
.steps h5{
  margin-left: 105%;
  width:100%;
}
.steps h6{
  width:290%;

}

.contain .head{
  font-size: 15px;
}

.form{
  width:100%;
}

.form input[type=text], select, textarea {
    width: 80%; 
  }

  .contain .head{
    text-align: center;
  }
  .contain .cont{
    width:100%;
  }

}

@media screen and (max-width: 1100px) and (min-width: 700px)
{

  nav{
    border-bottom: none;
    height:85px;
  }
 .navbar .menu{
   display: none;
 }
 nav .navbar .logo{
  margin-left:23%;
 }


 .navbar .web{
  display: none;
 }

 .home{
    margin-top:1px;
    background-size:cover;
    height:400px; 
}

.over h1{
  font-size: 30px;
}

.over .client{
  width:40%;
  margin-left:30%;
}

.client h4{
   background:orange;
   padding:4px;
   border-radius:5px;
}
.about{
  display: inline;
}

.about .whopic{
  display: none;
}

.about .who h4{
  text-align: center;
}

.about .who h6{
  margin-left:10%;
}

.about .who .learn{
  margin-left:35%;
  width: 30%;
}

.how .how-flex{
  display: inline;
}

.how .img img{
  width: 84%;
  margin-left: 5%;
  margin-right:15%;
}

.how .imgbg{
  margin-right: 15%;
  margin-left:15%;
}

.how .step{
  margin-top: 10%;
  display: flex;
  width:60%;
}

.how .steps{
  width:30%;
  margin-left: -20%;
}

.form{
  width:90%;
  margin-left: 5%;
}
.form input[type=text], select, textarea {
    width: 80%; 
  }

.contain .head{
  margin-left:20%;
}
.contain .cont{
  margin-left: 20%;
}

.foter{
  height:100px;
}

.foter .foot{
  display: none
}

.footer .copy{
  font-size: 25px;
}

.foter .icon{
  width: 35%;

}

.foter .icon img{
  margin-left: 20px;
}

}
</style>