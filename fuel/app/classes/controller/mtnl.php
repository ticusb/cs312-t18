<?php

class Controller_MTNL extends Controller_Template
{

	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		$data = array();
		$this->template->title = 'Home Page';
		$this->template->content = view::forge('MTNL/index', $data);


		$this->template->currLink = "index.php";
		

		
	}

	public function action_about(){
		$this->template->title = 'About';
		$this->template->content = view::forge('MTNL/one');
		$this->template->currLink = "one.php";
		
	}
	public function action_CC(){
		$this->template->title = 'Color Coordinate Sheet';
		$this->template->content = view::forge('MTNL/two');
		$this->template->currLink = "two.php";
	}

}
