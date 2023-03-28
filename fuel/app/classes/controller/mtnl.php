<?php

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


		$this->template->currLink = "index.php";
		
		$response = Response::forge($this->template, 200);
		$response->set_header('Content-Type', 'text/html');

		
<<<<<<< HEAD
	}

	public function action_about(){
		$this->template->title = 'About';
		$this->template->content = view::forge('MTNL/one');
		$this->template->currLink = "one.php";
		
=======
		return $response;
	}

	public function action_about(){
		$this->template->title = 'About';
		$this->template->content = view::forge('MTNL/one');
		$this->template->currLink = "one.php";
		$response = Response::forge($this->template, 200);
		$response->set_header('Content-Type', 'text/html');

		return $response;
>>>>>>> 0d812871ab1fb1cb916469e5378a92649c23574a
	}

	public function action_CC(){
		$this->template->title = 'Color Coordinate Sheet';
		$this->template->content = view::forge('MTNL/two');
		$this->template->currLink = "two.php";
		$response = Response::forge($this->template, 200);
		$response->set_header('Content-Type', 'text/html');

		return $response;
	}

}
