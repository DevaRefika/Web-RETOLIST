<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PK extends CI_Controller {

    public function __construct()
{
parent::__construct();
$this->load->model('PK_model');
}
public function index()
{
$data['catatan'] = $this->PK_model->GetCatatan();
		$this->load->view('PK_view', $data);
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