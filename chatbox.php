<?php
include("configs.php");
//Connect to db
$conn = mysql_connect("$serveraddress", "$serveruser", "$serverpass")or die("Couldn't connect to database"); 
//Site Shoutbox
#Post Shouts
function shout()
{
  if(isset($_POST['shout']))
  {
    //Shout Is Empty
    if(empty($_POST['body']))
    {
      return'<center>Shout was empty.</center><br/><br/>';
    }
    else
    {
      global $query, $conn, $server_db, $cap, $login, $_STRIP_1, $_STRIP_2, $_STRIP_3;
      //Check If Logged In
      if(!$login)
      {
        return'<center>You Must Login To Shout.</center><br/><br/>';
      }
      else
      {
        //Set Date
        $date = date('M d, Y');
        //Post Shout, Cap & Strip
        $body = $cap($_STRIP_1($_STRIP_2($_STRIP_3($_POST['body']))));
        
        //Success, Shout Is Posted
        $sql= $query("INSERT INTO $server_db.shouts (author, body, date) VALUES ('$login', '$body', '$date')")or die(mysql_error());
        
        header("Location: ./#shoutid");
      }
    }
  }
}

//View Shouts
class shouts
{
  public $view_shouts = array();
  public $shout_url;
  
  function shouts()
  {
    global $query, $array, $assoc, $num, $conn, $server_db, $cap;
  
    //ShoutBox Table
    $table = "shouts";
    // How many adjacent pages should be shown on each side?
    $adjacents = 3;
  
    $sql = $query("SELECT COUNT(id) as num FROM $server_db.$table")or die(mysql_error());
	  $total_pages = $assoc($sql);
	  $total_pages = $total_pages['num'];
	
	  $targetpage = "./"; 	//your file name  (the name of this file)
	  $limit = 5; 	//how many items to show per page
	
	  if(isset($_GET['shout']))
	  {
	    $page = $_GET['shout'];
	  }
	  else
	  {
	    $page = 1;
	  }
	  if($page)
	  {
	    $start = ($page - 1) * $limit;
	  } 			//first item to display on this page
	  else
	  {
	    $start = 0;
	  }
	
	  /* Get data. */
	  $result = $query("SELECT id, author, body, date FROM $server_db.$table ORDER BY id DESC LIMIT $start, $limit")or die(mysql_error());
	
	  /* Setup page vars for display. */
	  if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	  $prev = $page - 1;							//previous page is page - 1
	  $next = $page + 1;							//next page is page + 1
	  $lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
    $lpm1 = $lastpage - 1;						//last page minus 1
  
	  while($get = $array($result))
	  {
	    $get = str_replace(array("\r\n", "\r", "\n"), "<br />", $get);
	    $this->view_shouts[] = $get;
    }
    $this->shout_url = '<br/><center>Page: <a href="./?shout='.$prev.'#shoutid"><u>Previous</u></a> - <a href="./?shout='.$next.'#shoutid"><u>Next</u></a></center><br/>';
  }
}
?>