<?php

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
        $data['title'] = 'Forms';
        
        $this->template->load('template', 'forms/main_page', $data);
	}
}
