<?php
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
?>