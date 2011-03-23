<?php

/**
 * model class for working with Wish List app
 */
class WishList_model extends CI_Model
{
    // TODO: add databse columns as properties
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    /**
     * Get a single wish list item by id
     * 
     * @param integer $id
     * @return wish object
     */
    function get_wish($id) {
        // TODO: add code here
    }
    
    /**
     * Get all of our wish list items
     * 
     * @return array of wish objects
     */
    function get_wishes() {
        // TODO: add code here
    }
    
    /**
     * Add a new wish list item
     */
    function add_wish() {
        // TODO: add code here
    }
    
    /**
     * Edit an existing wish list item
     * 
     * @param integer $id
     */
    function edit_wish($id) {
        // TODO: add code here
    }
    
    /**
     * Delete an existing wish list item
     * 
     * @param integer $id
     */
    function delete_wish($id) {
        // TODO: add code here
    }
}