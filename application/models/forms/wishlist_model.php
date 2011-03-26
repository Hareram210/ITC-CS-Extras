<?php

/**
 * model class for working with Wish List app
 */
class WishList_model extends CI_Model
{
    var $item;        // the item wished for
    var $description; // description of the item
    
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
        // SELECT * FROM WishList WHERE id = '$id';
        $query = $this->db->get_where('WishList', array('id' => $id));
        return $query->row();
    }
    
    /**
     * Get all of our wish list items
     * 
     * @return array of wish objects
     */
    function get_wishes() {
        // SELECT * FROM WishList;
        $query = $this->db->get('WishList');
        return $query->result();
    }
    
    /**
     * Add a new wish list item
     */
    function add_wish() {
        $this->item = $this->input->post('wish_item');
        $this->description = $this->input->post('wish_description');

        // INSERT INTO WishList (item, reason) VALUES ('$this->item', '$this->description');
        $this->db->insert('WishList', $this);
    }
    
    /**
     * Edit an existing wish list item
     * 
     * @param integer $id
     */
    function edit_wish($id) {
        $this->item = $this->input->post('wish_item');
        $this->description = $this->input->post('wish_description');

        // UPDATE WishList SET item = '$this->item', description = '$this->description' WHERE id = '$id';
        $this->db->update('WishList', $this, array('id' => $id));
    }
    
    /**
     * Delete an existing wish list item
     * 
     * @param integer $id
     */
    function delete_wish($id) {
        // DELETE FROM WishList WHERE id = '$id';
        $this->db->delete('WishList', array('id' => $id));
    }
}