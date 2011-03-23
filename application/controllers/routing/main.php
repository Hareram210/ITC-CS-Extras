<?php

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
        $data['title'] = 'Routing';
        $data['examples_done'] = array(
            '/routing/example/one',
            '/routing/example/two',
            '/routing/sample/route',
            '/routing/sample',
            '/somewhere/very/different'
        );
        $data['examples_todo'] = array(
            '/routing/example',
            '/routing/sample/another',
            '/somewhere/else/entirely'
        );
        
        $this->template->load('template', 'routing/main_page', $data);
	}
}
