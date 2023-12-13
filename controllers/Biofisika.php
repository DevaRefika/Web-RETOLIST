<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biofisika extends CI_Controller {

    public function __construct()
{
parent::__construct();
$this->load->model('Biofisika_model');
}
public function index()
{
$data['catatan'] = $this->Biofisika_model->GetCatatan();
		$this->load->view('Biofisika_view', $data);
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