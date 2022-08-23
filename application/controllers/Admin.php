<?php
class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->username == '' && $this->session->id_role != '1'){
            redirect(base_url());
        }
        $this->load->model('M_admin', 'admin');
        $this->load->helper('security');
    }

    public function index() {
        $this->load->view('Admin/V_dashboard');
    }

    public function add_data_unit() {
        $data['unit'] = $this->admin->get_unit();
        $data['operator'] = $this->admin->get_operator();
        $data['proses'] = $this->admin->get_proses();
        $data['aktivitas'] = $this->admin->get_aktivitas();
        $data['material'] = $this->admin->get_material();
        $data['standby'] = $this->admin->get_standby();
        $data['unit_type'] = $this->admin->get_unit_type();
        $data['unit_field2'] = $this->admin->get_unit_field();
        $data['dt_ton'] = $this->admin->get_dt_ton();
        $data['block'] = $this->admin->get_block();
        $data['loading_point'] = $this->admin->get_loading_point(); 
        // echo '<pre>';function
        // print_r($data['unit_status']);
        // echo "</pre>";die();
        $this->load->view('Admin/V_add_unit', $data);
    }

    public function create_unit(){
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
        $egi = strip_tags(str_replace("'", "", $this->input->post('egi')));
        $unit_type = strip_tags(str_replace("'", "", $this->input->post('unit_type')));
        $type = strip_tags(str_replace("'", "", $this->input->post('type')));
        $brand = strip_tags(str_replace("'", "", $this->input->post('brand')));
        $owner = strip_tags(str_replace("'", "", $this->input->post('owner')));

        $response = array(); 

        $check = $this->admin->check_no_unit($no_unit);
      
        if (count($check) > 0) {
            $response = array(
                'response' => "no unit same",
            );
        }else{
            $data = [
                'no_unit' => $no_unit,
                'egi' => $egi,
                'unit_type' => $unit_type,
                'type' => $type,
                'brand' => $brand,
                'owner' => $owner
            ];
            $create = $this->admin->create_unit($data);

            if($create){
                echo $this->session->set_flashdata('flash', 'inserted');
                $response = array(
                    'response' => "success",
                );
            }else{
                $response = array(
                    'response' => "failed",
                );
            }
        }
        echo json_encode($response); 
    }

    public function get_unit_detail($id){
        $unit = $this->admin->get_unit_detail($id);

        echo json_encode($unit);
    }

    public function get_type_unit_detail(){
        $unit_type = $this->admin->get_type_unit_detail();
        echo json_encode($unit_type);
    }

    public function edit_unit(){
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
        $egi = strip_tags(str_replace("'", "", $this->input->post('egi')));
        $unit_type = strip_tags(str_replace("'", "", $this->input->post('unit_type')));
        $type = strip_tags(str_replace("'", "", $this->input->post('type')));
        $brand = strip_tags(str_replace("'", "", $this->input->post('brand')));
        $owner = strip_tags(str_replace("'", "", $this->input->post('owner')));

        $response = array(); 

        $check = $this->admin->check_no_unit_edit($no_unit, $id);
      
        if (count($check) > 0) {
            $response = array(
                'response' => "no unit same",
            );
        }else{
            $data = [
                'no_unit' => $no_unit,
                'egi' => $egi,
                'unit_type' => $unit_type,
                'type' => $type,
                'brand' => $brand,
                'owner' => $owner,
                'id' => $id
            ];
            $update = $this->admin->update_unit($data);

            if($update){
                echo $this->session->set_flashdata('flash', 'inserted');
                $response = array(
                    'response' => "success",
                );
            }else{
                $response = array(
                    'response' => "failed",
                );
            }
        }
        echo json_encode($response);
    }

    public function delete_unit($id){
        $delete = $this->admin->delete_unit($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin/add_data_unit');
    }

    public function create_operator(){
        $nrp = strip_tags(str_replace("'", "", $this->input->post('nrp')));
        $first_name = strip_tags(str_replace("'", "", $this->input->post('first_name')));
        $last_name = strip_tags(str_replace("'", "", $this->input->post('last_name')));
        $tempat_lahir = strip_tags(str_replace("'", "", $this->input->post('tempat_lahir')));
        $tgl_lahir = strip_tags(str_replace("'", "", $this->input->post('tgl_lahir')));
        $unit_field = strip_tags(str_replace("'", "", $this->input->post('unit_field')));

        $response = array(); 

        $check = $this->admin->check_operator_nrp($nrp);
      
        if (count($check) > 0) {
            $response = array(
                'response' => "nrp same",
            );
        }else{
            $data = [
                'nrp' => $nrp,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => date('Y-m-d', strtotime($tgl_lahir)),
                'unit_field' => $unit_field
            ];
            $create = $this->admin->create_operator($data);

            if($create){
                echo $this->session->set_flashdata('flash', 'inserted');
                $response = array(
                    'response' => "success",
                );
            }else{
                $response = array(
                    'response' => "failed",
                );
            }
        }
        echo json_encode($response); 
    }

    public function get_operator_detail($id){
        $operator = $this->admin->get_operator_detail($id);

        echo json_encode($operator);
    }

    public function get_unit_field_detail(){
        $unit_field = $this->admin->get_unit_field_detail();
        echo json_encode($unit_field);
    }

    public function edit_operator(){
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $nrp = strip_tags(str_replace("'", "", $this->input->post('nrp')));
        $first_name = strip_tags(str_replace("'", "", $this->input->post('first_name')));
        $last_name = strip_tags(str_replace("'", "", $this->input->post('last_name')));
        $tempat_lahir = strip_tags(str_replace("'", "", $this->input->post('tempat_lahir')));
        $tgl_lahir = strip_tags(str_replace("'", "", $this->input->post('tgl_lahir')));
        $unit_field = strip_tags(str_replace("'", "", $this->input->post('unit_field')));

        $response = array(); 

        $check = $this->admin->check_operator_nrp_edit($nrp, $id);
      
        if (count($check) > 0) {
            $response = array(
                'response' => "nrp same",
            );
        }else{
            $data = [
                'nrp' => $nrp,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => date('Y-m-d', strtotime($tgl_lahir)),
                'unit_field' => $unit_field,
                'id' => $id
            ];
            $update = $this->admin->update_operator($data);

            if($update){
                echo $this->session->set_flashdata('flash', 'inserted');
                $response = array(
                    'response' => "success",
                );
            }else{
                $response = array(
                    'response' => "failed",
                );
            }
        }
        echo json_encode($response); 
    }

    public function delete_operator($id){
        $delete = $this->admin->delete_operator($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin/add_data_unit');
    }

    public function create_kode_proses(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $response = array();
        $create = $this->admin->create_kode_proses($kode);
        if($create){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function get_kode_proses_detail($id){
        $kode_proses = $this->admin->get_kode_proses_detail($id);

        echo json_encode($kode_proses);
    }

    public function edit_kode_proses(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $response = array();
        $update = $this->admin->update_kode_proses($kode, $id);
        if($update){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function delete_kode_proses($id){
        $delete = $this->admin->delete_kode_proses($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin/add_data_unit');
    }

    public function create_kode_aktivitas(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $response = array();
        $create = $this->admin->create_kode_aktivitas($kode);
        if($create){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function get_kode_aktivitas_detail($id){
        $kode_aktivitas = $this->admin->get_kode_aktivitas_detail($id);

        echo json_encode($kode_aktivitas);
    }

    public function edit_kode_aktivitas(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $response = array();
        $update = $this->admin->update_kode_aktivitas($kode, $id);
        if($update){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function delete_kode_aktivitas($id){
        $delete = $this->admin->delete_kode_aktivitas($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin/add_data_unit');
    }

    public function create_kode_material(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $qty = strip_tags(str_replace("'", "", $this->input->post('qty')));
        $response = array();
        $create = $this->admin->create_kode_material($kode, $qty);
        if($create){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function get_kode_material_detail($id){
        $kode_material = $this->admin->get_kode_material_detail($id);

        echo json_encode($kode_material);
    }

    public function edit_kode_material(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $qty = strip_tags(str_replace("'", "", $this->input->post('qty')));
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $response = array();
        $update = $this->admin->update_kode_material($kode,$qty,$id);
        if($update){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function delete_kode_material($id){
        $delete = $this->admin->delete_kode_material($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin/add_data_unit');
    }

    public function create_kode_stanby(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $response = array();
        $create = $this->admin->create_kode_stanby($kode);
        if($create){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function get_kode_stanby_detail($id){
        $kode_stanby = $this->admin->get_kode_stanby_detail($id);

        echo json_encode($kode_stanby);
    }

    public function edit_kode_stanby(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $response = array();
        $update = $this->admin->update_kode_stanby($kode, $id);
        if($update){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function delete_kode_stanby($id){
        $delete = $this->admin->delete_kode_stanby($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin/add_data_unit');
    }

    public function create_kode_dt_ton(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $response = array();
        $create = $this->admin->create_kode_dt_ton($kode);
        if($create){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function get_kode_dt_ton_detail($id){
        $kode_dt_ton = $this->admin->get_kode_dt_ton_detail($id);

        echo json_encode($kode_dt_ton);
    }

    public function edit_kode_dt_ton(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $response = array();
        $update = $this->admin->update_kode_dt_ton($kode, $id);
        if($update){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function delete_kode_dt_ton($id){
        $delete = $this->admin->delete_kode_dt_ton($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin/add_data_unit');
    }

    public function create_kode_block(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $response = array();
        $create = $this->admin->create_kode_block($kode);
        if($create){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function get_kode_block_detail($id){
        $kode_block = $this->admin->get_kode_block_detail($id);

        echo json_encode($kode_block);
    }

    public function edit_kode_block(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $response = array();
        $update = $this->admin->update_kode_block($kode, $id);
        if($update){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function delete_kode_block($id){
        $delete = $this->admin->delete_kode_block($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin/add_data_unit');
    }

    public function create_kode_unit_type(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $response = array();
        $create = $this->admin->create_kode_unit_type($kode);
        if($create){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function get_kode_unit_type_detail($id){
        $kode_block = $this->admin->get_kode_unit_type_detail($id);

        echo json_encode($kode_block);
    }

    public function edit_kode_unit_type(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $response = array();
        $update = $this->admin->update_kode_unit_type($kode, $id);
        if($update){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function delete_kode_unit_type($id){
        $delete = $this->admin->delete_kode_unit_type($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin/add_data_unit');
    }

    public function create_kode_loading_point(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $response = array();
        $create = $this->admin->create_kode_loading_point($kode);
        if($create){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function get_kode_loading_point_detail($id){
        $kode_block = $this->admin->get_kode_loading_point_detail($id);

        echo json_encode($kode_block);
    }

    public function edit_kode_loading_point(){
        $kode = strip_tags(str_replace("'", "", $this->input->post('kode')));
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $response = array();
        $update = $this->admin->update_kode_loading_point($kode, $id);
        if($update){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response); 
    }

    public function delete_kode_loading_point($id){
        $delete = $this->admin->delete_kode_loading_point($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin/add_data_unit');
    }

    public function user_management(){
        $data['role'] = $this->admin->get_role();
        $data['user'] = $this->admin->get_user_management();
        $this->load->view('Admin/V_user_management', $data);
    }

    public function create_user(){
        $nrp = strip_tags(str_replace("'", "", $this->input->post('nrp')));
        $name = strip_tags(str_replace("'", "", $this->input->post('name')));
        $username = strip_tags(str_replace("'", "", $this->input->post('username')));
        $role = strip_tags(str_replace("'", "", $this->input->post('role')));
        $password =  strip_tags(str_replace("'", "", $this->input->post('password')));
        $shift =  strip_tags(str_replace("'", "", $this->input->post('shift')));

        $response = array();
        $check = $this->admin->check_user_nrp($nrp);

        $check_username = $this->admin->check_username($username);

        if (count($check) > 0) {
            $response = array(
                'response' => "nrp same",
            );
        }else if(count($check_username)){
            $response = array(
                'response' => "username same",
            );
        }else{
            $data = [
                'id_role' => $role,
                'nrp' => $nrp,
                'username' => $username,
                'password' => md5($password),
                'name' => $name,
                'shift' => $shift
            ];
            $create = $this->admin->create_user($data);

            if($create){
                echo $this->session->set_flashdata('flash', 'inserted');
                $response = array(
                    'response' => "success",
                );
            }else{
                $response = array(
                    'response' => "failed",
                );
            }
        }
        echo json_encode($response); 
    }

    public function get_user_detail($id){
        $user = $this->admin->get_user_detail($id);
        echo json_encode($user);
    }

    public function get_role_detail(){
        $role = $this->admin->get_role_detail();
        echo json_encode($role);
    }

    public function edit_user(){
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $nrp = strip_tags(str_replace("'", "", $this->input->post('nrp')));
        $name = strip_tags(str_replace("'", "", $this->input->post('name')));
        $username = strip_tags(str_replace("'", "", $this->input->post('username')));
        $role = strip_tags(str_replace("'", "", $this->input->post('role')));
        $password =  strip_tags(str_replace("'", "", $this->input->post('password')));
        $shift =  strip_tags(str_replace("'", "", $this->input->post('shift')));

        $response = array();
        $check = $this->admin->check_user_nrp_edit($nrp, $id);

        $check_username = $this->admin->check_username_edit($username, $id);

        if (count($check) > 0) {
            $response = array(
                'response' => "nrp same",
            );
        }else if(count($check_username)){
            $response = array(
                'response' => "username same",
            );
        }else{
            $data = array();
            if($password === ''){
                $data = [
                    'id_role' => $role,
                    'nrp' => $nrp,
                    'username' => $username,
                    'name' => $name,
                    'shift' => $shift
                ];
            }else{
                $data = [
                    'id_role' => $role,
                    'nrp' => $nrp,
                    'username' => $username,
                    'password' => md5($password),
                    'name' => $name,
                    'shift' => $shift
                ];
            }

            $update = $this->admin->update_user($data, $id);

            if($update){
                echo $this->session->set_flashdata('flash', 'inserted');
                $response = array(
                    'response' => "success",
                );
            }else{
                $response = array(
                    'response' => "failed",
                );
            }
        }
        echo json_encode($response); 
    }

    public function delete_user($id){
        $delete_user = $this->admin->delete_user($id);
        if($delete_user){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin/user_management');
    }

    public function plan_target(){

    	$this->load->view('Admin/V_plan_target');
    }

    public function add_data_plan() {
    	$data['plan'] = $this->admin->get_plan();
        $data['material'] = $this->admin->get_material_plan();
        $data['unit_type'] = $this->admin->get_unit_type_plan();
        // echo '<pre>';function
        // print_r($data['unit_status']);
        // echo "</pre>";die();
        $this->load->view('Admin/V_plan_target', $data);
    }

    public function create_plan(){
        $plan = strip_tags(str_replace("'", "", $this->input->post('plan')));
        $id_material = strip_tags(str_replace("'", "", $this->input->post('id_material')));
        $id_type_unit = strip_tags(str_replace("'", "", $this->input->post('id_type_unit')));
        $month = strip_tags(str_replace("'", "", $this->input->post('month')));
        $year = strip_tags(str_replace("'", "", $this->input->post('year')));
        $target = strip_tags(str_replace("'", "", $this->input->post('target')));
        $note = strip_tags(str_replace("'", "", $this->input->post('note')));

        $response = array(); 

        $data = [
            'plan' => $plan,
            'id_material' => $id_material,
            'id_type_unit' => $id_type_unit,
            'month' => $month,
            'year' => $year,
            'target' => $target,
            'note' => $note
        ];

        $create = $this->admin->create_plan($data);

        if($create){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }
        echo json_encode($response); 
    }

    public function get_plan_detail($id){
        $plan = $this->admin->get_plan_detail($id);

        echo json_encode($plan);
    }

    public function get_type_plan_detail(){
        $unit_type = $this->admin->get_type_plan_detail();
        echo json_encode($unit_type);
    }

    public function edit_plan(){
        $plan = strip_tags(str_replace("'", "", $this->input->post('plan')));
        $id_material = strip_tags(str_replace("'", "", $this->input->post('id_material')));
        $id_type_unit = strip_tags(str_replace("'", "", $this->input->post('id_type_unit')));
        $month = strip_tags(str_replace("'", "", $this->input->post('month')));
        $year = strip_tags(str_replace("'", "", $this->input->post('year')));
        $target = strip_tags(str_replace("'", "", $this->input->post('target')));
        $note = strip_tags(str_replace("'", "", $this->input->post('note')));

        $response = array(); 

        $data = [
            'plan' => $plan,
            'id_material' => $id_material,
            'id_type_unit' => $id_type_unit,
            'month' => $month,
            'year' => $year,
            'target' => $target,
            'note' => $note
        ];

        $update = $this->admin->update_plan($data);

        if($update){
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        }else{
            $response = array(
                'response' => "failed",
            );
        }
        echo json_encode($response);
    }

    public function delete_plan($id){

        $delete = $this->admin->delete_unit($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin/V_plan_target');
    }
}