<html>
<head>
<title>WoWFailureCMS</title>
<link rel="stylesheet" type="text/css" href="../wow/static/local-common/css/common.css?v15"/>
<link rel="stylesheet" type="text/css" href="../wow/static/_themes/bam/css/master.css?v1"/>
	<script type="text/javascript" src="../wow/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
	<script type="text/javascript" src="../wow/static/local-common/js/core.js?v15"></script>
	<script type="text/javascript" src="../wow/static/local-common/js/tooltip.js?v15"></script>
<style type="text/css">
.loader {
	width:24px;
	height:24px;
	background: url("../wow/static/images/loaders/canvas-loader.gif") no-repeat;
}

.submit {
	height:38px;
	width:128px;
	background:url('../wow/static/images/buttons/button.png') no-repeat;
	border:0px;
	color:#E0BB00;
	text-shadow:0px 0px 2px #000;
	font-size:15px;
	font-weight:bold;
}
.submit:hover {
	background-position:0 -41;
}
.submit:active{
	background-position:0 -82;
}

.wuaha {
	text-shadow:0px 0px 6px #000;
}

.wuaha2 {
	text-shadow:0px 0px 10px #444;
}
</style>
</head>
<body>
<div id="embedded-login">
<center>
<body style="background-image:url(../wow/static/images/layout/bg-top-man.jpg);">
<?php session_save_path('phpsessions'); ?>


	<h2 class="wuaha2">WoWFailureCMS - Admin Panel</h2>
	<br />
<center><img src="../wow/static/images/logos/wof-logo-small.png" alt="Logo"/></center>
<br/><br/>
<table border="0">
<form method="POST" action="loginproc.php">
			<table>
			<tr>
			<div class="form-row required">
			<label for="email" class="label-full ">
			<p><span class="form-required"><b><a><span data-tooltip="Required">* </span></a></b></span><strong>Username:</strong></p>
			</label>			
			<input id="accountName" value="" name="username" maxlength="320" type="text" tabindex="1" class="input" size="20"/>
			</div>
			<br/><br/>
			<div class="form-row required">
			<label for="email" class="label-full ">

			<p><span class="form-required"><b><a data-tooltip="Required"\>* </a></b></span><strong>Password:</strong></p>
			</label>			
			<input id="password" name="password" maxlength="16" type="password" tabindex="2" autocomplete="off" class="input" size="20"/>
			</div>
			</tr>
			<tr>
			<td colspan="2" align="center"><br/><input type="submit" value="Login" class="submit"/></td>
			</tr>
			</form>
			
</div>
</table>
</center>
<br/><br/>
<center><img src="../wow/static/images/logos/wof-logo-icon.png" alt="Logo"/></center></body>
</html>