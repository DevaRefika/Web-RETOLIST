<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas_model extends CI_Model {
    
    public function GetTugas($where = '') {
        $data = $this->db->query("SELECT pengajuan_tugas.* FROM pengajuan_tugas 
                          LEFT JOIN tugas 
                          ON pengajuan_tugas.id_pengajuantugas = tugas.id_pengajuantugas 
                          WHERE tugas.id_pengajuantugas IS NULL AND pengajuan_tugas.nim = '2108030' $where")->result_array();
return $data;

    }    
    public function register($isi) {
        // Replace 'pengajuan_catatan' with your actual table name
        $table = "pengajuan_tugas";
        
            // Get the current maximum id_pengajuancatatan
            $this->db->select_max('id_pengajuantugas');
            $query = $this->db->get($table);
            $result = $query->row_array();
            $max_id = $result['id_pengajuantugas'];
        
            // Set the id_pengajuancatatan for the new record
            $isi['id_pengajuantugas'] = $max_id + 1;
            $isi['nim'] = '2108030';
        
            // Insert the data into the database
            return $this->db->insert($table, $isi);
    }
    public function deleteTugas($id_pengajuantugas) {
        // Assuming 'pengajuan_catatan' is your table name
        $this->db->where('id_pengajuantugas', $id_pengajuantugas);
        $this->db->delete('pengajuan_tugas');

        return $this->db->affected_rows() > 0;
    }
    
}
