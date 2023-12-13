<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PengajuanCatatan extends CI_Controller {

public function index()
{
$this->load->model('Catatan_model');
$data['pengajuan_catatan'] = $this->Catatan_model->GetCatatan();
    
        // Pass user data to the view
        $this->load->view('Catatan_view', $data);

}
public function register() {
    $this->load->model('Catatan_model');

    // Retrieve other form data
    $judul = $this->input->post('judul', true);
    $deskripsi = $this->input->post('deskripsi', true);
    $tanggal = $this->input->post('tanggal', true);
    $mata_kuliah = $this->input->post('mata_kuliah', true);

    // File upload configuration
    $config['allowed_types'] = 'pdf|doc|docx'; // Allow only PDF and Word files
    $config['max_size']      = '2048';
    $config['upload_path']   = './assets/pdf/';
    $this->load->library('upload', $config);

    // Check if the file is uploaded
    if ($this->upload->do_upload('file')) {
        // File uploaded successfully
        $file_data = $this->upload->data();
        $file = $file_data['file_name']; // Use the uploaded file name
    } else {
        // File upload failed
        $file = ''; // Set default value or handle the error as needed
    }

    // Prepare data for insertion
    $isi = [
        'judul'     => $judul,
        'deskripsi' => $deskripsi,
        'file'      => $file,
        'mata_kuliah' => $mata_kuliah,
        'tanggal'   => $tanggal,
    ];

    // Insert data into the database
    $insert = $this->Catatan_model->register($isi);

    // Check the result of the insertion
    if ($insert) {
        $this->session->set_flashdata('success', 'Successful!');
        redirect('PengajuanCatatan');
    } else {
        $this->session->set_flashdata('error', 'Failed. Please try again.');
        redirect('PengajuanCatatan');
    }
}
public function hapus($id_pengajuancatatan) {
    $this->load->model('Catatan_model');
    $result = $this->Catatan_model->deleteCatatan($id_pengajuancatatan);
    redirect('PengajuanCatatan');
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