<?php 
class Connection
{
	public $connection;
	public $argument;

	function __construct()
	{
		include("../config/database/database.php");
		$this->connection = $connection;

	}
}

 ?>