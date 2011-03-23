<?php

class Example extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
    
    function one()
    {
        echo '/routing/example/one';
    }
    
    function two()
    {
        echo '/routing/example/two';
    }
}
