<?php

class Example extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

    function index()
    {
        echo '/routing/example/';
    }
    
    function one()
    {
        echo '/routing/example/one';
    }
    
    function two()
    {
        echo '/routing/example/two';
    }

    function three()
    {
        echo '/routing/example/three';
    }
}
