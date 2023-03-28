<?php

class Controller_MTNL extends Controller_Template
{

	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		$direction = isset($_GET["direction"]) ? $_GET["direction"] : '';

		$data = array();
		$this->template->title = 'Home Page';
		$this->template->content = view::forge('eastwest/index', $data);

		if ($direction == "east") {
			echo Asset::css("east.css");
			$oppDirection = "west";
			$oppDirection_link = "West";
		} 
		else {
			$direction = "west";
			echo Asset::css("west.css");
			$oppDirection = "east";
			$oppDirection_link = "East";
		}


		$this->template->currLink = "index.php";
		$this->template->currDirection = $direction;
		$this->template->oppDirection = $oppDirection;
		$this->template->oppDirection_link = $oppDirection_link;

		$response = Response::forge($this->template, 200);
		$response->set_header('Content-Type', 'text/html');

		return $response;
	}

	public function action_one()
	{
		$direction = isset($_GET["direction"]) ? $_GET["direction"] : '';

		$data = array();
		$this->template->title = 'Home Page';
		$this->template->content = view::forge('eastwest/one', $data);

		if ($direction == "east") {
			echo Asset::css("east.css");
			$oppDirection = "west";
			$oppDirection_link = "West";
		} 
		else {
			$direction = "west";
			echo Asset::css("west.css");
			$oppDirection = "east";
			$oppDirection_link = "East";
		}

		$this->template->currLink = "one.php";
		$this->template->currDirection = $direction;
		$this->template->oppDirection = $oppDirection;
		$this->template->oppDirection_link = $oppDirection_link;

		$response = Response::forge($this->template, 200);
		$response->set_header('Content-Type', 'text/html');

		return $response;
	}

	public function action_two()
	{
		$direction = isset($_GET["direction"]) ? $_GET["direction"] : '';

		$data = array();
		$this->template->title = 'Home Page';
		$this->template->content = view::forge('eastwest/two', $data);

		if ($direction == "east") {
			echo Asset::css("east.css");
			$oppDirection = "west";
			$oppDirection_link = "West";
		} 
		else {
			$direction = "west";
			echo Asset::css("west.css");
			$oppDirection = "east";
			$oppDirection_link = "East";
		}

		$this->template->currLink = "two.php";
		$this->template->currDirection = $direction;
		$this->template->oppDirection = $oppDirection;
		$this->template->oppDirection_link = $oppDirection_link;

		$response = Response::forge($this->template, 200);
		$response->set_header('Content-Type', 'text/html');

		return $response;
	}
}
