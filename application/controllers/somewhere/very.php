<?php

class Very extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
    
    function different()
    {
        echo '/somewhere/very/different';
    }
}
