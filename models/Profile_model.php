<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
    
    public function GetMahasiswa($where = '') {
        $data = $this->db->query('SELECT * FROM mahasiswa ' . $where);
        return $data->result_array();
    }

    public function UpdateData($tableName, $data, $where) {
        // Use a different variable name for the result of the update operation
        $result = $this->db->update($tableName, $data, $where);
        return $result;
    }
}
