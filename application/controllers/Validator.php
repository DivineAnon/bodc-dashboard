<?php
class Validator extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if($this->session->username == '' && $this->session->id_role != '2'){
            redirect(base_url());
        }
        $this->load->model('M_validator', 'validator');
        $this->load->model('M_imputer','imputer');
        $this->load->helper('security');
    }

    public function index() {
        $this->load->view('Validator/V_dashboard_validator');
    }

    public function daily_report(){
        $data['activity'] = $this->validator->get_activity();
        $this->load->view('Validator/V_daily_report_validator',$data);
    }

    public function detail_activity_validator($unit){
        $unit = urldecode($this->uri->segment(3));
        $data['unit_status'] = $this->validator->get_unit_status($unit);
        $data['operator_information'] = $this->validator->get_operator_information($unit);
        $data['imputer_information'] = $this->validator->get_imputer_information($unit);
        $data['standby_status'] = $this->validator->get_standby_status($unit);
        // echo '<pre>';
        // print_r($data['unit_status']);
        // echo "</pre>";die();
        $this->load->view('Validator/V_activity_validator',$data);
    }

    public function confirm_unit_status($unit){
        $create = $this->validator->update_data_unit_status($unit);

        if($create){
            echo $this->session->set_flashdata('flash', 'inserted');
            redirect(base_url().'Validator/daily_report');
        } else {
            echo $this->session->set_flashdata('flash', 'insert failed');
            redirect(base_url().'Validator/daily_report');
        }
    }

    public function edit_activity_validator($no_unit, $tgl_aktifitas){
        $no_unit = urldecode($this->uri->segment(3));
        $data['no_unit'] = strip_tags(str_replace("'", "", $no_unit));
        $data['tgl_aktifitas'] = strip_tags(str_replace("'", "", $tgl_aktifitas));

        $data['nomor_unit'] = $this->imputer->get_unit($no_unit);

        $isAlreadyExist = $this->imputer->check_activity($no_unit, $tgl_aktifitas);
        if($isAlreadyExist['loader'] == true){
            if($isAlreadyExist['loader2'] == false){
                echo $this->session->set_flashdata('flash', 'not exist loader');
                redirect('Validator/detail_activity_validator/'.$no_unit);
            }
        }
        if ($isAlreadyExist['activity'] == true && $isAlreadyExist['unit_status'] == true) {
            echo $this->session->set_flashdata('flash', 'exist');
            redirect('Validator/detail_activity_validator/'.$no_unit);
        } else {
            redirect('imputer/daily-activity/'.$no_unit.'/'.$tgl_aktifitas);
        }
    }

    public function hourly_report(){
        $data['hourly'] = $this->validator->get_hourly_report();
        $this->load->view('Validator/V_hourly_report',$data);
    }

    public function detail_hourly_report($unit){
        $data['hourly_detail'] = $this->validator->get_hourly_detail($unit);
        $this->load->view('Validator/V_hourly_report_detail', $data);
    }

    public function update_data_radio($no_unit, $id){
        $no_unit = urldecode($this->uri->segment(3));
        $data['id2'] = $id;
        $data['no_unit'] = $no_unit;
        $data['block'] = $this->validator->get_block_hourly();
        $data['type_unit'] = $this->validator->get_type_unit_hourly();
        $data['dt_ton'] = $this->validator->get_dt_ton_hourly();
        $data['standby_code'] = $this->validator->get_standby_code2();
        $data['operator'] = $this->validator->get_operator_hourly();
        $data['material'] = $this->validator->get_material_hourly();
        $data['hourly_detail'] = $this->validator->get_no_unit_hourly($no_unit);
        $this->load->view('Validator/V_hourly_report_detail_ritasi', $data);
        // echo $this->input->post('no_unit');    
    }

    public function create_data_radio(){
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
        $tgl_aktifitas = strip_tags(str_replace("'", "", $this->input->post('tgl_aktifitas')));
        $type_unit = strip_tags(str_replace("'", "", $this->input->post('type_unit')));
        $block = strip_tags(str_replace("'", "", $this->input->post('block')));
        $work = strip_tags(str_replace("'", "", $this->input->post('work')));
        $remark = strip_tags(str_replace("'", "", $this->input->post('remark')));
        $problem = strip_tags(str_replace("'", "", $this->input->post('problem')));
        $operator = strip_tags(str_replace("'", "", $this->input->post('operator')));
        $dt_ton = strip_tags(str_replace("'", "", $this->input->post('dt_ton')));
        $jarak = strip_tags(str_replace("'", "", $this->input->post('jarak')));
        
        $time_1 = strip_tags(str_replace("'", "", $this->input->post('time_1')));
        $mat_1 = strip_tags(str_replace("'", "", $this->input->post('mat_1')));
        $total_1 = strip_tags(str_replace("'", "", $this->input->post('total_1')));

        $time_2 = strip_tags(str_replace("'", "", $this->input->post('time_2')));
        $mat_2 = strip_tags(str_replace("'", "", $this->input->post('mat_2')));
        $total_2 = strip_tags(str_replace("'", "", $this->input->post('total_2')));

        $time_3 = strip_tags(str_replace("'", "", $this->input->post('time_3')));
        $mat_3 = strip_tags(str_replace("'", "", $this->input->post('mat_3')));
        $total_3 = strip_tags(str_replace("'", "", $this->input->post('total_3')));

        $time_4 = strip_tags(str_replace("'", "", $this->input->post('time_4')));
        $mat_4 = strip_tags(str_replace("'", "", $this->input->post('mat_4')));
        $total_4 = strip_tags(str_replace("'", "", $this->input->post('total_4')));

        $time_5 = strip_tags(str_replace("'", "", $this->input->post('time_5')));
        $mat_5 = strip_tags(str_replace("'", "", $this->input->post('mat_5')));
        $total_5 = strip_tags(str_replace("'", "", $this->input->post('total_5')));

        $time_6 = strip_tags(str_replace("'", "", $this->input->post('time_6')));
        $mat_6 = strip_tags(str_replace("'", "", $this->input->post('mat_6')));
        $total_6 = strip_tags(str_replace("'", "", $this->input->post('total_6')));

        $time_7 = strip_tags(str_replace("'", "", $this->input->post('time_7')));
        $mat_7 = strip_tags(str_replace("'", "", $this->input->post('mat_7')));
        $total_7 = strip_tags(str_replace("'", "", $this->input->post('total_7')));

        $time_8 = strip_tags(str_replace("'", "", $this->input->post('time_8')));
        $mat_8 = strip_tags(str_replace("'", "", $this->input->post('mat_8')));
        $total_8 = strip_tags(str_replace("'", "", $this->input->post('total_8')));

        $time_9 = strip_tags(str_replace("'", "", $this->input->post('time_9')));
        $mat_9 = strip_tags(str_replace("'", "", $this->input->post('mat_9')));
        $total_9 = strip_tags(str_replace("'", "", $this->input->post('total_9')));

        $time_10 = strip_tags(str_replace("'", "", $this->input->post('time_10')));
        $mat_10 = strip_tags(str_replace("'", "", $this->input->post('mat_10')));
        $total_10 = strip_tags(str_replace("'", "", $this->input->post('total_10')));

        $time_11 = strip_tags(str_replace("'", "", $this->input->post('time_11')));
        $mat_11 = strip_tags(str_replace("'", "", $this->input->post('mat_11')));
        $total_11 = strip_tags(str_replace("'", "", $this->input->post('total_11')));

        $time_12 = strip_tags(str_replace("'", "", $this->input->post('time_12')));
        $mat_12 = strip_tags(str_replace("'", "", $this->input->post('mat_12')));
        $total_12 = strip_tags(str_replace("'", "", $this->input->post('total_12')));

        $time_13 = strip_tags(str_replace("'", "", $this->input->post('time_13')));
        $mat_13 = strip_tags(str_replace("'", "", $this->input->post('mat_13')));
        $total_13 = strip_tags(str_replace("'", "", $this->input->post('total_13')));

        $time_14 = strip_tags(str_replace("'", "", $this->input->post('time_14')));
        $mat_14 = strip_tags(str_replace("'", "", $this->input->post('mat_14')));
        $total_14 = strip_tags(str_replace("'", "", $this->input->post('total_14')));

        $time_15 = strip_tags(str_replace("'", "", $this->input->post('time_15')));
        $mat_15 = strip_tags(str_replace("'", "", $this->input->post('mat_15')));
        $total_15 = strip_tags(str_replace("'", "", $this->input->post('total_15')));

        $time_16 = strip_tags(str_replace("'", "", $this->input->post('time_16')));
        $mat_16 = strip_tags(str_replace("'", "", $this->input->post('mat_16')));
        $total_16 = strip_tags(str_replace("'", "", $this->input->post('total_16')));

        $time_17 = strip_tags(str_replace("'", "", $this->input->post('time_17')));
        $mat_17 = strip_tags(str_replace("'", "", $this->input->post('mat_17')));
        $total_17 = strip_tags(str_replace("'", "", $this->input->post('total_17')));

        $time_18 = strip_tags(str_replace("'", "", $this->input->post('time_18')));
        $mat_18 = strip_tags(str_replace("'", "", $this->input->post('mat_18')));
        $total_18 = strip_tags(str_replace("'", "", $this->input->post('total_18')));

        $time_19 = strip_tags(str_replace("'", "", $this->input->post('time_19')));
        $mat_19 = strip_tags(str_replace("'", "", $this->input->post('mat_19')));
        $total_19 = strip_tags(str_replace("'", "", $this->input->post('total_19')));

        $time_20 = strip_tags(str_replace("'", "", $this->input->post('time_20')));
        $mat_20 = strip_tags(str_replace("'", "", $this->input->post('mat_20')));
        $total_20 = strip_tags(str_replace("'", "", $this->input->post('total_20')));

        $time_21 = strip_tags(str_replace("'", "", $this->input->post('time_21')));
        $mat_21 = strip_tags(str_replace("'", "", $this->input->post('mat_21')));
        $total_21 = strip_tags(str_replace("'", "", $this->input->post('total_21')));
        
        $time_22 = strip_tags(str_replace("'", "", $this->input->post('time_22')));
        $mat_22 = strip_tags(str_replace("'", "", $this->input->post('mat_22')));
        $total_22 = strip_tags(str_replace("'", "", $this->input->post('total_22')));

        $time_23 = strip_tags(str_replace("'", "", $this->input->post('time_23')));
        $mat_23 = strip_tags(str_replace("'", "", $this->input->post('mat_23')));
        $total_23 = strip_tags(str_replace("'", "", $this->input->post('total_23')));

        $time_24 = strip_tags(str_replace("'", "", $this->input->post('time_24')));
        $mat_24 = strip_tags(str_replace("'", "", $this->input->post('mat_24')));
        $total_24 = strip_tags(str_replace("'", "", $this->input->post('total_24')));

        date_default_timezone_set('Asia/Jakarta');
        $response = array();
        $data = [
            'tgl_aktifitas' => date('Y-m-d', strtotime($tgl_aktifitas)),
            'id_type_unit' => $type_unit,
            'id_block' => $block,
            'id_dt_ton' => $dt_ton,
            'no_unit' => $no_unit,
            'work' => $work,
            'remark' => $remark,
            'problem' => $problem,
            'operator' => $operator,
            'jarak' => $jarak,
            'created_date' => date('Y-m-d H:i:s'),
            'status' => 'UPLOAD'
        ];

        $total_utama = intval($total_1) + intval($total_2) + intval($total_3) +intval($total_4) + intval($total_5) + intval($total_6) + intval($total_7) + intval($total_8) + intval($total_9) +  intval($total_10) + intval($total_11) + intval($total_12) 
        + intval($total_13) + intval($total_14) + intval($total_15) + intval($total_16)+ intval($total_17)+ intval($total_18)+ intval($total_19) + intval($total_21) + intval($total_22) + intval($total_23) + intval($total_24); 

        // echo $total_utama;die();
        $create = $this->validator->create_data_radio($data);

        if($create){
            $data2 = [
                'no_unit' => $no_unit,
                'time_1' => $time_1,
                'time_2' => $time_2,
                'time_3' => $time_3,
                'time_4' => $time_4,
                'time_5' => $time_5,
                'time_6' => $time_6,
                'time_7' => $time_7,
                'time_8' => $time_8,
                'time_9' => $time_9,
                'time_10' => $time_10,
                'time_11' => $time_11,
                'time_12' => $time_12,
                'time_13' => $time_13,
                'time_14' => $time_14,
                'time_15' => $time_15,
                'time_16' => $time_16,
                'time_17' => $time_17,
                'time_18' => $time_18,
                'time_19' => $time_19,
                'time_20' => $time_20,
                'time_21' => $time_21,
                'time_22' => $time_22,
                'time_23' => $time_23,
                'time_24' => $time_24,
                'mat_1' => $mat_1,
                'mat_2' => $mat_2,
                'mat_3' => $mat_3,
                'mat_4' => $mat_4,
                'mat_5' => $mat_5,
                'mat_6' => $mat_6,
                'mat_7' => $mat_7,
                'mat_8' => $mat_8,
                'mat_9' => $mat_9,
                'mat_10' => $mat_10,
                'mat_11' => $mat_11,
                'mat_12' => $mat_12,
                'mat_13' => $mat_13,
                'mat_14' => $mat_14,
                'mat_15' => $mat_15,
                'mat_16' => $mat_16,
                'mat_17' => $mat_17,
                'mat_18' => $mat_18,
                'mat_19' => $mat_19,
                'mat_20' => $mat_20,
                'mat_21' => $mat_21,
                'mat_22' => $mat_22,
                'mat_23' => $mat_23,
                'mat_24' => $mat_24,
                'total_1' => $total_1,
                'total_2' => $total_2,
                'total_3' => $total_3,
                'total_4' => $total_4,
                'total_5' => $total_5,
                'total_6' => $total_6,
                'total_7' => $total_7,
                'total_8' => $total_8,
                'total_9' => $total_9,
                'total_10' => $total_10,
                'total_11' => $total_11,
                'total_12' => $total_12,
                'total_13' => $total_13,
                'total_14' => $total_14,
                'total_15' => $total_15,
                'total_16' => $total_16,
                'total_17' => $total_17,
                'total_18' => $total_18,
                'total_19' => $total_19,
                'total_20' => $total_20,
                'total_21' => $total_21,
                'total_22' => $total_22,
                'total_23' => $total_23,
                'total_24' => $total_24,
                'total_utama' => intval($total_utama),
                'tgl_aktifitas' => date('Y-m-d', strtotime($tgl_aktifitas)),
            ];

            $this->validator->create_ritase($data2);
            
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        } else {
            echo $this->session->set_flashdata('flash', 'failed data same');
            $response = array(
                'response' => "failed",
                'text' => "Data unit date activity ".date('d F Y', strtotime($tgl_aktifitas))." is already exist in database"
            );
        }
        echo json_encode($response);
    }

    public function edit_data_radio(){
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
        $type_unit = strip_tags(str_replace("'", "", $this->input->post('type_unit')));
        $block = strip_tags(str_replace("'", "", $this->input->post('block')));
        $operator = strip_tags(str_replace("'", "", $this->input->post('operator')));
        $dt_ton = strip_tags(str_replace("'", "", $this->input->post('dt_ton')));
        $jarak = strip_tags(str_replace("'", "", $this->input->post('jarak')));
        $tgl_aktifitas = strip_tags(str_replace("'", "", $this->input->post('tgl_aktifitas')));

        $time_1 = '06:00';
        $mat_1 = strip_tags(str_replace("'", "", $this->input->post('mat_1')));
        $total_1 = strip_tags(str_replace("'", "", $this->input->post('total_1')));
        $work_1 = strip_tags(str_replace("'", "", $this->input->post('work_1')));
        $remark_1 = strip_tags(str_replace("'", "", $this->input->post('remark_1')));
        $problem_1 = strip_tags(str_replace("'", "", $this->input->post('problem_1')));

        $time_2 = '07:00';
        $mat_2 = strip_tags(str_replace("'", "", $this->input->post('mat_2')));
        $total_2 = strip_tags(str_replace("'", "", $this->input->post('total_2')));
        $work_2 = strip_tags(str_replace("'", "", $this->input->post('work_2')));
        $remark_2 = strip_tags(str_replace("'", "", $this->input->post('remark_2')));
        $problem_2 = strip_tags(str_replace("'", "", $this->input->post('problem_2')));

        $time_3 = '08:00';
        $mat_3 = strip_tags(str_replace("'", "", $this->input->post('mat_3')));
        $total_3 = strip_tags(str_replace("'", "", $this->input->post('total_3')));
        $work_3 = strip_tags(str_replace("'", "", $this->input->post('work_3')));
        $remark_3 = strip_tags(str_replace("'", "", $this->input->post('remark_3')));
        $problem_3 = strip_tags(str_replace("'", "", $this->input->post('problem_3')));

        $time_4 = '09:00';
        $mat_4 = strip_tags(str_replace("'", "", $this->input->post('mat_4')));
        $total_4 = strip_tags(str_replace("'", "", $this->input->post('total_4')));
        $work_4 = strip_tags(str_replace("'", "", $this->input->post('work_4')));
        $remark_4 = strip_tags(str_replace("'", "", $this->input->post('remark_4')));
        $problem_4 = strip_tags(str_replace("'", "", $this->input->post('problem_4')));

        $time_5 = '10:00';
        $mat_5 = strip_tags(str_replace("'", "", $this->input->post('mat_5')));
        $total_5 = strip_tags(str_replace("'", "", $this->input->post('total_5')));
        $work_5 = strip_tags(str_replace("'", "", $this->input->post('work_5')));
        $remark_5 = strip_tags(str_replace("'", "", $this->input->post('remark_5')));
        $problem_5 = strip_tags(str_replace("'", "", $this->input->post('problem_5')));

        $time_6 = '11:00';
        $mat_6 = strip_tags(str_replace("'", "", $this->input->post('mat_6')));
        $total_6 = strip_tags(str_replace("'", "", $this->input->post('total_6')));
        $work_6 = strip_tags(str_replace("'", "", $this->input->post('work_6')));
        $remark_6 = strip_tags(str_replace("'", "", $this->input->post('remark_6')));
        $problem_6 = strip_tags(str_replace("'", "", $this->input->post('problem_6')));

        $time_7 = '12:00';
        $mat_7 = strip_tags(str_replace("'", "", $this->input->post('mat_7')));
        $total_7 = strip_tags(str_replace("'", "", $this->input->post('total_7')));
        $work_7 = strip_tags(str_replace("'", "", $this->input->post('work_7')));
        $remark_7 = strip_tags(str_replace("'", "", $this->input->post('remark_7')));
        $problem_7 = strip_tags(str_replace("'", "", $this->input->post('problem_7')));

        $time_8 = '13:00';
        $mat_8 = strip_tags(str_replace("'", "", $this->input->post('mat_8')));
        $total_8 = strip_tags(str_replace("'", "", $this->input->post('total_8')));
        $work_8 = strip_tags(str_replace("'", "", $this->input->post('work_8')));
        $remark_8 = strip_tags(str_replace("'", "", $this->input->post('remark_8')));
        $problem_8 = strip_tags(str_replace("'", "", $this->input->post('problem_8')));

        $time_9 = '14:00';
        $mat_9 = strip_tags(str_replace("'", "", $this->input->post('mat_9')));
        $total_9 = strip_tags(str_replace("'", "", $this->input->post('total_9')));
        $work_9 = strip_tags(str_replace("'", "", $this->input->post('work_9')));
        $remark_9 = strip_tags(str_replace("'", "", $this->input->post('remark_9')));
        $problem_9 = strip_tags(str_replace("'", "", $this->input->post('problem_9')));

        $time_10 = '15:00';
        $mat_10 = strip_tags(str_replace("'", "", $this->input->post('mat_10')));
        $total_10 = strip_tags(str_replace("'", "", $this->input->post('total_10')));
        $work_10 = strip_tags(str_replace("'", "", $this->input->post('work_10')));
        $remark_10 = strip_tags(str_replace("'", "", $this->input->post('remark_10')));
        $problem_10 = strip_tags(str_replace("'", "", $this->input->post('problem_10')));

        $time_11 = '16:00';
        $mat_11 = strip_tags(str_replace("'", "", $this->input->post('mat_11')));
        $total_11 = strip_tags(str_replace("'", "", $this->input->post('total_11')));
        $work_11 = strip_tags(str_replace("'", "", $this->input->post('work_11')));
        $remark_11 = strip_tags(str_replace("'", "", $this->input->post('remark_11')));
        $problem_11 = strip_tags(str_replace("'", "", $this->input->post('problem_11')));

        $time_12 = '17:00';
        $mat_12 = strip_tags(str_replace("'", "", $this->input->post('mat_12')));
        $total_12 = strip_tags(str_replace("'", "", $this->input->post('total_12')));
        $work_12 = strip_tags(str_replace("'", "", $this->input->post('work_12')));
        $remark_12 = strip_tags(str_replace("'", "", $this->input->post('remark_12')));
        $problem_12 = strip_tags(str_replace("'", "", $this->input->post('problem_12')));

        $time_13 = '18:00';
        $mat_13 = strip_tags(str_replace("'", "", $this->input->post('mat_13')));
        $total_13 = strip_tags(str_replace("'", "", $this->input->post('total_13')));
        $work_13 = strip_tags(str_replace("'", "", $this->input->post('work_13')));
        $remark_13 = strip_tags(str_replace("'", "", $this->input->post('remark_13')));
        $problem_13 = strip_tags(str_replace("'", "", $this->input->post('problem_13')));

        $time_14 = '19:00';
        $mat_14 = strip_tags(str_replace("'", "", $this->input->post('mat_14')));
        $total_14 = strip_tags(str_replace("'", "", $this->input->post('total_14')));
        $work_14 = strip_tags(str_replace("'", "", $this->input->post('work_14')));
        $remark_14 = strip_tags(str_replace("'", "", $this->input->post('remark_14')));
        $problem_14 = strip_tags(str_replace("'", "", $this->input->post('problem_14')));

        $time_15 = '20:00';
        $mat_15 = strip_tags(str_replace("'", "", $this->input->post('mat_15')));
        $total_15 = strip_tags(str_replace("'", "", $this->input->post('total_15')));
        $work_15 = strip_tags(str_replace("'", "", $this->input->post('work_15')));
        $remark_15 = strip_tags(str_replace("'", "", $this->input->post('remark_15')));
        $problem_15 = strip_tags(str_replace("'", "", $this->input->post('problem_15')));

        $time_16 = '21:00';
        $mat_16 = strip_tags(str_replace("'", "", $this->input->post('mat_16')));
        $total_16 = strip_tags(str_replace("'", "", $this->input->post('total_16')));
        $work_16 = strip_tags(str_replace("'", "", $this->input->post('work_16')));
        $remark_16 = strip_tags(str_replace("'", "", $this->input->post('remark_16')));
        $problem_16 = strip_tags(str_replace("'", "", $this->input->post('problem_16')));

        $time_17 = '22:00';
        $mat_17 = strip_tags(str_replace("'", "", $this->input->post('mat_17')));
        $total_17 = strip_tags(str_replace("'", "", $this->input->post('total_17')));
        $work_17 = strip_tags(str_replace("'", "", $this->input->post('work_17')));
        $remark_17 = strip_tags(str_replace("'", "", $this->input->post('remark_17')));
        $problem_17 = strip_tags(str_replace("'", "", $this->input->post('problem_17')));

        $time_18 = '23:00';
        $mat_18 = strip_tags(str_replace("'", "", $this->input->post('mat_18')));
        $total_18 = strip_tags(str_replace("'", "", $this->input->post('total_18')));
        $work_18 = strip_tags(str_replace("'", "", $this->input->post('work_18')));
        $remark_18 = strip_tags(str_replace("'", "", $this->input->post('remark_18')));
        $problem_18 = strip_tags(str_replace("'", "", $this->input->post('problem_18')));

        $time_19 = '00:00';
        $mat_19 = strip_tags(str_replace("'", "", $this->input->post('mat_19')));
        $total_19 = strip_tags(str_replace("'", "", $this->input->post('total_19')));
        $work_19 = strip_tags(str_replace("'", "", $this->input->post('work_19')));
        $remark_19 = strip_tags(str_replace("'", "", $this->input->post('remark_19')));
        $problem_19 = strip_tags(str_replace("'", "", $this->input->post('problem_19')));

        $time_20 = '01:00';
        $mat_20 = strip_tags(str_replace("'", "", $this->input->post('mat_20')));
        $total_20 = strip_tags(str_replace("'", "", $this->input->post('total_20')));
        $work_20 = strip_tags(str_replace("'", "", $this->input->post('work_20')));
        $remark_20 = strip_tags(str_replace("'", "", $this->input->post('remark_20')));
        $problem_20 = strip_tags(str_replace("'", "", $this->input->post('problem_20')));

        $time_21 = '02:00';
        $mat_21 = strip_tags(str_replace("'", "", $this->input->post('mat_21')));
        $total_21 = strip_tags(str_replace("'", "", $this->input->post('total_21')));
        $work_21 = strip_tags(str_replace("'", "", $this->input->post('work_21')));
        $remark_21 = strip_tags(str_replace("'", "", $this->input->post('remark_21')));
        $problem_21 = strip_tags(str_replace("'", "", $this->input->post('problem_21')));
        
        $time_22 = '03:00';
        $mat_22 = strip_tags(str_replace("'", "", $this->input->post('mat_22')));
        $total_22 = strip_tags(str_replace("'", "", $this->input->post('total_22')));
        $work_22 = strip_tags(str_replace("'", "", $this->input->post('work_22')));
        $remark_22 = strip_tags(str_replace("'", "", $this->input->post('remark_22')));
        $problem_22 = strip_tags(str_replace("'", "", $this->input->post('problem_22')));

        $time_23 = strip_tags(str_replace("'", "", $this->input->post('time_23')));
        $mat_23 = strip_tags(str_replace("'", "", $this->input->post('mat_23')));
        $total_23 = strip_tags(str_replace("'", "", $this->input->post('total_23')));
        $work_23 = strip_tags(str_replace("'", "", $this->input->post('work_23')));
        $remark_23 = strip_tags(str_replace("'", "", $this->input->post('remark_23')));
        $problem_23 = strip_tags(str_replace("'", "", $this->input->post('problem_23')));

        $time_24 = strip_tags(str_replace("'", "", $this->input->post('time_24')));
        $mat_24 = strip_tags(str_replace("'", "", $this->input->post('mat_24')));
        $total_24 = strip_tags(str_replace("'", "", $this->input->post('total_24')));
        $work_24 = strip_tags(str_replace("'", "", $this->input->post('work_24')));
        $remark_24 = strip_tags(str_replace("'", "", $this->input->post('remark_24')));
        $problem_24 = strip_tags(str_replace("'", "", $this->input->post('problem_24')));
        
        $id_hourly_radio = strip_tags(str_replace("'", "", $this->input->post('id_hourly_radio')));
        date_default_timezone_set('Asia/Jakarta');
        $response = array();

        $data = [
            'id_type_unit' => $type_unit,
            'id_block' => $block,
            'id_dt_ton' => $dt_ton,
            'no_unit' => $no_unit,
            'operator' => $operator,
            'jarak' => $jarak,
            'status' => 'UPLOAD'
        ];

        $total_utama = intval($total_1) + intval($total_2) + intval($total_3) +intval($total_4) + intval($total_5) + intval($total_6) + intval($total_7) + intval($total_8) + intval($total_9) +  intval($total_10) + intval($total_11) + intval($total_12) 
        + intval($total_13) + intval($total_14) + intval($total_15) + intval($total_16)+ intval($total_17)+ intval($total_18)+ intval($total_19) + intval($total_21) + intval($total_22) + intval($total_23) + intval($total_24); 
        
        $update = $this->validator->update_data_radio($data,$id_hourly_radio);

        if($update){
            $data2 = [
                'time_1' => $time_1,
                'time_2' => $time_2,
                'time_3' => $time_3,
                'time_4' => $time_4,
                'time_5' => $time_5,
                'time_6' => $time_6,
                'time_7' => $time_7,
                'time_8' => $time_8,
                'time_9' => $time_9,
                'time_10' => $time_10,
                'time_11' => $time_11,
                'time_12' => $time_12,
                'time_13' => $time_13,
                'time_14' => $time_14,
                'time_15' => $time_15,
                'time_16' => $time_16,
                'time_17' => $time_17,
                'time_18' => $time_18,
                'time_19' => $time_19,
                'time_20' => $time_20,
                'time_21' => $time_21,
                'time_22' => $time_22,
                'time_23' => $time_23,
                'time_24' => $time_24,
                'mat_1' => $mat_1,
                'mat_2' => $mat_2,
                'mat_3' => $mat_3,
                'mat_4' => $mat_4,
                'mat_5' => $mat_5,
                'mat_6' => $mat_6,
                'mat_7' => $mat_7,
                'mat_8' => $mat_8,
                'mat_9' => $mat_9,
                'mat_10' => $mat_10,
                'mat_11' => $mat_11,
                'mat_12' => $mat_12,
                'mat_13' => $mat_13,
                'mat_14' => $mat_14,
                'mat_15' => $mat_15,
                'mat_16' => $mat_16,
                'mat_17' => $mat_17,
                'mat_18' => $mat_18,
                'mat_19' => $mat_19,
                'mat_20' => $mat_20,
                'mat_21' => $mat_21,
                'mat_22' => $mat_22,
                'mat_23' => $mat_23,
                'mat_24' => $mat_24,
                'total_1' => $total_1,
                'total_2' => $total_2,
                'total_3' => $total_3,
                'total_4' => $total_4,
                'total_5' => $total_5,
                'total_6' => $total_6,
                'total_7' => $total_7,
                'total_8' => $total_8,
                'total_9' => $total_9,
                'total_10' => $total_10,
                'total_11' => $total_11,
                'total_12' => $total_12,
                'total_13' => $total_13,
                'total_14' => $total_14,
                'total_15' => $total_15,
                'total_16' => $total_16,
                'total_17' => $total_17,
                'total_18' => $total_18,
                'total_19' => $total_19,
                'total_20' => $total_20,
                'total_21' => $total_21,
                'total_22' => $total_22,
                'total_23' => $total_23,
                'total_24' => $total_24,
                'work_1' => $work_1,
                'work_2' => $work_2,
                'work_3' => $work_3,
                'work_4' => $work_4,
                'work_5' => $work_5,
                'work_6' => $work_6,
                'work_7' => $work_7,
                'work_8' => $work_8,
                'work_9' => $work_9,
                'work_10' => $work_10,
                'work_11' => $work_11,
                'work_12' => $work_12,
                'work_13' => $work_13,
                'work_14' => $work_14,
                'work_15' => $work_15,
                'work_16' => $work_16,
                'work_17' => $work_17,
                'work_18' => $work_18,
                'work_19' => $work_19,
                'work_20' => $work_20,
                'work_21' => $work_21,
                'work_22' => $work_22,
                'work_23' => $work_23,
                'work_24' => $work_24,
                'remark_1' => $remark_1,
                'remark_2' => $remark_2,
                'remark_3' => $remark_3,
                'remark_4' => $remark_4,
                'remark_5' => $remark_5,
                'remark_6' => $remark_6,
                'remark_7' => $remark_7,
                'remark_8' => $remark_8,
                'remark_9' => $remark_9,
                'remark_10' => $remark_10,
                'remark_11' => $remark_11,
                'remark_12' => $remark_12,
                'remark_13' => $remark_13,
                'remark_14' => $remark_14,
                'remark_15' => $remark_15,
                'remark_16' => $remark_16,
                'remark_17' => $remark_17,
                'remark_18' => $remark_18,
                'remark_19' => $remark_19,
                'remark_20' => $remark_20,
                'remark_21' => $remark_21,
                'remark_22' => $remark_22,
                'remark_23' => $remark_23,
                'remark_24' => $remark_24,
                'problem_1' => $problem_1,
                'problem_2' => $problem_2,
                'problem_3' => $problem_3,
                'problem_4' => $problem_4,
                'problem_5' => $problem_5,
                'problem_6' => $problem_6,
                'problem_7' => $problem_7,
                'problem_8' => $problem_8,
                'problem_9' => $problem_9,
                'problem_10' => $problem_10,
                'problem_11' => $problem_11,
                'problem_12' => $problem_12,
                'problem_13' => $problem_13,
                'problem_14' => $problem_14,
                'problem_15' => $problem_15,
                'problem_16' => $problem_16,
                'problem_17' => $problem_17,
                'problem_18' => $problem_18,
                'problem_19' => $problem_19,
                'problem_20' => $problem_20,
                'problem_21' => $problem_21,
                'problem_22' => $problem_22,
                'problem_23' => $problem_23,
                'problem_24' => $problem_24,
                'total_utama' => intval($total_utama),
            ];

            $this->validator->update_ritase($data2, $no_unit, $tgl_aktifitas);
            

            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        } else {
            $response = array(
                'response' => "failed",
            );
        }

        echo json_encode($response);
    }
}