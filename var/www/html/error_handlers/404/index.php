<title>404</title>
<h2> Requested URL Not Found</h2>

<p>The Page requested (<?php echo $_SERVER['REQUEST_URI']; ?>) was not found </p>
<br>
<p>If you feel this was a mistake or this file should exist <a href="mailto:rossm@rossmdevs.me?Subject=404%20Page" target="_top">email me (rossm@rossmdevs.me)</a>
</p>
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

<script> console.log("404 Page: Rossm Devs, Inc.")</script>
