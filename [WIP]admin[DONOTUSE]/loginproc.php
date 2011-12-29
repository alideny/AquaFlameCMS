<?php

// Inialize session
session_save_path('phpsessions');
session_start();

// Include database connection settings
include('../configs.php');

// Let's connect to host
mysql_connect($serveraddress, $serveruser, $serverpass) or DIE('Connection to host is failed, perhaps the service is down!');

// Select the database
mysql_select_db($server_adb) or DIE('Database name is not available!');

// Retrieve username and password from database according to user's input

$accountName = mysql_real_escape_string($_POST['username']);
$accountPass = mysql_real_escape_string($_POST['password']);
$sha_pass_hash = sha1(strtoupper($accountName ) . ":" . strtoupper($accountPass));
$login = mysql_query("SELECT username,sha_pass_hash FROM account WHERE username = UPPER('".$accountName."') AND sha_pass_hash = CONCAT('".$sha_pass_hash."')");

// Check username and password match
if (mysql_num_rows($login) == 1) {
        // Set username session variable
        $_SESSION['username'] = $_POST['username'];
        // Jump to secured page
        header('refresh:5;url=index2.php');
		echo '<link rel="stylesheet" type="text/css" href="../wow/static/login/static/_themes/bam/css/master.css?v1"/>
 <center><b><span style="color:red">Logged Succesfully,</span></b></br>You\'ll be redirected in about 5 secs. If not, click <a href="index2.php">here</a>.</center>';
}
else {
        // Jump to login page
       header('refresh:5;url=index.php');
		echo '<link rel="stylesheet" type="text/css" href="../wow/static/login/static/_themes/bam/css/master.css?v1"/>
 <center><b><span style="color:red">Somethink was Wrong or you dont have Access,</span></b></br>You\'ll be redirected in about 5 secs. If not, click <a href="index.php">here</a>.</center>';
}

?>
<html><br><br><center><img src="../wow/static/images/logos/wof-logo.png" alt="Logo"/></center></html>