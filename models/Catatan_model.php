<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catatan_model extends CI_Model {
    
    public function GetCatatan($where = '') {
        $data = $this->db->query("SELECT pengajuan_catatan.* FROM pengajuan_catatan 
                          LEFT JOIN catatan 
                          ON pengajuan_catatan.id_pengajuancatatan = catatan.id_pengajuancatatan 
                          WHERE catatan.id_pengajuancatatan IS NULL AND pengajuan_catatan.nim = '2108030' $where")->result_array();
        return $data;
    }    
    public function register($isi) {
        // Replace 'pengajuan_catatan' with your actual table name
        $table = "pengajuan_catatan";
    
        // Get the current maximum id_pengajuancatatan
        $this->db->select_max('id_pengajuancatatan');
        $query = $this->db->get($table);
        $result = $query->row_array();
        $max_id = $result['id_pengajuancatatan'];
    
        // Set the id_pengajuancatatan for the new record
        $isi['id_pengajuancatatan'] = $max_id + 1;
        $isi['nim'] = '2108030';
    
        // Insert the data into the database
        return $this->db->insert($table, $isi);
    }
    public function deleteCatatan($id_pengajuancatatan) {
        // Assuming 'pengajuan_catatan' is your table name
        $this->db->where('id_pengajuancatatan', $id_pengajuancatatan);
        $this->db->delete('pengajuan_catatan');

        return $this->db->affected_rows() > 0;
    }
    
}
