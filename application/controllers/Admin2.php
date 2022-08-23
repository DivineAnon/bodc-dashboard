<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin2 extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
        // if($this->session->username == '' && $this->session->id_role != '1'){
        //     redirect(base_url());
        // }
        $this->load->model('M_admin2', 'admin2');
        $this->load->helper('security');
	}

	public function index() {

        $this->load->view('Admin/V_dashboard');
    }

    public function plan_target() {
        $data['data_plan'] = $this->admin2->get_plan();
        $data['material2'] = $this->admin2->get_material();
        $data['unit_type'] = $this->admin2->get_unit_type(); 
        // echo '<pre>';
        // print_r($data['material']);
        // echo "</pre>";die();
        // $this->load->view('Admin/V_add_unit', $data);
        $this->load->view('Admin/V_plan_target2', $data);
    }

    public function create_plan(){
        $plan = strip_tags(str_replace("'", "", $this->input->post('plan')));
        $material = strip_tags(str_replace("'", "", $this->input->post('material')));
        $unit_type = strip_tags(str_replace("'", "", $this->input->post('unit_type')));
        $month = strip_tags(str_replace("'", "", $this->input->post('month')));
        $year = strip_tags(str_replace("'", "", $this->input->post('year')));
        $target = strip_tags(str_replace("'", "", $this->input->post('target')));
        $note = strip_tags(str_replace("'", "", $this->input->post('note')));

        $response = array(); 

        $check = $this->admin2->check_plan($plan, $material, $unit_type, $month, $year);
      
        if (count($check) > 0) {
            $response = array(
                'response' => "plan same",
            );
        }else{
            $data = [
                'plan' => $plan,
                'id_material' => $material,
                'id_unit_type' => $unit_type,
                'month' => $month,
                'year' => $year,
                'target' => $target,
                'note' => $note
            ];

            $create = $this->admin2->create_plan($data);

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

    public function get_plan_detail($id){
        $plan = $this->admin2->get_plan_detail($id);

        echo json_encode($plan);
    }

    public function get_type_unit_detail(){
        $unit_type = $this->admin2->get_type_unit_detail();
        echo json_encode($unit_type);
    }

    public function get_material_detail(){
        $material = $this->admin2->get_material_detail();
        echo json_encode($material);
    }

    public function edit_plan(){
    	
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $plan = strip_tags(str_replace("'", "", $this->input->post('plan')));
        $material = strip_tags(str_replace("'", "", $this->input->post('material')));
        $unit_type = strip_tags(str_replace("'", "", $this->input->post('unit_type')));
        $month = strip_tags(str_replace("'", "", $this->input->post('month')));
        $year = strip_tags(str_replace("'", "", $this->input->post('year')));
        $target = strip_tags(str_replace("'", "", $this->input->post('target')));
        $note = strip_tags(str_replace("'", "", $this->input->post('note')));

        if($plan == 1){
            $unit_type = 0;
        }else{
            $material = 0;
        }

        $response = array(); 

        $check = $this->admin2->check_plan_edit($plan, $material, $unit_type, $month, $year, $id);
      
        if (count($check) > 0) {
            $response = array(
                'response' => "no plan same",
            );
        }else{
            $data = [
                'plan' => $plan,
                'id_material' => $material,
                'id_unit_type' => $unit_type,
                'month' => $month,
                'year' => $year,
                'target' => $target,
                'note' => $note,
                'id' => $id
            ];

            $update = $this->admin2->update_plan($data);

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

    public function delete_plan($id){
        $delete = $this->admin2->delete_plan($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Admin2/plan_target');
    }
}
?>