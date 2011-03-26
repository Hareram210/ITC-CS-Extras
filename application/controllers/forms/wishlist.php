<?php

class WishList extends CI_Controller
{
	function __construct() {
		parent::__construct();
	}

	/**
     * Show our wish list items
     * 
     * URL = /forms/wishlist
     */
    function index() {
        $this->load->model('forms/WishList_model', 'wishlist');
        $data['wishes'] = $this->wishlist->get_wishes();
        
        $data['title'] = 'My Wish List';
        
        $this->template->load('template', 'forms/wishlist_show', $data);
	}    

	/**
     * Edit a wish list item
     * 
     * URL = /forms/wishlist/edit
     */
    function edit() {
        $this->load->helper('form');
        $this->load->model('forms/WishList_model', 'wishlist');
        
        // check if the form has been posted
        if ($this->input->post('wish_submit')) {
            $wish_id = $this->input->post('wish_id');
            $this->wishlist->edit_wish($wish_id);
            header('Location: /forms/wishlist');
            exit;
        }
        
        $wish_id = $this->uri->segment(4, 0);
        $data['wish'] = $this->wishlist->get_wish($wish_id);
        if (count($data['wish']) == 0) {
            header('Location: /forms/wishlist');
            exit;
        }
        
        $data['title'] = 'Edit Wish List Item';
        
        $this->template->load('template', 'forms/wishlist_edit', $data);
    }    

	/**
     * Add a new wish list item
     * 
     * URL = /forms/wishlist/add
     */
    function add() {
        $this->load->helper('form');
        $this->load->model('forms/WishList_model', 'wishlist');
        
        // check if the form has been posted
        if ($this->input->post('wish_submit')) {
            $this->wishlist->add_wish();
            header('Location: /forms/wishlist');
            exit;
        }
        
        $data['title'] = 'Add Wish List Item';
        
        $this->template->load('template', 'forms/wishlist_add', $data);
    }

	/**
     * Delete a wish list item
     * 
     * URL = /forms/wishlist/delete
     */
    function delete() {
        $this->load->helper('form');
        $this->load->model('forms/WishList_model', 'wishlist');
        
        // check if the form has been posted
        if ($this->input->post('wish_submit')) {
            $wish_id = $this->input->post('wish_id');
            $this->wishlist->delete_wish($wish_id);
            header('Location: /forms/wishlist');
            exit;
        }
        
        $wish_id = $this->uri->segment(4, 0);
        $data['wish'] = $this->wishlist->get_wish($wish_id);
        if (count($data['wish']) == 0) {
            header('Location: /forms/wishlist');
            exit;
        }
        
        $data['title'] = 'Delete Wish List Item';
        
        $this->template->load('template', 'forms/wishlist_delete', $data);
    }
}
