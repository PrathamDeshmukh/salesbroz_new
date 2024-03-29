<?php

class CommonModal extends CI_Model
{
    public function __construct() {
        parent::__construct();
        // Load database
        $this->load->database();
    }
    public function login($username, $phone, $password) {
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

    public function insertdata($table, $data)
	{
			$query = $this->db->insert($table, $data);
			$insert_id = $this->db->insert_id();
			return  $insert_id;
	}
    public function check_phone_exists($phone) {
        // Check if phone number exists in database
        $this->db->where('phone', $phone);
        $query = $this->db->get('user');

        return ($query->num_rows() > 0) ? true : false;
    }
}