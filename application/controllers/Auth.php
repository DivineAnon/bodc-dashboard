<?php
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_auth', 'auth');
        $this->load->helper('security');
    }

    public function index() {
        $this->load->view('V_login');
    }

    public function do_login() {
        $username = strip_tags(str_replace("'", "", $this->input->post('username')));
        $password = strip_tags(str_replace("'", "", $this->input->post('password')));

        $param = [
            'username' => $username,
            'password' => md5($password)
        ];
        $param = $this->security->xss_clean($param);

        $user = $this->auth->check_credentials($param);

        if ($user != NULL) {
            $this->session->id = $user['id'];
            $this->session->id_role = $user['id_role'];
            $this->session->username = $user['username'];
            $this->session->name = $user['name'];
            $this->session->shift = $user['shift'];

            if ($user['id_role'] == '3') {
                redirect('imputer/daily-report');
                // redirect('imputer');
            }else if ($user['id_role'] == '4') {
                redirect('radio');
            }else if($user['id_role'] == '2'){
                redirect('Validator');
            }else if($user['id_role'] == '5'){
                redirect('Admin');
            }else{

                $this->session->set_flashdata('msg', '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> Invalid credentials role
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
              ');
              
              redirect(base_url());   
            }
        } else {
            $this->session->set_flashdata('msg', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Invalid credentials
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
          ');
          
          redirect(base_url());
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}