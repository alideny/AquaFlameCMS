<?php
session_save_path('phpsessions');
if (!isset($_SESSION)) 
{
  session_start();
}

/*||||||||||||||||||||||||||||||||||||||||*/
/*|||||||The Language Configuration|||||||*/
/*|||||||||||DO NOT TOUCH THIS||||||||||||*/
/*||||||||||||||||||||||||||||||||||||||||*/
$lang = &$_SESSION['Local'];
$lang = $_GET['Local'];
switch ($lang)
{
    case 'en-us' :
        include ("lang/en-us.php");
        break;
	case 'ro-ro' :
        include ("lang/ro-ro.php");
        break;
    case 'en-gb' :
        include ("lang/en-gb.php");
        break;
	case 'it-it' :
        include ("lang/it-it.php");
        break;
    case 'de-de' :
        include ("lang/de-de.php");
        break;
    case 'bu-bu' :
        include ("lang/bg-bg.php");
        break;
    case 'es-es' :
        include ("lang/es-es.php");
        break;
    case 'es-mx' :
        include ("lang/es-mx.php");
        break;
    case 'gr-gr' :
        include ("lang/gr-gr.php");
        break;
    case 'ru-ru' :
        include ("lang/ru-ru.php");
        break;
    case 'zh-cn' :
        include ("lang/zh-cn.php");
        break;
    case 'zh-tw' :
        include ("lang/zh-tw.php");
        break;
    case 'fr-fr' :
        include ("lang/fr-fr.php");
        break;         
    default :
        include ("lang/en-us.php");
        $lang = 'en-us';
}

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
    public $website['realm'] = "Set Realmlist Your_Realmlist"; // You realm (Example: Set Realmlist login.wowfailure.com)


    /*||||||||||||||||||||||||||||||||||||||||*/
    /*|||||||The Website Configuration||||||||*/
    /*||||||||||||||||||||||||||||||||||||||||*/
    public $server_db = "site"; //Your website database
    public $server_adb = "auth"; //Your account database
    public $server_cdb = "characters"; //Your characters database
    public $server_cdb_2 = "characters"; //Your characters database
    public $server_wdb = "world"; //Your world database
    public $server_wdb_2 = "world"; //Your world database
    public $charTable = 'characters'; //Your Character Table!!
    public $name_realm1['realm'] = "Server_Name_1"; //Your Realm Name 1
    public $name_realm2['realm'] = "Server_Name_2"; //Your Realm Name 2private public $
    public $realm_count = '1'; //number of realmsprivate public $
    public $charLimit = '10'; //Max characters to show on the pageprivate public $
    public $mysql_cod = 'cp1251';
    public $website['title'] = "WoWFailureCMS"; // Your Website Title
    public $website['slogan'] = "WoWFailureCMS, get your best CMS today, simple and fast!"; // Your Website Slogan.
    public $website['address'] = "http://www.wowfailure.co.cc"; // 'http://url/foldername/' or 'http://url/'
    public $website['root'] = "/WoWFailureCMS/"; // '/' <- for root and '/foldername/' <- for any folder
}

    /*||||||||||||||||||||||||||||||||||||||||*/
    /*||||||||||||DO NOT EDIT BELOW|||||||||||*/
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
<script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>