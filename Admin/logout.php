<!DOCTYPE html>
<html>
<body>
    <div style="width:150px;margin:auto;height:500px;margin-top:300px;">
<?php
require 'config/database.php';
session_destroy();

header('location: signin.php' );

die();

?>
</div>

</body>
</html>