<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin3 extends CI_Controller {

public function index()
{
$this->load->model('Admin3_model');
$data['mahasiswa'] = $this->Admin3_model->GetMahasiswa();
    
        // Pass user data to the view
        $this->load->view('Admin3_view', $data);

}
public function delete($nim) {
    $this->load->model('Admin3_model');
    $result = $this->Admin3_model->deleteMahasiswa($nim);
    redirect('Admin3');
}
function Landpage(){
    redirect('Landpage');
    }
    function Profile(){
        redirect('Profile');
        }
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
    function PengajuanTugas(){
        redirect('Admin2');
        }
    function PengajuanCatatan(){
        redirect('Admin');
        }
}