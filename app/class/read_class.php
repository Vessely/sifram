<?php 

class Read extends Connection
{
	private $query;
	private $obj;

	function __construct($query)
	{
		parent::__construct();
		$this->query = $query;
		$this->obj  = mysqli_query($this->connection, $this->query); 
	}	

	public function read()
	{
		
		if($this->obj){
			$raw_data = array();
			$count = 0;

			while($row = mysqli_fetch_array($this->obj))
			{
				$raw_data[$count] = $row;
				$count++;
			}
			echo json_encode($raw_data);
		}else{
			return 1;
		}
	}
}

 ?>