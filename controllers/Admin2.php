<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin2 extends CI_Controller {

public function index()
{
$this->load->model('Admin2_model');
$data['pengajuan_tugas'] = $this->Admin2_model->GetTugas();
    
        // Pass user data to the view
        $this->load->view('Admin2_view', $data);

}
public function acceptTugas($id_pengajuantugas) {
    $this->load->model('Admin2_model');
    $isi = [
        'id_pengajuantugas' => $id_pengajuantugas,
    ];
        $insert=$this->Admin2_model->accept($isi);
        if($insert){
            $this->session->set_flashdata('success', 'Registration successful!');
            redirect('Admin2');
        }else{
            $this->session->set_flashdata('error', 'Registration failed. Please try again.');
            redirect('Admin2');
        }
}
public function rejectTugas($id_pengajuantugas) {
    $this->load->model('Admin2_model');
    $isi = [
        'id_pengajuantugas' => $id_pengajuantugas,
    ];
        $insert=$this->Admin2_model->reject($isi);
        if($insert){
            $this->session->set_flashdata('success', 'Registration successful!');
            redirect('Admin2');
        }else{
            $this->session->set_flashdata('error', 'Registration failed. Please try again.');
            redirect('Admin2');
        }
}
function Landpage(){
    redirect('Landpage');
    }
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
    function Mahasiswa(){
        redirect('Admin3');
        }
    function PengajuanCatatan(){
        redirect('Admin');
        }
}