<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landpage_model extends CI_Model {

    public function get_user_data() {
        $this->load->library('session');
        

        $user_data = array(
            'nim' => $this->session->userdata('ses_nim'),
            'username' => $this->session->userdata('ses_username'),
        );

        return $user_data;
    }
    public function GetTugas($where=''){
        $data = $this->db->query("SELECT * FROM tugas 
                          JOIN pengajuan_tugas ON tugas.id_pengajuantugas = pengajuan_tugas.id_pengajuantugas 
                          WHERE tugas.status_tugas = 'accept' " . $where);
        return $data->result_array();
        } 
    }