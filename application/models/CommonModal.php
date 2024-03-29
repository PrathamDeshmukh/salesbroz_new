<?php

class CommonModal extends CI_Model
{
    public function __construct() {
        parent::__construct();
        // Load database
        $this->load->database();
    }
    public function login($username, $phone, $password) {
        // Validate input (you should add more validation)
       

        // Query to check if user exists with given username, phone, and password
        $this->db->where('username', $username);
        $this->db->where('phone', $phone);
        $query = $this->db->get('user');

        // Check if query returned a row
        if($query->num_rows() == 1) {
            $user = $query->row();
            // Verify password
            if($user->password == $password) {
                return $user;
            }
        }
        return false;
    }
}