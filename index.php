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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

<!---------navbar begins----------->
<nav>
    <div class="navbar">
    <div class="logo"><span class="re">R</span><span class="el">elia</span><span class="te">tech</span></div>
    <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
</ul>
    <div class="web"><a href="#contact">Get a Website</a></div>

    <div class="menu-btn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </div>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="portfolio.php">Catalogue</a>
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

      <div class="wab">
       <h3>WEBSITE DESIGN AND DEVELOPMENT AGENCY</h3>
       <h3></h3>

       <div class="requ"><a href="#contact">Request Quote</a></div>
       </div>
    
</section>


<!-----------new section------------------->
<section class="container">
<div class="static-text"> Get your</div>
<ul class="dynamic-text">
  <li><span>Portfolio</span></li>
  <li><span>Crytocurrency</span></li>
  <li><span>Ecommerce</span></li>
  <li><span>Online Banking</span></li>
  <li><span>Busimess</span></li>
  <li><span>Blog</span></li>
  <li><span>Landing Page</span></li>
  
</ul>
<div class="static-text">Website</div>

</section>
<div class="req"><a href="#contact">Request Quote</a></div>

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
      <div class="serv1">
        <img src="image/img.jpg" style="width:100%; height:240px;">
        <h4>WEBSITE DEVELOPMENT AND DESIGN</h4>
        <h6>The Importance of a Web development & Design to any business in todays world cannot be Overemphasized.</h6>
      </div>
     </div>

     <div class="serv">
      <div class="serv2">
     <img src="image/ui2.jpg" style="width:100%; height:240px;">
        <h4>UI/UX DESIGN</h4>
        <h6>At Reliatech, we are dedicated to maintaining your site for your, ensuring your website is up to date, regularly updating content and fixing any broken links.</h6>
       </div>
      </div>

     <div class="serv">
      <div class="serv3">
     <img src="image/main2.png" style="width:100%; height:240px;">
        <h4>WEBSITE MAINTENANCE</h4>
        <h6>Reliatech Offers Prospective & Existing Clients the opportunity to outsource some of their IT-related Work. </h6>
</div>
      </div>

   </div> 
</section>

<!---------why choose us----------->
<section class="choose">

<h2>WHY CHOOSE US</h2>
<div class="choose-flex">

<h6>DIGITAL SOLUTIONS</h6>
<h6>EXPERIENCE</h6>
<h6>10 YEARS IN WEB DEVELOPMENT</h6>
<h6>99.9% UPTIME GUARANTEE</h6>

</div>

  <div class="over-flex">
<div class="cli">
  <h1>200+</h1>
  <h5>Clients</h5>
</div>

<div class="finis">
  <h1>235+</h1>
  <h5>Finished Projects</h5>
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
        <option value="uk">Canada</option>
        <option value="uk">Australia</option>
        <option value="uk">South Africa</option>
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
<p>4.1 average based on 105 reviews.</p>
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
    <div>60</div>
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
    <div>20</div>
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
    <div>13</div>
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
    <div>5</div>
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
    <div>7</div>
  </div>
</div>
    </div>

 <a href="https://wa.me/+2349138861254" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a></div>
  

<footer>

<div class="request"><a href="#contact">REQUEST FOR QUOTE</a></div>

<div class="fund">
<h6 class="copy">Copyright © 2023 Reliatech. All Rights Reserved.</h6>
<div class="term">
<h6><a href="term-and-condition.php">Terms and Condition</a></h6>
<h6><a href="refund-policy.php">Payment/Refund Policy</a></h6>
</div>
</div>

</footer>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<script src="js/script.js"></script>
    
</body>
</html>









<style>
/*---nav begin----*/
nav{
 height: 73px;
 width: 100%;
 background:white;
 position: fixed;
 border-bottom: 1px solid lightgrey;
 z-index: 1;
}

nav .menu{
    display: flex;
}

nav .menu{
    width: 30%;
    justify-content: space-between;
}

nav .sticky{
  background: red;
  padding: 30px 0;
}

.re{
        color:  darkred;
        font-size:60px;
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
    transition: color 0.3s ease;
}

nav .menu li a:hover{
  color:grey;
  border-bottom: 2px solid darkred;
}
nav .navbar{
    width:90%;
    margin-top:-1.5%;
    margin-left:1%;
   
}

.logo{
  width:13%;
  height:80px;
 text-align: center;
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
  border-radius:50px;
  color: darkred;
}
.checkbox div{
  width: 30px;
  height: 4px;
  background-color: darkred;
  margin: 6px 0;
  display: none;
}

