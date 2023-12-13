<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PengajuanTugas extends CI_Controller {

public function index()
{
$this->load->model('Tugas_model');
$data['pengajuan_tugas'] = $this->Tugas_model->GetTugas();
    
        // Pass user data to the view
        $this->load->view('Tugas_view', $data);

}
public function register() {
    $this->load->model('Tugas_model');

    // Retrieve other form data
    $judul_tugas = $this->input->post('judul_tugas', true);
    $deskripsi_tugas = $this->input->post('deskripsi_tugas', true);
    $deadline = $this->input->post('deadline', true);
    $mata_kuliah = $this->input->post('mata_kuliah', true);

    // File upload configuration
    $config['allowed_types'] = 'pdf|doc|docx'; // Allow only PDF and Word files
    $config['max_size']      = '2048';
    $config['upload_path']   = './assets/pdf/';
    $this->load->library('upload', $config);

    // Check if the file is uploaded
    if ($this->upload->do_upload('file_tugas')) {
        // File uploaded successfully
        $file_data = $this->upload->data();
        $file_tugas = $file_data['file_name']; // Use the uploaded file name
    } else {
        // File upload failed
        $file_tugas = ''; // Set default value or handle the error as needed
    }

    // Prepare data for insertion
    $isi = [
        'judul_tugas'     => $judul_tugas,
        'deskripsi_tugas' => $deskripsi_tugas,
        'file_tugas'      => $file_tugas, // Use the uploaded file name
        'deadline'   => $deadline,
        'mata_kuliah'   => $mata_kuliah,
    ];

    // Insert data into the database
    $insert = $this->Tugas_model->register($isi);

    // Check the result of the insertion
    if ($insert) {
        $this->session->set_flashdata('success', 'Successful!');
        redirect('PengajuanTugas');
    } else {
        $this->session->set_flashdata('error', 'Failed. Please try again.');
        redirect('PengajuanTugas');
    }
}
public function hapus($id_pengajuantugas) {
    $this->load->model('Tugas_model');
    $result = $this->Tugas_model->deleteTugas($id_pengajuantugas);
    redirect('PengajuanTugas');
}
function Landpage(){
    redirect('Landpage');
    }
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
}