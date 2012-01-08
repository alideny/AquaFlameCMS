<?php
include("functions/userplate.inc.php");
class Ajax
{
	private $request;
	
	public function __construct($requestArray)
	{
		$this->request = $requestArray;
	}
	
	public function listArray()
	{
		print_r($this->request);
	}
}
$Ajax = new Ajax($_POST);
$Ajax->listArray();
?>