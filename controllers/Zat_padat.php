<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zat_padat extends CI_Controller {

    public function __construct()
{
parent::__construct();
$this->load->model('Zatpadat_model');
}
public function index()
{
$data['catatan'] = $this->Zatpadat_model->GetCatatan();
		$this->load->view('zatpadat_view', $data);
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