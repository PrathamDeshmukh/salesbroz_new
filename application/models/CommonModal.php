<?php

class CommonModal extends CI_Model
{
    public function __construct() {
        parent::__construct();
        // Load database
        $this->load->database();
    }

    public function getRowById($table, $column, $id)
	{
		$get = $this->db->select()
			->from($table)
			->where($column, $id)
			->get();
		if ($get->num_rows() > 0) {
			return $get->result_array();
		} else {
			return false;
		}
	}
}