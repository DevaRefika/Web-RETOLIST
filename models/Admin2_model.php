<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin2_model extends CI_Model {
    
    public function GetTugas($where = '') {
        $data = $this->db->query('SELECT pengajuan_tugas.*
        FROM pengajuan_tugas
        LEFT JOIN tugas ON pengajuan_tugas.id_pengajuantugas = tugas.id_tugas
        WHERE tugas.id_tugas IS NULL
         ' . $where);
        return $data->result_array();
    }
    public function accept($isi) {
        $table = "tugas";
    
         // Get the current maximum id_pengajuancatatan
         $this->db->select_max('id_tugas');
         $query = $this->db->get($table);
         $result = $query->row_array();
         $max_id = $result['id_tugas'];
     
         // Set the id_pengajuancatatan for the new record
         $isi['id_tugas'] = $max_id + 1;
        $isi['status_tugas'] = 'accept';
        $isi['id_admin'] = '1';
    
        // Insert the data into the database
        return $this->db->insert($table, $isi);
    }
    
    public function reject($isi) {
        // Replace 'catatan' with your actual table name
        $table = "tugas";
    
        // Get the current maximum id_pengajuancatatan
        $this->db->select_max('id_tugas');
        $query = $this->db->get($table);
        $result = $query->row_array();
        $max_id = $result['id_tugas'];
    
        // Set the id_pengajuancatatan for the new record
        $isi['id_tugas'] = $max_id + 1;
        $isi['status_tugas'] = 'reject';
        $isi['id_admin'] = '1';
    
        // Insert the data into the database
        return $this->db->insert($table, $isi);
    }
    
}
