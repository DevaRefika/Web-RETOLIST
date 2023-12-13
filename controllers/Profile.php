<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {

public function index($nim = 2108030)
{
$this->load->model('Profile_model');
$mahasiswa=$this->Profile_model->GetMahasiswa("where nim = '$nim'");
$data=array(
"nim" => $mahasiswa[0]['nim'],
"username" => $mahasiswa[0]['username'],
"password" => $mahasiswa[0]['password'],
);
$this->load->view('profile_view', $data);
}
public function do_update_mahasiswa()
{
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
$nim = $_POST['nim'];
$username = $_POST['username'];
$password = $_POST['password'];
// Hash the password using MD5
$hashed_password = md5($password);

$data_update = array(
    'nim' => $nim,
    'username' => $username,
    'password' => $hashed_password
);
$where = array ('nim'=>$nim);
$table = "mahasiswa";
$result = $this->Profile_model->UpdateData($table,$data_update,$where);
if ($result>=1) {
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
} else {
echo "insert data gagal";
}
}
function Landpage(){
    redirect('Landpage');
    }
}