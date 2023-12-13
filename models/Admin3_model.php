<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin3_model extends CI_Model {
    
    public function GetMahasiswa($where = '') {
        $data = $this->db->query('SELECT * FROM Mahasiswa' . $where);
        return $data->result_array();
    }
    public function deleteMahasiswa($nim) {
        // Assuming 'pengajuan_catatan' is your table name
        $this->db->where('mahasiswa', $mahasiswa);
        $this->db->delete('mahasiswa');

        return $this->db->affected_rows() > 0;
    }
}
