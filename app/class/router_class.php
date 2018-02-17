<?php 

/*

*Esta clase funciona como router de la página web.

*/

class Router
{
	private $url;

	function __construct()
	{
		$this->url = $_SERVER['REQUEST_URI'];
	}

	//Métodos publicos.
	public function full_url()
	{
		return $this->url;
	}
	public function view_parameter()
	{
		$data = explode("/", $this->url);

		return $data[2];
	}
	public function full_data()
	{
		$data = explode("/", $this->url);
		return $data[2];
	}
}

class Render
{
	public $view;
	private $available_views;

	function __construct($view)
	{
		
		include("config/views_config.php");
		$this->available_views = available_views;
		$this->view = $view;

		if($this->view == "")
		{
			$this->view = "inicio";
		}
	}

	public function render_now()
	{
		include("config/site/site.php");
		include("config/messages/messages_".lang.".php");

		if( self::check_view() == 0 )
		{	
			if( self::check_view_file("layout/".$this->view."_view.php") == 0 ) 
			{ 
				include("layout/".$this->view."_view.php"); 
			}
			else
			{
				echo missing_view_file;
			}

		}
		else
		{
			include("layout/errors/404.php");	
		}

	}
	private function check_view()
	{
		if(in_array($this->view, $this->available_views))
		{
			return 0;
		}
		else
		{
			return 1;
		}
	}
	private function check_view_file($arg)
	{
		if(file_exists($arg))
		{
			return 0;
		}
		else
		{
			return 1;
		}
	}

	public function return_view()
	{
		return $this->view;
	}
}
?>
