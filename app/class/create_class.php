<?php 


class Create extends Connection
{
	private $query;
	private $obj_insert;

	function __construct()
	{
		parent::__construct();
	}

	public function create($query)
	{
		$this->query = $query;
		$this->obj   = mysqli_query($this->connection, $this->query); 

		if($this->obj){
			return 0;
		}else{
			return mysqli_errno($this->connection);
		}
	}
}

 ?>