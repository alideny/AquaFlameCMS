<?php
require_once("../configs.php");

define('PAGIFY_PER_PAGE', 20);	# How many rows are visible per table
define('PAGIFY_BEFORE', 10);	# Links before the current page in the pagify bar
define('PAGIFY_AFTER', 10);		# Links after the current page in the pagify bar

$blacklist_database = array( #single dimensional array, database names appearing in here will not be displayed
	'information_schema',
	'mysql'
);
$blacklist_tables = array( #multi dimensional array, key => array(), where key is the database name and array contains names of tables not to be displayed
	'site' => array(
		'',
		''
	),
	'' => array(
		''
	)
);
?>
<style>
#rm_database_container,
#rm_database_container td,
#rm_database_container th,
#rm_database_container input,
#rm_database_container select,
#rm_database_container textarea { font-family: verdana; font-size: 10px; }
#rm_database_container textarea,
#rm_database_container .infobox input,
#rm_database_container .infobox option { width: 280px; }
#rm_database_container textarea { height: 100px; }
#rm_database_container a img { border: 0px; }
#rm_database_container .rm_display { border: 1px solid #ccc; width: 100%; margin-top: 4px; }
#rm_database_container .rm_display .e td { background-color: #e4eaf2; }
#rm_database_container .rm_display .o td { background-color: #eef2f7; }
#rm_database_container .rm_display img { margin-right: 2px; vertical-align: middle;}
#rm_database_container .rm_display td { color: #333333; }
#rm_database_container .rm_display tr:hover td { background-color: #ffbd44; color: black; }
#rm_database_container .redify { color: red; }
#rm_database_container .rm_display .f,
#rm_database_container .rm_display .h { background-color: #d1dceb; height: 18px; }
#rm_database_container a { color: #4b8dd8; }
#rm_database_container a.active { color: #000; }
#rm_database_container pre { font-size: 11px; font-family: Consolas, "Courier New"; }
#rm_database_container .infobox { background: white url("images/infobox.jpg") repeat-x bottom left; border: 1px solid #bbb8a9; border-top: none; padding: 10px; margin: 0 0 8px 0; }
#rm_database_container .rm_header { margin-bottom: 10px; }
#rm_database_container .rm_display .e td,
#rm_database_container .rm_display .o td { padding-left: 3px; padding-right: 3px; }
#rm_database_container .rm_display .f td { padding-right: 3px; padding-left: 3px; color: #000; }
#rm_database_container a:hover { text-decoration: none; }
#rm_database_container h3 { font-family: verdana; font-size: 10px; margin: 0 0 8px 0; padding: 0px; }
#rm_database_container .pagify { font-size: 9px; font-family: "Lucida Grande", tahoma, verdana; text-align: center; }
#rm_database_container .rm_display tr:hover td.pagify,
#rm_database_container .rm_display tr.f:hover td { background-color: #D1DCEB; }
#rm_database_container .col_rm_actions { width: 54px; }
#rm_database_container td.col_id { text-align: right; width: 30px; }
#rm_database_container td.col_id span { color: #aaa; }
#rm_database_container div.obtabs_holder { border-bottom: 1px solid #bbb8a9; height: 25px; }
#rm_database_container ul.obtabs { list-style: none; margin: 1px 0 -1px 0; padding: 0; position: absolute; width: 100%; }
#rm_database_container ul.obtabs li.first { margin-left: 0; }
#rm_database_container ul.obtabs li { float: left; display: block; height: 24px; padding-right: 12px; margin-left: -5px; position: relative; background: url(images/tabright-back.gif) 100% 0 no-repeat; border-bottom: 1px solid #bbb8a9; white-space: nowrap; }
#rm_database_container ul.obtabs span { height: 24px; line-height: 24px; padding-left: 7px; background: url(images/tableft-back.gif) no-repeat; }
html>body #rm_database_container ul.obtabs span { display: block; }
#rm_database_container ul.obtabs li#current { z-index: 1; border-bottom: 1px solid #fff; height: 25px; background-image: url(images/tabright.gif); color: white; }
#rm_database_container ul.obtabs li#current span { background-image: url(images/tableft.gif); }
#rm_database_container ul.obtabs a { color: #393007; text-decoration: none; }
#rm_database_container ul.obtabs li#current a { color: #95801d; }
#rm_database_container .field_heading { color: black; background-color: #D1DCEB; padding: 4px; }
#rm_database_container .field_value { color: black; background-color: white; border-left: 1px solid #D1DCEB; border-right: 1px solid #D1DCEB; padding: 4px; }
#rm_database_container .fields { border-bottom: 1px solid #D1DCEB; }
</style>

