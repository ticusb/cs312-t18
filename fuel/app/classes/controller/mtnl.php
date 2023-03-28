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
		$this->template->content = view::forge('eastwest/index', $data);


		$this->template->currLink = "index.php";
		$this->template->currDirection = $direction;
		$this->template->oppDirection = $oppDirection;
		$this->template->oppDirection_link = $oppDirection_link;

		$response = Response::forge($this->template, 200);
		$response->set_header('Content-Type', 'text/html');

		return $response;
	}

}
