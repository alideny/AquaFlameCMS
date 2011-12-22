	<div class="helpers">
	<h3 class="subheader ">Summary of results for <span><?php echo $_POST["search"];?></span></h3>
	</div>
	<span class="clear"><!-- --></span>
    </div>
	<div class="search-left">
	<div class="search-header">
	<h2 class="header ">Search</h2>
	</div>
	<ul class="dynamic-menu" id="menu-search">
	<li class="">
	<a href="">
	<span class="arrow">Summary</span>
	</a>
	</li>
	<li class="item-active">
	<a href="search.php"><span class="arrow">Characters<span> <?php 
	 
	echo "$num_rows \n"; ?>
	</span></span>
	</a>
	</li>
	<li>
	<a href="search_g.php">
	<span class="arrow">Guilds<span></span></span>
	</a>
	</li>
	<li>
	<a href="search_a.php">
	<span class="arrow">Arena Teams<span></span></span>
	</a>
	</li>
	</ul>
    </div>
	<div class="view-table">
	<div class="table ">
	<table>
	<thead>
	<tr>
	<th width="15%" class=" first-child">
	<a href="" class="sort-link" >
	<span class="arrow">Name</span>
	</a>
	</th>
	<th width="6%">
	<a href="" class="sort-link" >
	<span class="arrow">Level</span>
	</a>
	</th>
	<th width="6%">
	<a href="" class="sort-link" >
	<span class="arrow">Race</span>
	</a>
	</th>
	<th width="6%">
	<a href="" class="sort-link" >
	<span class="arrow">Class</span>
	</a>
	</th>
	<th width="6%">
	<a href="" class="sort-link" >
	<span class="arrow">Faction</span>
	</a>
	</th>
	<th width="15%">
	<a href="" class="sort-link" >
	<span class="arrow">Guild</span>
	</a>
	</th>
	<th>
	<a href="" class="sort-link" >
	<span class="arrow">Realm</span>
	</a>
	</th>
	<th class=" last-child">
	<a href="" class="sort-link" >
	<span class="arrow">Battlegroup</span>
	</a>
	</th>
	</tr>
	</thead>
	
	<?php
require ('configs.php');

function mysql_open($serveraddress, $serveruser, $serverpass){
	$conn = mysql_connect($serveraddress, $serveruser, $serverpass) or die(mysql_error());
	return $conn;
}
function mysql_end($resc){
	mysql_close($resc);
}


function translate($race)
{
    $faction = "";
    switch ($race) {
        case "1":
        case "3":
        case "4":
        case "7":
        case "11":
        case "22":
            global $faction;
            $faction = "faction_0.jpg";
            break;
        case "2":
        case "5":
        case "6":
        case "8":
        case "9":
        case "10":
            global $faction;
            $faction = "faction_1.jpg";
            break;
    }
    return $faction;
}

if (isset($_GET['charname'])) {
    $cont = new wowheadparser();
    $conn = mysql_open($serveraddress, $serveruser, $serverpass);
    $sql = "SELECT guid,name,class,level,race,gender FROM `" . $server_cdb .
        "`.`characters` WHERE name='" . mysql_real_escape_string($_GET["charname"]) .
        "'";
		$num_rows = mysql_num_rows($result);
    $result = mysql_query($sql, $conn) or die(mysql_error());
    if ($row = mysql_fetch_array($result)) {
        $items = show_items($row["guid"]);
        $all = array_merge($items);
        $html->load('armory',$all);
    }
    mysql_end($conn);
} elseif (empty($_POST['search'])) {
    
} elseif (isset($_POST['search'])) {
    
    $term = $_POST['search'];
    $conn = mysql_open($serveraddress, $serveruser, $serverpass);
    $sql = "SELECT guid,name,class,level,race,gender FROM `" . $server_cdb .
        "`.`characters` WHERE name LIKE '%" . mysql_real_escape_string($term) . "%'";
    $result = mysql_query($sql, $conn) or die(mysql_error());
    while ($row = mysql_fetch_array($result)) {
        //echo $row['name'];
        echo '
		<tbody>
					<tr class="row1">
	<td>
	<a href="" class="item-link color-c9">
	<span class="icon-frame frame-18">
	<img src="images/postavatar.jpg" alt="" width="18" height="18" />
	</span>
	
	<strong><a href="advanced.php?name='.$row["name"].'">'.$row["name"].'</a></strong>
	</a>
	</td>
	<td class="align-center">'.$row["level"].'</td>
	<td class="align-center">
	<span class="icon-frame frame-14 " data-tooltip="'.$row['race'].'">
	<img src="wow/static/images/icons/race/'.$row['race'].'-'.$row['gender'].'.gif" alt="" width="14" height="14" />
	</span>
	</td>
	<td class="align-center">
	<span class="icon-frame frame-14 " data-tooltip="">
	<img src="wow/static/images/icons/class/'.$row["class"].'.gif" alt="" width="14" height="14" />
	</span>
	</td>
	<td class="align-center">
	<span class="icon-frame frame-14 " data-tooltip="">
	<img src="wow/static/images/icons/faction/'.translate($row["race"]).'" alt="" width="14" height="14" />
	</span>
	</td>
	<td>
	</td>
	<td>'.$name_realm1['realm'].'</td>
	<td>Loading...</td>
	</tr></tbody>';
    }
    
    mysql_end($conn);
}

?>