<?php
abstract class MySQL
{
	abstract private $_Instance;
	abstract protected function runQuery();
	
	public function getInstance()
	{
		return $this->_Instance;
	}
	
	public function setInstance($instance)
	{
		$this->_Instance = $instance;
		return $this;
	}
	
	public function makeArgumentsSafe($arguments)
	{
		$result = array();
		foreach($arguments as $argument)
		{
			$result[] = mysql_real_escape_string($argument); 
		}
		
		return $result;
	}
	
	public function prepareStatement($sql,$arguments)
	{
		$args = $this->makeArgumentsSafe($arguments);
		$stmn = $this->getInstance()->prepare($sql);
		for($i = 0; $i < count($args);$i++)
		{
			$stmn->bindValue($i+1,$args[$i]);
		}
		return $stmn;
	}
	
	public function runQuery($sql)
	{
		try{
			$this->getInstance()->beginTransaction()
								->exec($sql)
								->commit();
		}
		catch(PDOException $error)
		{
			if($error->getCode() == 1062)
			{
				$this->getInstance()->rollback();
				return FALSE;
			}else{
				return TRUE;
			}
		}
	}
	
	public function fetchResult($result)
	{
		if($result->rowCount() > 1)
		{
			return $result->fetch(PDO::FETCH_OBJ);
		}else {
			return $result->fetchAll(PDO::FETCH_OBJ);			
		}
	}
	
}

class Realm_Database extends MySQL
{
	private $_Instance;
	
	public function __construct($details)
	{
		$dbIdentifier = explode('_',get_class());
		$this->setInstance(new PDO("mysql:host='".$details['host'].";dbname=".$details[$dbIdentifier[0]], $details['username'], $details['password']));
	}
	
	public function __destruct()
	{
		$this->setInstance(NULL);
	}
	
	private function _generatePassword($username,$password)
	{
		return SHA1(mysql_real_escape_string($username).":".mysql_real_escape_string($password));
	}
	
	public function authorize($username,$password)
	{
		$result = $this->getInstance()->prepareStatement("SELECT id FROM `account` WHERE username='?' AND sha_pass_hash='?';",array($username,$password));
		if($result->rowCount() <= 0){
			return FALSE;
		}else if($result->rowCount() == 1)
		{
			return $result->fetch(PDO::FETCH_OBJ)->id;
		}
	}
	
	public function registerAccount($username,$password,$email)
	{
		$registerDetails = $this->makeArgumentsSafe(array($username,$password,$email));
		if($this->runQuery("INSERT INTO `account` (username,sha_pass_hash,email) VALUES ('".$registerDetails[0]."','".$registerDetails[1]."','".$registerDetails[2]."');"))
		{
			return TRUE;
		}
	}
}

class Character_Database extends MySQL
{
	private $_Instance;
	
	public function __construct($details)
	{
		$dbIdentifier = explode('_',get_class());
		$this->setInstance(new PDO("mysql:host='".$details['host'].";dbname=".$details[$dbIdentifier[0]], $details['username'], $details['password']));
	}
	
	public function __destruct()
	{
		$this->setInstance(NULL);
	}
	
	
}
?>