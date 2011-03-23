<?php

class Favorites extends CI_Controller
{
	function __construct() {
		parent::__construct();
	}

	/**
     * List our favorites
     * 
     * URL = /forms/favorites
     */
    function index() {
        $this->load->model('forms/Favorite_model', 'favorites');
        $data['favorites'] = $this->favorites->get_favorites();
        
        $data['title'] = 'My Favorites';
        
        $this->template->load('template', 'forms/favorites_list', $data);
	}    

	/**
     * Edit a favorites
     * 
     * URL = /forms/favorites/edit
     */
    function edit() {
        $this->load->helper('form');
        $this->load->model('forms/Favorite_model', 'favorites');
        
        // check if the form has been posted
        if ($this->input->post('favorite_submit')) {
            $favorite_id = $this->input->post('favorite_id');
            $this->favorites->edit_favorite($favorite_id);
            header('Location: /forms/favorites');
            exit;
        }
        
        $favorite_id = $this->uri->segment(4, 0);
        $data['favorite'] = $this->favorites->get_favorite($favorite_id);
        if (count($data['favorite']) == 0) {
            header('Location: /forms/favorites');
            exit;
        }
        
        $data['title'] = 'Edit Favorite';
        
        $this->template->load('template', 'forms/favorites_edit', $data);
    }    

	/**
     * Add a new favorite
     * 
     * URL = /forms/favorites/add
     */
    function add() {
        $this->load->helper('form');
        $this->load->model('forms/Favorite_model', 'favorites');
        
        // check if the form has been posted
        if ($this->input->post('favorite_submit')) {
            $this->favorites->add_favorite();
            header('Location: /forms/favorites');
            exit;
        }
        
        $data['title'] = 'Add Favorite';
        
        $this->template->load('template', 'forms/favorites_add', $data);
    }

	/**
     * Delete a favorite
     * 
     * URL = /forms/favorites/delete
     */
    function delete() {
        $this->load->helper('form');
        $this->load->model('forms/Favorite_model', 'favorites');
        
        // check if the form has been posted
        if ($this->input->post('favorite_submit')) {
            $favorite_id = $this->input->post('favorite_id');
            $this->favorites->delete_favorite($favorite_id);
            header('Location: /forms/favorites');
            exit;
        }
        
        $favorite_id = $this->uri->segment(4, 0);
        $data['favorite'] = $this->favorites->get_favorite($favorite_id);
        if (count($data['favorite']) == 0) {
            header('Location: /forms/favorites');
            exit;
        }
        
        $data['title'] = 'Delete Favorite';
        
        $this->template->load('template', 'forms/favorites_delete', $data);
    }
}
