<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {

    public function __construct()
{
parent::__construct();
$this->load->model('Statistik_model');
}
public function index()
{
$data['catatan'] = $this->Statistik_model->GetCatatan();
		$this->load->view('statistik_view', $data);
}

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
    function PengajuanCatatan(){
        redirect('PengajuanCatatan');
        }
    function Landpage(){
        redirect('Landpage');
        }
}