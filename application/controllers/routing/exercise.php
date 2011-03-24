<?php

class exercise extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

    function index()
    {
        echo '/routing/exercise/';
    }

    function one()
    {
        echo '/routing/exercise/one';
    }
}
