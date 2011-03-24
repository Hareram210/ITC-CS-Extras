<?php

class Lab extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
        $data['title'] = 'Routing Lab';
        $data['exercises'] = array(
            '/routing/example/three',
            '/routing/exercise/one',
            '/random/lab/route',
            '/routing/exercise/',
            '/routing/lab/tricky'
        );
        
        $this->template->load('template', 'routing/lab_page', $data);
	}

    function tricky()
    {
        echo '/routing/lab/tricky';
    }
}
