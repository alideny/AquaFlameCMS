<?php
session_save_path('phpsessions');
if (!isset($_SESSION)) 
{
  session_start();
}
include("lang/System.php");
class Configuration
{
    /*||||||||||||||||||||||||||||||||||||||||*/
    /*||||||||The Server Configuration||||||||*/
    /*||||||||||||||||||||||||||||||||||||||||*/
    public $serveraddress = "localhost"; // Your MySQL server address
    public $serveruser = "root"; // Your MySQL user
    public $serverpass = "ascent"; //Your MySQL password
    public $serverport = "3306"; // Your MySQL Port
    public $donatadmin = "ascent"; // Your Donation Admin Password
    /*||||||||||||||||||||||||||||||||||||||||*/
    /*|||||||The Website Configuration||||||||*/
    /*||||||||||||||||||||||||||||||||||||||||*/
    public $server_db = "site"; //Your website database
    public $server_adb = "auth"; //Your account database
    public $server_cdb = "characters"; //Your characters database
    public $server_cdb_2 = "characters"; //Your characters database
    public $server_wdb = "world"; //Your world database
    public $server_wdb_2 = "world"; //Your world database
    public $charTable = 'characters'; //Your Character Table!
    public $realm_count = '1'; //number of realmsprivate public $
    public $charLimit = '10'; //Max characters to show on the pageprivate public $
    public $mysql_cod = 'cp1251';
}
    /*||||||||||||||||||||||||||||||||||||||||*/
    /*||||||||||||DO NOT EDIT BELOW|||||||||||*/
    /*||||||||||||||||||||||||||||||||||||||||*/
    $connection_setup = mysql_connect($serveraddress,$serveruser,$serverpass)or die(mysql_error());
    mysql_select_db($server_db,$connection_setup)or die(mysql_error());

    /*
    We don't need it, because it doesn't have an effect!

    if(isset($_SESSION['username']))
    {
        mysql_select_db($server_adb,$connection_setup)or die(mysql_error());
        $username = mysql_real_escape_string($_SESSION['username']);
        $lbrspa = mysql_query("SELECT * FROM account WHERE username = '".$username."'");
        $account_information = mysql_fetch_assoc($lbrspa);
        mysql_select_db($server_db,$connection_setup)or die(mysql_error());
    }
    */
?>
<?php
/* Moved these here because ['  '] gives errors */
$website['realm'] = "Set Realmlist Your_Realmlist"; // You realm (Example: Set Realmlist login.wowfailure.com)
$name_realm1['realm'] = "Server_Name_1"; //Your Realm Name 1
$name_realm2['realm'] = "Server_Name_2"; //Your Realm Name 2
$website['title'] = "WoWFailureCMS"; // Your Website Title
$website['slogan'] = "WoWFailureCMS, get your best CMS today, simple and fast!"; // Your Website Slogan.
$website['address'] = "http://www.wowfailure.co.cc"; // 'http://url/foldername/' or 'http://url/'
$website['root'] = "/WoWFailureCMS/"; // '/' <- for root and '/foldername/' <- for any folder
?>
<script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>