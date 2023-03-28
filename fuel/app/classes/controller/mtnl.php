<?php

class Controller_MTNL extends Controller_Template
{
	public $css = "mtnl.css";
	

	public function before()
	{
		parent::before();
		$this->template = View::forge('mtnl_template');
	}

	public function action_index()
	{

		echo Asset::css("mtnl.css");

		$data = array();
		$this->template->title = 'Home Page';
		$this->template->content = view::forge('MTNL/index', $data);
		$this->template->css = "mtnl.css";

		$this->template->currLink = "index.php";
		
		$response = Response::forge($this->template, 200);
		$response->set_header('Content-Type', 'text/html');
		

		
	}

	public function action_about(){
		$this->template->title = 'About';
		$this->template->content = view::forge('MTNL/one');
		$this->template->currLink = "one.php";
		$this->template->css = "mtnl.css";
		
	}

	public function action_CC(){
		$data = array();
		$rows_cols = isset($_GET["rows/columns"]) ? $_GET["rows/columns"] : '';
		$color = isset($_GET["color"]) ? $_GET["color"] : '';

		$this->template->rows_cols = $rows_cols;
		$this->template->color = $color;
		
		$this->template->title = 'Color Coordinate Sheet';
		$this->template->content = view::forge('MTNL/two', $data);
		$this->template->currLink = "two.php";
		$this->template->css = "mtnl.css";
		$response = Response::forge($this->template, 200);
		$response->set_header('Content-Type', 'text/html');
		

		return $response;
	}
}