<div id="rm_database_container">
<?php
if (MYSQL_PREDEFINED_DATABASE) {
	$db = MYSQL_DATABASE;
} else {
	if (isset($_GET['db'])) {
		$db = $_GET['db'];
	}
}

function runQuery($query, $db = null) {
	$connect = mysql_connect(MYSQL_SERVER, MYSQL_USERNAME, MYSQL_PASSWORD);
	if (!$connect) {
		die("<div class=\"error\">" . mysql_error() . "</div>");
	}
	if (!empty($db)) {
		mysql_select_db($db, $connect);
	}
    $result = mysql_query($query, $connect);
	return $result;
}
if (!MYSQL_PREDEFINED_DATABASE) {
	############### SHOW LIST OF DATABASES ###############
	$sql = "SHOW DATABASES";
	$result = runQuery($sql);
	if (mysql_num_rows($result)) {
		echo "<form method='get'>\n";
		echo "<select name='db' id='rm_databases'>\n";
		while ($row = mysql_fetch_assoc($result)) {
			foreach($row as $key => $value) {
				if (in_array($value, $blacklist_database)) {
					# display nothing
				} else if ($db == $value) {
					echo "<option value='$value' SELECTED>$value</a>\n";
				} else {
					echo "<option value='$value'>$value</a>\n";
				}
			}
		}
		echo "</select>\n";
		echo "\n<input type='submit' value='Select Database' />\n";
		echo "</form>";
	} else {
		die("<div class='redify'>No Databases Found</div>\n");
	}
} else {
	echo "<input type='hidden' name='db' value='$db' />\n";
}

