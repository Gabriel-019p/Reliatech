<?php
require 'config/database.php';

//check login status

$query = "SELECT * FROM messages id";
$messages = mysqli_query($connection, $query); 
?>



<!-- The sidebar -->

<div class="sidebar">
  <a class="active" href="Message.php">Message</a>
  <a href="Subscription.php">Subscription</a>
</div>

<!-- Page content -->
<div class="content">
<nav>
  <div class="signout"><a href="logout.php">Sign Out</a></div>
  <img src="images/notification.png" style="width:2%;">
 
</div>
</nav>

<section>
<div class="sign"><a href="logout.php">Sign Out</a></div>
</section>

 <section> 
<table>
 <thead>
    <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Country</th>
        <th>Message Sent</thh>
    </tr>
 </thead>
 <tbody>
 <?php while ($message = mysqli_fetch_assoc($messages)) :?>
   <tr>
     <td><?= $message['name'] ?></td>
     <td><?= $message['number'] ?></td>
     <td><?= $message['country'] ?></td>
     <td><a href="see-message.php?id=<?= $message['id'] ?>" class="btn sm">View</a></td>

    <?php endwhile ?>
 </tbody>

</table>
 </section>

</div>


<style>

/* The side navigation menu */
nav{
  background: #E5E4E2;
  padding:1%;
  display: flex;
}


nav img{
  padding-top:1%;
  margin-left:95%;
}

.signout a{
  color: black;
}
 .signout{
  width: 100%;
}

.sign{
  display: none;
}
section table{
   margin-top:4%;
}

.mainn{
  margin-left: 14%;
}

.wel h1{
  font-size: 15px;
  color: white;
}

.sidebar {
  padding-top: 1%;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}


/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 9%;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
margin-left:11%;
margin-top:-1%

}

table{
  width: 60%;
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: 20%;
}

td{
  padding:1%;
  text-align: center;
  border-bottom: 1px solid black;
  width:10%;
}

th{
  border-bottom: 1px solid black;
  border-collapse: collapse;
  padding: 2%;
  background: #04AA6D;
  color: white;
  font-size: 17 px;
}

.btn{
  text-decoration: none;
}

@media screen and (max-width: 700px)
{

  nav{
    display: none;
  }
  .sidebar{
    display: none;
  }

  table{
    width: 100%;
    margin-left: -1px;
  }

  .sign{
      display: inline;
      padding-top: 10px;
      background: darkred;
      padding: 6px;
  }

  .sign a{
    color: white;
    text-decoration: none;
  }
}

@media screen and (max-width: 1100px)
  {
    nav{
    margin-left: -85px;
  }
    .sidebar{
    display: none;
  }

  }

</style>