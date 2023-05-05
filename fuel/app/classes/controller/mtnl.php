<?php

class MyDB extends SQLite3 {
      function __construct() {
         $this->open('/s/chopin/g/under/levib02/fuel/db/mtnl.db');
      }
}

class Controller_MTNL extends Controller_Template
{

	

	public function before()
	{
		parent::before();
		$this->template = View::forge('mtnl_template');
	}

	public function action_index()
	{
		$data = array();
		$this->template->title = 'Home Page';
		$this->template->content = view::forge('MTNL/index', $data);
		$this->template->css = "mtnl.css";

		$this->template->currLink = "index.php";
		echo Asset::css("mtnl.css");
		
		$response = Response::forge($this->template, 200);
		$response->set_header('Content-Type', 'text/html');
		

		
	}

	public function action_about(){
		$data = array();
		$this->template->title = 'About';
		$this->template->content = view::forge('MTNL/one', $data);
		$this->template->currLink = "one.php";
		$this->template->css = "mtnl.css";
		
	}

	public function action_CC(){

		echo Asset::css("CC.css");
		$data = array();

		$rows_cols = isset($_GET["rows/cols"]) ? $_GET["rows/cols"] : null;
		$color = isset($_GET["color"]) ? $_GET["color"] : null;

		if(!isset($rows_cols) & !isset($color)) {
			$this->template->content = "Parameter \"rows/cols\" and \"color\"  not set\n EX: cc?color=9&rows/cols=10";
		}
		else if(!isset($rows_cols) & isset($color)) {
			$this->template->content = "Parameter \"rows/cols\" not set\r\n EX: cc?color=9&rows/cols=10";
		}
		else if(!isset($color) & isset($rows_cols)) {
			$this->template->content = "Parameter \"color\" not set\r\n EX: cc?color=9&rows/cols=10";
		}
		else{
			// both set
			$valid_rows_cols = true;
			$valid_color = true;

			if($color <= 0 | $color > 10) {
				$valid_color = false;
			}
			if($rows_cols <= 0 | $rows_cols > 26 ) {
				$valid_rows_cols = false;
			}

			if(!$valid_color) {
				$this->template->content = "Invalid input for \"color\" \r\n Should be a value between 1-10 \r\n EX: cc?color=9&rows/cols=10";
			}
			else if(!$valid_rows_cols){
				$this->template->content = "Invalid input for \"rows/cols\"\r\n Should be a value between 1-26 \r\n EX: cc?color=9&rows/cols=10";
			}
			else if(!$valid_color & !$valid_rows_cols) {
				$this->template->content = "Invalid input for \"color\" and Invalid input for \"rows/cols\"\r\n \"color\" should be a value between 1-10 \r\n\"color\" should be a value between 1-26 \r\n EX: cc?color=9&rows/cols=10";

			}
			else if($valid_color & $valid_rows_cols) {
				$this->template->content = view::forge('MTNL/two', $data);
			}

		}

		$this->template->title = 'Color Coordinate Sheet';
		$this->template->currLink = "two.php";
		$this->template->css = "mtnl.css";
		$response = Response::forge($this->template, 200);
		$response->set_header('Content-Type', 'text/html');
		

		return $response;
	}

	public function action_colors(){
		$db = new MyDB();
		if(!$db) {
			echo $db->lastErrorMsg();
		} 

		if (Input::method() == 'POST') {
        // Retrieve data from the request body
			$name = Input::post('name');
			$hex = Input::post('hex');
			$type = Input::post('type');

			if($type ==  'add') {
				$sql = "INSERT INTO colors (nam, hex) VALUES (" . $name . ", " . $hex . ");" ;
				$result = $db->query($sql);

			}

		}
		 else if (Input::method() == 'GET'){
			
			$sql = "SELECT * from colors";

			$result = $db->query($sql);

			$data = array();
			while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
				$data[] = $row;
			}

			$response = Response::forge(json_encode($data), 200);
			$response->set_header('Content-Type', 'application/json');

			return $response;
		}
	}	

}


