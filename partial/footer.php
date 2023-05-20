
<footer>

<div class="request"><a href="index.php">REQUEST FOR QUOTE</a></div>

<div class="fund">
<h6 class="copy">Copyright © 2023 Reliatech. All Rights Reserved.</h6>
<div class="term">
<h6><a href="term-and-condition.php">Terms and Condition</a></h6>
<h6><a href="refund-policy.php">Payment/Refund Policy</a></h6>
</div>
</div>

</footer>




<style>
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

 footer{
  margin-top: 5%;
  background: black;
  height:10px;
  padding: 4%;
  color: white;
  border-top: 3px solid white;
 }

 .fund .copy{
  color: grey;
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
  margin-right: -5%;
  display: flex;
  width:38%;
  justify-content:space-between;

 }

 .term h6{
  border-right:2px solid grey;
  padding:5px;
 }

 .term h6 a{
    text-decoration: none;
    color: grey;
 }

 footer .fund{
  display: flex;
  width:90%;
  justify-content: space-between;
  margin-top:1%;
 }



 @media screen and (max-width: 928px) 
{

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
    width: 95%;
    margin-left:3%;
    margin-top: -3%;
  }

  footer .term a{
    font-size:14px;
  }

  footer .term h6{
    border: none;
  }

}

</style>