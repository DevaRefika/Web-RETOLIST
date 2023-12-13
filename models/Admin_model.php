<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
    public function GetCatatan($where = '') {
        $data = $this->db->query('SELECT pengajuan_catatan.*
        FROM pengajuan_catatan
        LEFT JOIN catatan ON pengajuan_catatan.id_pengajuancatatan = catatan.id_catatan
        WHERE catatan.id_catatan IS NULL
         ' . $where);
        return $data->result_array();
    }
    public function accept($isi) {
        // Replace 'catatan' with your actual table name
        $table = "catatan";
    
         // Get the current maximum id_pengajuancatatan
         $this->db->select_max('id_catatan');
         $query = $this->db->get($table);
         $result = $query->row_array();
         $max_id = $result['id_catatan'];
     
         // Set the id_pengajuancatatan for the new record
         $isi['id_catatan'] = $max_id + 1;
        $isi['status'] = 'accept';
        $isi['id_admin'] = '1';
    
        // Insert the data into the database
        return $this->db->insert($table, $isi);
    }
    
    public function reject($isi) {
        // Replace 'catatan' with your actual table name
        $table = "catatan";
    
        // Get the current maximum id_pengajuancatatan
        $this->db->select_max('id_catatan');
        $query = $this->db->get($table);
        $result = $query->row_array();
        $max_id = $result['id_catatan'];
    
        // Set the id_pengajuancatatan for the new record
        $isi['id_catatan'] = $max_id + 1;
        $isi['status'] = 'reject';
        $isi['id_admin'] = '1';
    
        // Insert the data into the database
        return $this->db->insert($table, $isi);
    }
    
}