if (empty($db)) {
	echo "Please select a database to continue.";
} else {


	if (isset($_GET['table'])) {
		$table = $_GET['table'];
	} else {
		$table = null;
	}

	############### SHOW LIST OF TABLES ###############
	$sql = "SHOW TABLES";
	$result = runQuery($sql,$db);
	if (mysql_num_rows($result)) {
		echo "<div class='obtabs_holder'>\n<ul class='obtabs'>";
		$first = " class='first'";
		while ($row = mysql_fetch_assoc($result)) {
			foreach($row as $key => $value) {
				if (@in_array($value, $blacklist_tables[$db])) {
					# display nothing
				} else if ($table == $value) {
					echo "<li$first id='current'><span><a href='?db=$db&table=$value'>$value</a></span></li>\n";
				} else {
					echo "<li$first><span><a href='?db=$db&table=$value'>$value</a></span></li>\n";
				}
			}
			$first = '';
		}
		echo "</ul></div>\n";
	} else {
		die("<div class='redify'>No Tables Found</div>\n");
	}
	?>
	<script language="Javascript">
	function cd(delUrl) {
		if (confirm("Deleting an item from the \"<?=$table?>\" table.\n\nAre you sure you would like to do this?")) {
			document.location = delUrl;
		}
	}
	</script>
	<?php


	if (!empty($_GET['delete'])) {
		$pri_column = find_primary($table);
		$sql = "DELETE FROM $table WHERE $pri_column = {$_GET['delete']} LIMIT 1";
		runQuery($sql,$db);
		echo "<div class='infobox'>Record {$_GET['delete']} in table $table has been deleted.</div>\n";
	}
	if (!empty($_GET['view'])) {
		$pri_column = find_primary($table);
		$sql = "SELECT * FROM $table WHERE $pri_column = {$_GET['view']} LIMIT 1";
		$result = runQuery($sql,$db);
		$row = mysql_fetch_assoc($result);
		echo "<div class='infobox'><strong>Viewing Entry #{$_GET['view']}</strong><div class='fields'>";
		foreach($row AS $key => $value) {
			if (strpos($key, "_id")) {
				$newkey = explode("_",$key);
				$foreign_pri_key = find_primary($newkey[0]);
				$sql = "SELECT name FROM {$newkey[0]} WHERE $foreign_pri_key = $value LIMIT 1";
				$result2 = runQuery($sql,$db);
				if ($newkey[0] == $table) {
					echo "<div class='field_heading'>$key</div>\n<div class='field_value'>$value</div>\n";
				} else if (@mysql_num_rows($result2)) {
					$row2 = mysql_fetch_assoc($result2);
					echo "<div class='field_heading'>$key</div>\n<div class='field_value'>$value (".htmlentities($row2['name']).")</div>\n";
				} else {
					echo "<div class='field_heading'>$key</div>\n<div class='field_value'>$value <span class='redify'>(Links to non existing item)</span></div>\n";
				}
			} else {
				if (strlen($value) == 0) {
					$display_value = '<span class="redify">&lt;empty&gt;</span>';
				} else {
					$display_value = htmlentities($value);
				}
				echo "<div class='field_heading'>$key</div>\n<div class='field_value'>$display_value</div>\n";
			}
		}
		echo "</div></div>\n";
	}
	if (!empty($_GET['add'])) {
		if (empty($_POST)) {
			$sql = "DESCRIBE $table";
			$result = runQuery($sql,$db);
			echo "<div class='infobox'>";
			echo "<h3>Adding an item to $table</h3>\n";
			echo "<form method='post'>\n";
			echo "<table cellpadding='1' cellspacing='1'>\n";
			while ($row = mysql_fetch_assoc($result)) {
				if ($row['Extra'] != 'auto_increment') {
					echo "<tr><td>{$row['Field']}</td><td>";
					if (strpos($row['Field'], "_id")) {
						$newkey = explode("_",$row['Field']);
						if (table_exists($newkey[0])) {
							dropdown_generic($newkey[0],$value,$row['Field']);
						} else {
							echo "<input name='{$row['Field']}' value='' />";
						}
					} else if ($row['Type'] == 'text') {
						echo "<textarea name='{$row['Field']}'></textarea>";

					} else {
						echo "<input name='{$row['Field']}' />";
					}
					echo "</td></tr>\n";
				}
			}
			echo "</table>\n";
			echo "<input type='submit' value='Save Item' />\n";
			echo "</form>\n";
			echo "</div>\n";
		} else {
			$sql = "INSERT INTO $table SET ";
			$pieces = array();
			foreach($_POST AS $key => $value) {
				$pieces[] = "$key = '$value'";
			}
			$sql .= implode(", ",$pieces);

			if (!runQuery($sql,$db)) {
				echo "<div class='infobox'>There was an error adding your item.</div>\n";
			}
		}
	}

	if (!empty($_GET['edit'])) {
		$eid = $_GET['edit'] + 0;
		$pri_column = find_primary($table);
		if (empty($_POST)) {
			$sql = "SELECT * FROM $table WHERE $pri_column = $eid LIMIT 1";
			$result = runQuery($sql,$db);
			$original = array();
			while ($row = mysql_fetch_assoc($result)) {
				$original[] = $row;
			}

			$sql = "DESCRIBE $table";
			$result = runQuery($sql,$db);
			echo "<div class='infobox'>";
			echo "<h3>Modifying item #$eid in $table</h3>\n";
			echo "<form method='post'>\n";
			echo "<table cellpadding='1' cellspacing='1'>\n";
			while ($row = mysql_fetch_assoc($result)) {
				if ($row['Key'] != 'PRI') {
					$value = $original[0][$row['Field']];
					echo "<tr><td>{$row['Field']}</td><td>";
					if (strpos($row['Field'], "_id")) {
						$newkey = explode("_",$row['Field']);
						if (table_exists($newkey[0])) {
							dropdown_generic($newkey[0],$value,$row['Field']);
						} else {
							echo "<input name='{$row['Field']}' value='$value' />";
						}
					} else if ($row['Type'] == 'text') {
						echo "<textarea name='{$row['Field']}'>$value</textarea>";
					} else {
						echo "<input name='{$row['Field']}' value='$value' />";
					}
					echo "</td></tr>\n";
				}
			}
			echo "<tr><td>&nbsp;</td><td><input type='submit' value='Save Item' /></td></tr>\n";
			echo "</table>\n";
			echo "</form>\n";
			echo "</div>\n";
		} else {
			$sql = "UPDATE $table SET ";
			$pieces = array();
			foreach($_POST AS $key => $value) {
				$pieces[] = "$key = '$value'";
			}
			$sql .= implode(", ",$pieces);
			$sql .= " WHERE $pri_column = $eid LIMIT 1";
			if (!runQuery($sql,$db)) {
				echo "<div class='infobox'>There was an error updating your item.</div>\n";
			}
		}
	}



	if (!empty($table)) {
		rm_display($table, $db);
	}

}

