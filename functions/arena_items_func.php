<?php 
$connection_setup = mysql_connect($serveraddress,$serveruser,$serverpass)or die(mysql_error());
mysql_select_db($server_cdb,$connection_setup)or die(mysql_error());
$username = mysql_real_escape_string($name = $_GET['name']);
//fisrt query
$lbrspa = mysql_query("SELECT arenaTeamId,name,captainGuid,type,rating,seasonGames,seasonWins,weekGames,weekWins,rank FROM arena_team WHERE name = '".$username."'");
$get = mysql_fetch_assoc($lbrspa);
//second query
$lbrscv = mysql_query("SELECT arenaTeamId,guid,weekGames,weekWins,seasonGames,seasonWins,personalRating FROM arena_team_member WHERE arenaTeamId='".$get['arenaTeamId']."'");
$getb = mysql_fetch_assoc($lbrscv);

//Arena Type
$ttype = $get["type"];
if ($ttype == 2)
{
$type = "2v2";
}
elseif ($ttype == 3)
{
$type = "3v3";
}
elseif ($ttype == 5)
{
$type = "5v5";
}
//Arena Type Finish
?>