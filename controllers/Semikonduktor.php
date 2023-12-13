<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semikonduktor extends CI_Controller {

    public function __construct()
{
parent::__construct();
$this->load->model('Semikonduktor_model');
}
public function index()
{
$data['catatan'] = $this->Semikonduktor_model->GetCatatan();
		$this->load->view('Semikonduktor_view', $data);
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