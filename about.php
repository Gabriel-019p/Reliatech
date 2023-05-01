
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

<section class="aboutt">
   <div class="about">
     <h2>About Us</h2>
   </div>

</section>

<section class="abt">
    <div>
    <h5>Reliatech is an Innovative Website design, Development, Digital marketing and Software Development company established to employ the best methods available to provide quality web related services for our clients. Right from Inception, our approach to service delivery has been a blend of quality, innovation, speed and affordability. </h5>
</div>

<div>
<h5><img src="image/dot.png" style="width:3%;">At Reliatech we are in the industry to serve all strata of businesses, from start-ups to large cooperations, with the sole aim of helping our clients to maximize the countless benefits associated with using the internet.</h5>
</div>

<div>
<h5><img src="image/dot.png" style="width:3%;">Our services are highly Affordable. Our rates are flexible in such a way that any one can afford to get a website from us. </h5>
</div>

<div>
   <h5><img src="image/dot.png" style="width:3%;">Over the years we have taken Projects from client from different parts of the World, our expertise is not limited and neither is our Experience. </h5>
</div>

</section>

<section class="mission">
    <div>
    <h1>Our Mission</h1>
    <h6>Significantly improve our client's businesses with innovative designs and development aimed at maximizing the benefits of being on the digital space and giving them a competitive advantage by making use of the most suitable techniques and tools for their business</h6>
 </div>
</section>

</body>
</html>

<style>

/*-------navbar-------*/
.navbar{
    width:95%;
}

.navbar .logo img{
    width:45%;
}
nav .web a{
     text-decoration: none;
     font-size: 23px;
     font-family: Segoe;
     color: white;
     background:darkred;
     padding: 13px;
}


/*------- about-----*/
.aboutt{
    margin-top:-6%;
    height:650px;
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
}

/*------mission-----*/


.mission h1{
    text-align:center;
    padding-top:3%;
}

.mission h6{
    width:62%;
    margin-left:20%;
    font-family: sogoe;
    font-size: 22px;
    line-height: 33px;
}


/*----media Queries------*/

@media screen and (max-width: 700px)
{
.aboutt{
    background-size: cover;
    height: 300px;
    margin-top: -40px;
}

.aboutt h2{
    font-size:30px;
    padding-top:120px;
}
.abt{
    margin-top: 20px;
}

.abt img{
    width:100px;
} 

}

</style>