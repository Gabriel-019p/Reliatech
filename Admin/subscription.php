<!-- The sidebar -->
<div class="sidebar">
  <a  href="display.php">Message</a>
  <a  class="active" href="Subscription.php">Subscription</a>
</div>

<!-- Page content -->
<div class="content">
  ..
</div>


<style>

/* The side navigation menu */
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
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}


</style>