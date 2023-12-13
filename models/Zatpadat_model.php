<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zatpadat_model extends CI_Model {

    public function GetCatatan($where='') {
        $data = $this->db->query("SELECT * FROM catatan 
            JOIN pengajuan_catatan ON catatan.id_pengajuancatatan = pengajuan_catatan.id_pengajuancatatan
            WHERE pengajuan_catatan.mata_kuliah = 'Zat Padat' AND catatan.status = 'accept'
            " . $where);


        return $data->result_array();
    }
}
