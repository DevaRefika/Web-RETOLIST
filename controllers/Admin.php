<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

public function index()
{
$this->load->model('Admin_model');
$data['pengajuan_catatan'] = $this->Admin_model->GetCatatan();
    
        // Pass user data to the view
        $this->load->view('Admin_view', $data);

}
public function acceptCatatan($id_pengajuancatatan) {
    $this->load->model('Admin_model');
    $isi = [
        'id_pengajuancatatan' => $id_pengajuancatatan,
    ];
        $insert=$this->Admin_model->accept($isi);
        if($insert){
            $this->session->set_flashdata('success', 'Registration successful!');
            redirect('Admin');
        }else{
            $this->session->set_flashdata('error', 'Registration failed. Please try again.');
            redirect('Admin');
        }
}
public function rejectCatatan($id_pengajuancatatan) {
    $this->load->model('Admin_model');
    $isi = [
        'id_pengajuancatatan'     => $id_pengajuancatatan,
    ];
        $insert=$this->Admin_model->reject($isi);
        if($insert){
            $this->session->set_flashdata('success', 'Registration successful!');
            redirect('Admin');
        }else{
            $this->session->set_flashdata('error', 'Registration failed. Please try again.');
            redirect('Admin');
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
    function PengajuanTugas(){
        redirect('Admin2');
        }
}