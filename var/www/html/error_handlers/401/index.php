<title>401</title>
<h2>Permission Denied</h2>

<p>The User (<?php echo $_SERVER['REMOTE_ADDR']; ?>) does not have permission to load  (<?php echo $_SERVER['REQUEST_URI']; ?>)  </p>


<br>
<h2>For Developers: </h2>
<p> Try accessing (<?php echo $_SERVER['REQUEST_URI']; ?>) from the browser instead of here</p>






<hr>
Technical Aspects
<br>
Client IP: <?php echo $_SERVER['REMOTE_ADDR']; ?>

<br>
Port: <?php echo $_SERVER['SERVER_PORT']; ?>
<br>
Instance: <?php
echo gethostname(); 
?>

<script> console.log("401 Page: Rossm Devs, Inc.")</script>
