<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    public function get_user($username, $password) {
        $password = md5($this->input->post('password'));
        $query = $this->db->get_where('mahasiswa', array('username' => $username, 'password' => $password));


        return $query->row_array();
    }
    public function get_admin($username, $password) {
        $password = md5($this->input->post('password'));
        $query = $this->db->get_where('admin', array('username' => $username, 'password' => $password));


        return $query->row_array();
    }

    public function register_user($data) {
        // Replace 'users' with your actual user table name
        $table="mahasiswa";
		return $this->db->insert($table,$data);
    }
}
