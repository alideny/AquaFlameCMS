<?php

// Inialize session
session_save_path('phpsessions');
session_start();

// Delete certain session
unset($_SESSION['username']);

// Delete all session variables
session_destroy();

// Jump to login page
       header('refresh:5;url=index.php');
		echo '<link rel="stylesheet" type="text/css" href="../wow/static/login/static/_themes/bam/css/master.css?v1"/>
 <center><b><span style="color:red">Logged Out Succesfully,</span></b></br>You\'ll be redirected in about 5 secs. If not, click <a href="index.php">here</a>.</center>';


?>
<html><br><br><center><img src="../wow/static/images/logos/wof-logo.png" alt="Logo"/></center></html>