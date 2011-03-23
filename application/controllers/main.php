<?php

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
        $data['title'] = 'Home';
        
        $this->template->load('template', 'main_page', $data);
	}
}