/* menu button styling*/
.menu-btn {
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

.home .wab{
  display: none;
}



/*------over-----*/
.container{
  display: flex;
  margin-top: 5%;
  width:72%;
  justify-content:space-between;
  
}

.static-text{
  color: black;
  font-size: 60px;
  font-weight: normal;
}

.dynamic-text{
  margin-left: 1.3em;
  height: 90px;
  line-height: 90px;
  overflow: hidden;
}

.dynamic-text li{
  list-style: none;
  color: #cb0900;
  font-size: 60px;
  font-weight: 500;
  position: relative;
  top: 0;
  animation: slide 12s steps(4) infinite;
}

@keyframes slide{
  100%{
    top: -360px;
  }
}

.dynamic-text li span{
  position: relative;
  margin: 5px 0;
  line-height: 80px;
}

.dynamic-text li span::after{
 content: "";
 position: absolute;
 left: 0;
 height: 108%;
 width: 100%;
 background-color: white;
 border-left: 5px solid white;
 animation: typing 3s steps(10) infinite;
}

@keyframes typing{
  40%, 60%{
    left: calc(100% + 250px);
  }
  100%{
    left: 0;
  }
}

.req{
  margin-left: 42%;
  margin-right: 45%;
  font-size:20px;
  margin-top: 2%;
  border:2px solid darkred;
  border-radius: 50px;
  padding:7px;
  width:15%;
  text-align: center;
}

.req a{
  text-decoration: none;
  color: black;

}

.req:hover{
   background: darkred;
   color: white;
}

.req a:hover{
  color: white;
}

.requ{
  display: none;
}

/*---About begins----*/
.about{
    display: flex;
    margin-top: 6%;
    background-color: #f1f1f1;
    height:500px;
}
.about h4{
    font-size: 33px;
    padding-top: 10%;
    margin-left: 4%;
    font-family: Arial;
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
.learn:hover{
   background: orange;
}
.learn a{
    text-decoration: none;
    color: white;
}

.learn a:hover{
  color: black;
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
    font-family: Arial;
    font-weight: 500;
}

.services .service-flex{
    display: flex;
    margin-left: 6%;
    justify-content: space-between;
    width: 90%;
    margin-top:-4%;

}

.services .service-flex h4{
  font-size:23px;
  font-weight: 500;
  font-weight: 500;
  font-family: Arial;
}

.services .service-flex h6{
  font-size:17px;
  font-family:segoe;
  padding:3%;
}


.services .serv{
    width:32.5%;
    border:1px solid grey;  
}




/*----------why choose-------*/

.choose{
  margin-top:10%;
  background-color: #f1f1f1;
  height:500px;
}
.choose h2{
  text-align: center;
  padding-top: 5%;
}


.choose .choose-flex{
  display: flex;
  width: 80%;
  justify-content:space-between;
  margin-left:10%;
  margin-top: 5%;
}
.choose .choose-flex h6{
  border: 1px solid lightgrey;
  width:20%;
  padding: 2%;
  text-align: center;
  background:white;
}

.choose .over-flex{
  display: flex;
  margin-top:5%;
  margin-left:15%;
}
.choose .over-flex .cli{
  background:#c04000;
  width:40%;
  color: white;
}

.choose .over-flex .finis{
  background: #b31b1b;
  width:40%;
  color: white;
}

.choose .over-flex h1{
  text-align: center;
  font-size:55px;
}

.choose .over-flex h5{
  text-align: center;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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

  option{
    font-size:10px;
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

.list{
  margin-top:10%;
  display: flex;
  width:100%;
  justify-content:space-between;
  background:grey;
  margin-bottom:-5%;
  padding:5%;
  color: white;
}

.list .servic{
  width:80%;
  margin-left: 5%;
}
.list .servic .abtt{
  padding-top:5%;
}

.fund .copy{
  color: grey;
 }


 footer{
  margin-top: 5%;
  background: black;
  height:10px;
  padding: 4%;
  color: white;
  border-top: 3px solid white;
 }

 .request{
  margin-left:40%;
  margin-top: -3%;
  background:white;
  color: black;
  border-radius: 50px;
  width:20%;
  text-align: center;
  padding:1%;
 }

 .request a{
  color: black;
  text-decoration: none;
 }


 .term{
  display: flex;
  width:40%;

 }

 .term h6{
  padding:5px;
 }

 .term h6 a{
  text-decoration: none;
  color: grey;
 }

 footer .fund{
  display: flex;
  width:80%;
  justify-content: space-between;
  margin-top:1%;
 }

 #mySidenav a{
  display: none;
 }



/*----------Media Query----------*/

@media screen and (max-width: 900px) 
{

  nav{
    margin-top: -18px;
  }
  .navbar{
    display:flex;  
  }

.re{
        font-size:50px;
    }

    .re{
        color:  darkred;
        font-size:60px;
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

.home{
    background-size:cover; 
}

.home .text2{
  display: none;
  
}

.home .wab{
  display: inline;
  color: white;
  text-align: center;
}

.home .wab h3{
padding-top: 130px;
margin-left: 13px;
font-size: 35px;
width: 90%;
font-weight: 500;
font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
line-height:63px;
}

ul li{
 display: none;
}

.web{
  display: none;
}

.requ{
  display: inline;
  font-size:15px;
  margin-top: 50px;
  margin-left:33%;
  background:darkred;
  border-radius: 50px;
  padding:13px;
  width:5%;
  text-align: center;
}

.requ a{
  text-decoration: none;
  color:white

}

.container{
  display: none;
}
.req{
  display: none;
}

.whopic{
  display: none;
}

.about{
  height:635px;
}
.about .who{
  display: inline;
  text-align: center;
  margin-top: 30px;
}

.about h4{
  font-size: 27px;
  font-weight: 500;
}

.about h6{
  margin-left: 9%;
  font-size: 17px;
  line-height:35px;
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
  
}

.who .learn{
  font-size:15px;
  width:50%;
  margin-left:25%;
  border-radius: 5px;
}

.services{
  margin-top:10%;
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

.choose .choose-flex{
  display: inline;
}

.choose .choose-flex h6{
  width: 80%;
  padding:18px;
  margin-left: 35px;
}

.choose .over-flex{
  display: inline;
}

.choose .over-flex .cli{
  width: 80%;
  padding:5px;
  margin-left: 35px;
}

.choose .over-flex .finis{
  width: 80%;
  padding:5px;
  margin-left: 35px;
}



.how{
  margin-top: 130px;
}
.how .how-flex{
  display: inline;
 
}

.how-flex .imgbg {
  display:none;
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

   footer{
    height: 70px;
   }
  .request{
    display: none;
  }

  footer .fund{
    display: inline;
  }

  footer .copy{
    font-size: 13px;
    text-align: center;
  }

  footer .term{
    width: 97%;
    margin-left:3%;
    margin-top: -3%;
  }

  footer .term a{
    font-size:14px;
  }

  footer .term h6{
    border: none;
  }


  /*menu-btn */

.menu-btn {
  display: block;
}

#mySidenav a{
  display: block;
 }
  .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  text-align:center;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
  line-height: 70px;
}

.sidenav a:hover{
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}



}




@media screen and (max-width: 1180px) and (min-width: 700px)
{

  nav{
    height:100px;
  }


.navbar .logo{
  padding-top: 4%;
}

.home .wab{
  display: inline;
  color: white;
  text-align: center;
}

.home .wab h3{
padding-top: 150px;
text-align: center;
font-size: 35px;
width: 90%;
font-weight: 500;
font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
line-height:105px;
}

.requ{
  display: inline;
  font-size:15px;
  margin-top: 50px;
  margin-left:40%;
  background:darkred;
  border-radius: 50px;
  padding:13px;
  width:5%;
  text-align: center;
}

.requ a{
  text-decoration: none;
  color:white

}

.menu-btn {
  display: block;
  margin-top:6%;
}

.about{
  display: inline;
}

.about .whopic{
  display: none;
}

.about .who h4{
  text-align: center;
  font-size: 38px;
}

.about .who h6{
  margin-left:10%;
  font-size: 23px;
}

.about .who .learn{
  margin-left:35%;
  width: 30%;
  font-size:22px;
}

.services .serv{
  width: 70%;
  margin-left: 15%;
}

.services h4{
  font-size:38px;
}
.services .service-flex h4{
  font-size:28px;
  padding:3%;
}

.services .service-flex h6{
  font-size:26px;
  padding:3%;
}

.choose{
  height:700px;
}
.choose h2{
  font-size:38px;
}

.choose .choose-flex h6{
  border: 1px solid lightgrey;
  width:90%;
  padding: 2%;
  text-align: center;
  background:white;
  font-size:23px;
}

.choose .over-flex .cli{
  background:#c04000;
  width:90%;
  color: white;
}

.choose .over-flex .finis{
  background: #b31b1b;
  width:90%;
  color: white;
}

.how{
  margin-top: -2%;
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

.steps{
  margin-top: -5%;
}
.steps h4{
    font-size:25px;
    color:darkred;
}

.steps h6{
    font-size:22px;
}

.form{
  width:90%;
  margin-left: 5%;
}
.form input[type=text], select, textarea {
    width: 80%; 
    font-size: 20px;
  }

.contain .head{
  margin-left:20%;
 font-size: 24px;
}

.contain p{
 font-size: 22px;
}
.contain .cont{
  margin-left: 20%;
}


  

  footer .term{
    width: 97%;
    margin-left:3%;
    margin-top: -3%;
    justify-content: space-between;
  }

  footer .term a{
    font-size:14px;
  }

  footer .term h6{
    border: none;
  }




}
</style>