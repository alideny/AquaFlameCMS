<?php

# AquaFlameCMS

# This will gonna be the index page
# <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>

require_once('/settings/website.php');
require_once('/settings/mysql.php');
require_once('/settings/language.php');
require_once('/settings/template.php');

$Website = new Website();
$MySQL = new MySQL();
$Language = new Language();
$Template = new Template();

/*

$title = $Website->title.' - Homepage';
$type = 'homepage';

$varchar = 'page-and-sidebar'; //etc

$template = new template($title,$type);
$content = new content($varchar);


*/

?>