function table_exists($table_name) {
	$sql = "SHOW TABLES LIKE '$table_name'";
	$result = runQuery($sql);
	if (mysql_num_rows($result)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

function find_primary($table_name) {
	$sql = "DESCRIBE $table_name";
	$result = runQuery($sql);
	$primary = false;
	while ($row = @mysql_fetch_assoc($result)) {
		if ($row['Key'] == 'PRI') {
			$primary = $row['Field'];
		}
	}
	return $primary;
}

function rm_display($table, $db) {
	$per_page = PAGIFY_PER_PAGE;
	$pagify_before = PAGIFY_BEFORE;
	$pagify_after = PAGIFY_AFTER;
	$sql = "SELECT * FROM $table";
	$result = runQuery($sql,$db);
	if (isset($_GET['page']) && $_GET['page'] > 0) {
		$page = $_GET['page'] + 0;
	} else {
		$page = 1;
	}
	if (mysql_num_rows($result)) {
		$total_results = mysql_num_rows($result);
		$total_pages = ceil($total_results / $per_page);
		$first_item = $per_page * ($page - 1);
		$sql .= " LIMIT $first_item, $per_page";
		$result = runQuery($sql);
		$max_this_page = $first_item + $per_page;
		if ($max_this_page > $total_results)
			$max_this_page = $total_results;
		
		$pre_pagify = "";
		for ($i = 1; $i <= $total_pages; $i++) {
			if ($page == $i)
				$pre_pagify .= "<a href='?db=$db&table=$table&page=$i'><strong>$i</strong></a> ";
			else if (($i <= ($page + $pagify_after)) && ($i >= ($page - $pagify_before)))
				$pre_pagify .= "<a href='?db=$db&table=$table&page=$i'>$i</a> ";
		}
		$pre_pagify .= "";
		

		$pagify = "";
		if ($page > 1) {
			$pagify .= "<a href='?db=$db&table=$table&page=1'>First</a> | <a href='?db=$db&table=$table&page=". ($page - 1) . "'>Prev</a> | ";
		} else {
			$pagify .= "First | Prev | ";
		}

			$pagify .= $pre_pagify;

		if ($page < $total_pages) {
			$pagify .= " | <a href='?db=$db&table=$table&page=". ($page +1) . "'>Next</a> | <a href='?db=$db&table=$table&page=". ($total_pages) . "'>Last</a>";
		} else {
			$pagify .= " | Next | Last";
		}

		$pagify .= "";
		
		$dataset = array();
		$datacolumns = array();
		$i = 0;
		while ($row = mysql_fetch_assoc($result)) {
			foreach($row as $key => $value) {
				$dataset[$i][$key] = $value;
			}
			$i++;
		}
		
		echo "<table class='rm_display table_$table' cellpadding='1' cellspacing='1'>\n";
		echo "<tr class='h'><td colspan='". (sizeof($dataset[0]) + 1) . "' class='pagify'>$pagify</td></tr>\n";
		echo "<tr class='h'>";
		$pri_column = find_primary($table);
		if ($pri_column)
			echo "<th class='col_rm_actions'>Actions</th>";
		foreach($dataset[0] as $key => $value) {
			$datacolumns[] = $key;
			echo "<th class='col_$key'>$key</th>";
		}
		echo "</tr>\n";
		
		$j = 0;
		foreach($dataset as $data) {
			$d = ($j++ % 2) ? "e" : "o";
			echo "<tr class='$d'>";
			if ($pri_column) {
				echo "<td class='col_rm_actions'><a href='?db=$db&table=$table&page=$page&edit=".$data[$pri_column]."' title='Edit'><img src='images/item_edit.png' alt='Edit'></a>";
				echo "<a href='javascript:cd(\"?db=$db&table=$table&page=$page&delete=".$data[$pri_column]."\")' title='Delete'><img src='images/item_delete.png' alt='Delete'></a>";
				echo "<a href='?db=$db&table=$table&page=$page&view=".$data[$pri_column]."' title='View'><img src='images/item_view.png' alt='View'></a></td>";
			}
			foreach($data as $key => $value) {
				if (strpos($key, "_id")) {
					$newkey = explode("_",$key);
					$foreign_pri_key = find_primary($newkey[0]);
					$sql = "SELECT name FROM {$newkey[0]} WHERE $foreign_pri_key = $value LIMIT 1";
					$result2 = runQuery($sql,$db);
					if (@mysql_num_rows($result2)) {
						$row2 = mysql_fetch_assoc($result2);
						echo "<td class='col_$key'>{$row2['name']}</td>";
					} else {
						echo "<td class='col_$key'><span class='redify'>$value</span></td>";
					}
				} else if ($key == 'id') {
					echo "<td class='col_$key'>".return_5_char_number($value)."</td>";
				} else {
					echo "<td class='col_$key'>".trimmer($value,40)."</td>";
				}
			}
			echo "</tr>\n";
		}
		echo "<tr class='f'><td colspan='". (sizeof($datacolumns) + 1) . "'><a href='?db=$db&table=$table&page=$page&add=1' title='Add'><img src='images/item_add.png' alt='Add'></a> ";
		echo "Displaying ".($first_item+1)." to $max_this_page of $total_results Results from <em>$table</em></td></tr>\n";
		echo "<tr class='h'><td colspan='". (sizeof($datacolumns) + 1) . "' class='pagify'>$pagify</td></tr>\n";
		echo "</table>\n";
	} else {
		echo "<div class='redify'><a href='?db=$db&table=$table&page=$page&add=1' title='Add'><img src='images/item_add.png' alt='Add'></a> Empty Table</div>";
	}
}

function dropdown_generic($item, $selected = 1, $name = '') {
	if (empty($name))
		$name = $item;
	$pri_column = find_primary($item);
    $sql = "SELECT name, $pri_column FROM $item ORDER BY name ASC";
    $result = runQuery($sql);
    echo "<select name=\"$name\" class=\"dropdown\">\n";
    while ($row = mysql_fetch_assoc($result)) {
        echo "<option ";
        if ($selected == $row[$pri_column])
            echo "selected ";
        echo "value=\"" . $row[$pri_column] . "\">" . ucfirst($row['name']) . "</option>\n";
    }
    echo "</select>\n";
}

function trimmer($string, $length) {
	if (strlen($string) > $length + 3)
		return htmlspecialchars(trim(substr($string, 0, $length))) . '&#0133;';
	else
		return htmlspecialchars($string);
}

function return_5_char_number($number) {
	if ($number >= 10000) {
		return $number;
	} else if ($number >= 1000) {
		return ("<span>0</span>$number");
	} else if ($number >= 100) {
		return ("<span>00</span>$number");
	} else if ($number >= 10) {
		return ("<span>000</span>$number");
	} else {
		return ("<span>0000</span>$number");
	}
}
?>
</div><!-- /#rm_database_container -->