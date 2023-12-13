<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landpage extends CI_Controller {

  public function index() {
        $this->load->model('Landpage_model');
        $data['tugas'] = $this->Landpage_model->GetTugas();
    
        // Retrieve user data from the model
        $user_data = $this->Landpage_model->get_user_data();

        $data = array_merge($data, $user_data);
    
        // Pass user data to the view
        $this->load->view('landpage_view', $data);

    }
    function Zat_padat(){
        redirect('Zat_padat');
        }
        function Inti(){
            redirect('Inti');
            }
            function Statistik(){
                redirect('Statistik');
                }
                function PK(){
                    redirect('PK');
                    }
                    function SPAI(){
                        redirect('SPAI');
                        }
                        function Piranti(){
                            redirect('Piranti');
                            }
                            function Biofisika(){
                                redirect('Biofisika');
                                }
                            function Geofisika(){
                                redirect('Geofisika');
                                }
                            function Bintang(){
                                redirect('Bintang');
                                }
                            function Posisi(){
                                redirect('Posisi');
                                }
                            function Superkonduktor(){
                                redirect('Superkonduktor');
                                }
                            function Astrofisika(){
                                redirect('Astrofisika');
                                }
                            function Semikonduktor(){
                                redirect('Semikonduktor');
                                }
                            function Nano(){
                                redirect('Nano');
                                }
        function Profile(){
            redirect('Profile');
            }
            function PengajuanTugas(){
                redirect('PengajuanTugas');
                }
            function Login(){
                redirect('Login');
                }
                function logout(){
                    $this->session->sess_destroy();
                    $url=base_url('');
                    redirect($url);
                }
}