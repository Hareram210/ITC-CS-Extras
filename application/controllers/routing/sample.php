<?php

class Sample extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
        echo '/routing/sample/';
	}
    
    function route()
    {
        echo '/routing/sample/route';
    }
}
