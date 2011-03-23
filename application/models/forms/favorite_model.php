<?php

/**
 * model class for working with Favorites app
 */
class Favorite_model extends CI_Model
{
    var $name;   // the name of our favorite
    var $reason; // the reason why it's a favorite
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    /**
     * Get a single favorite by id
     * 
     * @param integer $id
     * @return favorite object
     */
    function get_favorite($id) {
        // SELECT * FROM Favorite WHERE id = '$id';
        $query = $this->db->get_where('Favorite', array('id' => $id));
        return $query->row();
    }
    
    /**
     * Get all of our favorites
     * 
     * @return array of favorite objects
     */
    function get_favorites() {
        // SELECT * FROM Favorite;
        $query = $this->db->get('Favorite');
        return $query->result();
    }
    
    /**
     * Add a new favorite
     */
    function add_favorite() {
        $this->name = $this->input->post('favorite_name');
        $this->reason = $this->input->post('favorite_reason');

        // INSERT INTO Favorite (name, reason) VALUES ('$this->name', '$this->reason');
        $this->db->insert('Favorite', $this);
    }
    
    /**
     * Edit an existing favorite
     * 
     * @param integer $id
     */
    function edit_favorite($id) {
        $this->name = $this->input->post('favorite_name');
        $this->reason = $this->input->post('favorite_reason');

        // UPDATE Favorite SET name = '$this->name', reason = '$this->reason' WHERE id = '$id';
        $this->db->update('Favorite', $this, array('id' => $id));
    }
    
    /**
     * Delete an existing favorite
     * 
     * @param integer $id
     */
    function delete_favorite($id) {
        // DELETE FROM Favorite WHERE id = '$id';
        $this->db->delete('Favorite', array('id' => $id));
    }
}