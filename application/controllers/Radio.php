<?php
class Radio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->username == '' && $this->session->id_role != '4'){
            redirect(base_url());
        }
        $this->load->model('M_radio', 'radio');
        $this->load->helper('security');
    }

    public function index() {
        $this->load->view('Radio/dashboard-radio');
    }

    public function hourly_report() {
        $data['unit'] = $this->radio->get_unit_admin();
        $data['hourly'] = $this->radio->get_radio_hourly();
        $this->load->view('Radio/hourly-report-radio', $data);        
    }

    public function add_data_radio(){

        // $check = $this->radio->get_no_unit($this->input->post('no_unit'));

        // if(empty($check)){
            // redirect(base_url().'Radio/update_data_radio/'.$this->input->post('no_unit'));
        // }else{
        //     echo $this->session->set_flashdata('flash', 'failed no unit');
        //     redirect(base_url().'Radio/hourly_report');
        // }
        // echo $this->input->post('no_unit'); 
        $data['no_unit'] = $this->input->post('no_unit');   
        $data['block'] = $this->radio->get_block_hourly();
        $data['type_unit'] = $this->radio->get_type_unit_hourly();
        $data['dt_ton'] = $this->radio->get_dt_ton_hourly();
        $data['standby_code'] = $this->radio->get_standby_code2();
        $data['operator'] = $this->radio->get_operator_hourly();
        $data['material'] = $this->radio->get_material_hourly();
        $data['hourly_detail'] = $this->radio->get_no_unit_hourly($this->input->post('no_unit')); 
        $this->load->view('Radio/hourly-activity-radio', $data);  
    }

    public function update_data_radio($no_unit, $id){
        $no_unit = urldecode($this->uri->segment(3));
        $data['id2'] = $id;
        $data['no_unit'] = $no_unit;
        $data['block'] = $this->radio->get_block_hourly();
        $data['type_unit'] = $this->radio->get_type_unit_hourly();
        $data['dt_ton'] = $this->radio->get_dt_ton_hourly();
        $data['standby_code'] = $this->radio->get_standby_code2();
        $data['operator'] = $this->radio->get_operator_hourly();
        $data['material'] = $this->radio->get_material_hourly();
        $data['hourly_detail'] = $this->radio->get_no_unit_hourly($no_unit);
        $this->load->view('Radio/hourly-activity-radio-edit', $data);
        // echo $this->input->post('no_unit');    
    }

    public function create_data_radio(){
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
        $tgl_aktifitas = strip_tags(str_replace("'", "", $this->input->post('tgl_aktifitas')));
        $type_unit = strip_tags(str_replace("'", "", $this->input->post('type_unit')));
        $block = strip_tags(str_replace("'", "", $this->input->post('block')));
        $operator = strip_tags(str_replace("'", "", $this->input->post('operator')));
        $dt_ton = strip_tags(str_replace("'", "", $this->input->post('dt_ton')));
        $jarak = strip_tags(str_replace("'", "", $this->input->post('jarak')));
        
        $time_1 = ($this->session->shift == '1') ? '06:00' : '18:00';
        $mat_1 = strip_tags(str_replace("'", "", $this->input->post('mat_1')));
        $total_1 = strip_tags(str_replace("'", "", $this->input->post('total_1')));
        $work_1 = strip_tags(str_replace("'", "", $this->input->post('work_1')));
        $remark_1 = strip_tags(str_replace("'", "", $this->input->post('remark_1')));
        $problem_1 = strip_tags(str_replace("'", "", $this->input->post('problem_1')));

        $time_2 = ($this->session->shift == '1') ? '07:00' : '19:00';
        $mat_2 = strip_tags(str_replace("'", "", $this->input->post('mat_2')));
        $total_2 = strip_tags(str_replace("'", "", $this->input->post('total_2')));
        $work_2 = strip_tags(str_replace("'", "", $this->input->post('work_2')));
        $remark_2 = strip_tags(str_replace("'", "", $this->input->post('remark_2')));
        $problem_2 = strip_tags(str_replace("'", "", $this->input->post('problem_2')));

        $time_3 = ($this->session->shift == '1') ? '08:00' : '20:00';
        $mat_3 = strip_tags(str_replace("'", "", $this->input->post('mat_3')));
        $total_3 = strip_tags(str_replace("'", "", $this->input->post('total_3')));
        $work_3 = strip_tags(str_replace("'", "", $this->input->post('work_3')));
        $remark_3 = strip_tags(str_replace("'", "", $this->input->post('remark_3')));
        $problem_3 = strip_tags(str_replace("'", "", $this->input->post('problem_3')));

        $time_4 = ($this->session->shift == '1') ? '09:00' : '21:00';
        $mat_4 = strip_tags(str_replace("'", "", $this->input->post('mat_4')));
        $total_4 = strip_tags(str_replace("'", "", $this->input->post('total_4')));
        $work_4 = strip_tags(str_replace("'", "", $this->input->post('work_4')));
        $remark_4 = strip_tags(str_replace("'", "", $this->input->post('remark_4')));
        $problem_4 = strip_tags(str_replace("'", "", $this->input->post('problem_4')));

        $time_5 = ($this->session->shift == '1') ? '10:00' : '22:00';
        $mat_5 = strip_tags(str_replace("'", "", $this->input->post('mat_5')));
        $total_5 = strip_tags(str_replace("'", "", $this->input->post('total_5')));
        $work_5 = strip_tags(str_replace("'", "", $this->input->post('work_5')));
        $remark_5 = strip_tags(str_replace("'", "", $this->input->post('remark_5')));
        $problem_5 = strip_tags(str_replace("'", "", $this->input->post('problem_5')));

        $time_6 = ($this->session->shift == '1') ? '11:00' : '23:00';
        $mat_6 = strip_tags(str_replace("'", "", $this->input->post('mat_6')));
        $total_6 = strip_tags(str_replace("'", "", $this->input->post('total_6')));
        $work_6 = strip_tags(str_replace("'", "", $this->input->post('work_6')));
        $remark_6 = strip_tags(str_replace("'", "", $this->input->post('remark_6')));
        $problem_6 = strip_tags(str_replace("'", "", $this->input->post('problem_6')));

        $time_7 = ($this->session->shift == '1') ? '12:00' : '00:00';
        $mat_7 = strip_tags(str_replace("'", "", $this->input->post('mat_7')));
        $total_7 = strip_tags(str_replace("'", "", $this->input->post('total_7')));
        $work_7 = strip_tags(str_replace("'", "", $this->input->post('work_7')));
        $remark_7 = strip_tags(str_replace("'", "", $this->input->post('remark_7')));
        $problem_7 = strip_tags(str_replace("'", "", $this->input->post('problem_7')));

        $time_8 = ($this->session->shift == '1') ? '13:00' : '01:00';
        $mat_8 = strip_tags(str_replace("'", "", $this->input->post('mat_8')));
        $total_8 = strip_tags(str_replace("'", "", $this->input->post('total_8')));
        $work_8 = strip_tags(str_replace("'", "", $this->input->post('work_8')));
        $remark_8 = strip_tags(str_replace("'", "", $this->input->post('remark_8')));
        $problem_8 = strip_tags(str_replace("'", "", $this->input->post('problem_8')));

        $time_9 = ($this->session->shift == '1') ? '14:00' : '02:00';
        $mat_9 = strip_tags(str_replace("'", "", $this->input->post('mat_9')));
        $total_9 = strip_tags(str_replace("'", "", $this->input->post('total_9')));
        $work_9 = strip_tags(str_replace("'", "", $this->input->post('work_9')));
        $remark_9 = strip_tags(str_replace("'", "", $this->input->post('remark_9')));
        $problem_9 = strip_tags(str_replace("'", "", $this->input->post('problem_9')));

        $time_10 = ($this->session->shift == '1') ? '15:00' : '03:00';
        $mat_10 = strip_tags(str_replace("'", "", $this->input->post('mat_10')));
        $total_10 = strip_tags(str_replace("'", "", $this->input->post('total_10')));
        $work_10 = strip_tags(str_replace("'", "", $this->input->post('work_10')));
        $remark_10 = strip_tags(str_replace("'", "", $this->input->post('remark_10')));
        $problem_10 = strip_tags(str_replace("'", "", $this->input->post('problem_10')));

        $time_11 = ($this->session->shift == '1') ? '16:00' : '04:00';
        $mat_11 = strip_tags(str_replace("'", "", $this->input->post('mat_11')));
        $total_11 = strip_tags(str_replace("'", "", $this->input->post('total_11')));
        $work_11 = strip_tags(str_replace("'", "", $this->input->post('work_11')));
        $remark_11 = strip_tags(str_replace("'", "", $this->input->post('remark_11')));
        $problem_11 = strip_tags(str_replace("'", "", $this->input->post('problem_11')));

        $time_12 = ($this->session->shift == '1') ? '17:00' : '05:00';
        $mat_12 = strip_tags(str_replace("'", "", $this->input->post('mat_12')));
        $total_12 = strip_tags(str_replace("'", "", $this->input->post('total_12')));
        $work_12 = strip_tags(str_replace("'", "", $this->input->post('work_12')));
        $remark_12 = strip_tags(str_replace("'", "", $this->input->post('remark_12')));
        $problem_12 = strip_tags(str_replace("'", "", $this->input->post('problem_12')));

        $time_13 = ($this->session->shift == '1') ? '18:00' : '06:00';
        $mat_13 = strip_tags(str_replace("'", "", $this->input->post('mat_13')));
        $total_13 = strip_tags(str_replace("'", "", $this->input->post('total_13')));
        $work_13 = strip_tags(str_replace("'", "", $this->input->post('work_13')));
        $remark_13 = strip_tags(str_replace("'", "", $this->input->post('remark_13')));
        $problem_13 = strip_tags(str_replace("'", "", $this->input->post('problem_13')));
        

        date_default_timezone_set('Asia/Jakarta');
        $response = array();
        $data = [
            'tgl_aktifitas' => date('Y-m-d', strtotime($tgl_aktifitas)),
            'id_type_unit' => $type_unit,
            'id_block' => $block,
            'id_dt_ton' => $dt_ton,
            'no_unit' => $no_unit,
            'operator' => $operator,
            'jarak' => $jarak,
            'created_date' => date('Y-m-d H:i:s'),
            'status' => 'UPLOAD'
        ];

        $total_utama = intval($total_1) + intval($total_2) + intval($total_3) +intval($total_4) + intval($total_5) + intval($total_6) + intval($total_7) + intval($total_8) + intval($total_9) +  intval($total_10) + intval($total_11) + intval($total_12) + intval($total_13); 

        // echo $total_utama;die();
        $create = $this->radio->create_data_radio($data);

        if($create){
            
            if($this->session->shift == '1'){
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
                    'total_utama' => intval($total_utama),
                    'tgl_aktifitas' => date('Y-m-d', strtotime($tgl_aktifitas)),
                ];

                $this->radio->create_ritase($data2);
            }else{
                $data2 = [
                    'no_unit' => $no_unit,
                    'time_13' => $time_1,
                    'time_14' => $time_2,
                    'time_15' => $time_3,
                    'time_16' => $time_4,
                    'time_17' => $time_5,
                    'time_18' => $time_6,
                    'time_19' => $time_7,
                    'time_20' => $time_8,
                    'time_21' => $time_9,
                    'time_22' => $time_10,
                    'time_23' => $time_11,
                    'time_24' => $time_12,
                    'time_1' => $time_13,
                    'mat_13' => $mat_1,
                    'mat_14' => $mat_2,
                    'mat_15' => $mat_3,
                    'mat_16' => $mat_4,
                    'mat_17' => $mat_5,
                    'mat_18' => $mat_6,
                    'mat_19' => $mat_7,
                    'mat_20' => $mat_8,
                    'mat_21' => $mat_9,
                    'mat_22' => $mat_10,
                    'mat_23' => $mat_11,
                    'mat_24' => $mat_12,
                    'mat_1' => $mat_13,
                    'total_13' => $total_1,
                    'total_14' => $total_2,
                    'total_15' => $total_3,
                    'total_16' => $total_4,
                    'total_17' => $total_5,
                    'total_18' => $total_6,
                    'total_19' => $total_7,
                    'total_20' => $total_8,
                    'total_21' => $total_9,
                    'total_22' => $total_10,
                    'total_23' => $total_11,
                    'total_24' => $total_12,
                    'total_1' => $total_13,
                    'work_13' => $work_1,
                    'work_14' => $work_2,
                    'work_15' => $work_3,
                    'work_16' => $work_4,
                    'work_17' => $work_5,
                    'work_18' => $work_6,
                    'work_19' => $work_7,
                    'work_20' => $work_8,
                    'work_21' => $work_9,
                    'work_22' => $work_10,
                    'work_23' => $work_11,
                    'work_24' => $work_12,
                    'work_1' => $work_13,
                    'remark_13' => $remark_1,
                    'remark_14' => $remark_2,
                    'remark_15' => $remark_3,
                    'remark_16' => $remark_4,
                    'remark_17' => $remark_5,
                    'remark_18' => $remark_6,
                    'remark_19' => $remark_7,
                    'remark_20' => $remark_8,
                    'remark_21' => $remark_9,
                    'remark_22' => $remark_10,
                    'remark_23' => $remark_11,
                    'remark_24' => $remark_12,
                    'remark_1' => $remark_13,
                    'problem_13' => $problem_1,
                    'problem_14' => $problem_2,
                    'problem_15' => $problem_3,
                    'problem_16' => $problem_4,
                    'problem_17' => $problem_5,
                    'problem_18' => $problem_6,
                    'problem_19' => $problem_7,
                    'problem_20' => $problem_8,
                    'problem_21' => $problem_9,
                    'problem_22' => $problem_10,
                    'problem_23' => $problem_11,
                    'problem_24' => $problem_12,
                    'problem_1' => $problem_13,
                    'total_utama' => $total_utama,
                    'tgl_aktifitas' => date('Y-m-d', strtotime($tgl_aktifitas)),
                ];

                $this->radio->create_ritase($data2);
            }
            echo $this->session->set_flashdata('flash', 'inserted');
            $response = array(
                'response' => "success",
            );
        } else {
            // echo $this->session->set_flashdata('flash', 'failed data same');
            $response = array(
                'response' => "failed",
                'text' => "Data unit date activity ".date('d F Y', strtotime($tgl_aktifitas))." is already exist in database"
            );
        }
        echo json_encode($response);
    }

    public function get_type_unit_json(){
        $result = $this->radio->get_type_unit_json();

        echo json_encode($result);
    }

    public function get_block_json(){
        $result = $this->radio->get_block_json();

        echo json_encode($result);
    }

    public function get_remark_json(){
        $result = $this->radio->get_remark_json();

        echo json_encode($result);
    }

    public function get_operator_json(){
        $result = $this->radio->get_operator_json();

        echo json_encode($result);
    }

    public function get_dt_json(){
        $result = $this->radio->get_dt_json();

        echo json_encode($result);
    }

    public function get_data_radio_detail($id){
        $radio = $this->radio->get_data_radio_detail($id);

        echo json_encode($radio);
    }

    public function get_ritasi_json_detail($no_unit, $tgl_aktifitas){
        date_default_timezone_set('Asia/Jakarta');
        $radio = $this->radio->get_ritasi_json_detail($no_unit, $tgl_aktifitas);

        echo json_encode($radio);
    }

    public function get_material_json(){
        $result = $this->radio->get_material_json();

        echo json_encode($result);
    }

    public function edit_data_radio(){
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
        $type_unit = strip_tags(str_replace("'", "", $this->input->post('type_unit')));
        $block = strip_tags(str_replace("'", "", $this->input->post('block')));
        $operator = strip_tags(str_replace("'", "", $this->input->post('operator')));
        $dt_ton = strip_tags(str_replace("'", "", $this->input->post('dt_ton')));
        $jarak = strip_tags(str_replace("'", "", $this->input->post('jarak')));
        $tgl_aktifitas = strip_tags(str_replace("'", "", $this->input->post('tgl_aktifitas')));

        $time_1 = ($this->session->shift == '1') ? '06:00' : '18:00';
        $mat_1 = strip_tags(str_replace("'", "", $this->input->post('mat_1')));
        $total_1 = strip_tags(str_replace("'", "", $this->input->post('total_1')));
        $work_1 = strip_tags(str_replace("'", "", $this->input->post('work_1')));
        $remark_1 = strip_tags(str_replace("'", "", $this->input->post('remark_1')));
        $problem_1 = strip_tags(str_replace("'", "", $this->input->post('problem_1')));

        $time_2 = ($this->session->shift == '1') ? '07:00' : '19:00';
        $mat_2 = strip_tags(str_replace("'", "", $this->input->post('mat_2')));
        $total_2 = strip_tags(str_replace("'", "", $this->input->post('total_2')));
        $work_2 = strip_tags(str_replace("'", "", $this->input->post('work_2')));
        $remark_2 = strip_tags(str_replace("'", "", $this->input->post('remark_2')));
        $problem_2 = strip_tags(str_replace("'", "", $this->input->post('problem_2')));

        $time_3 = ($this->session->shift == '1') ? '08:00' : '20:00';
        $mat_3 = strip_tags(str_replace("'", "", $this->input->post('mat_3')));
        $total_3 = strip_tags(str_replace("'", "", $this->input->post('total_3')));
        $work_3 = strip_tags(str_replace("'", "", $this->input->post('work_3')));
        $remark_3 = strip_tags(str_replace("'", "", $this->input->post('remark_3')));
        $problem_3 = strip_tags(str_replace("'", "", $this->input->post('problem_3')));

        $time_4 = ($this->session->shift == '1') ? '09:00' : '21:00';
        $mat_4 = strip_tags(str_replace("'", "", $this->input->post('mat_4')));
        $total_4 = strip_tags(str_replace("'", "", $this->input->post('total_4')));
        $work_4 = strip_tags(str_replace("'", "", $this->input->post('work_4')));
        $remark_4 = strip_tags(str_replace("'", "", $this->input->post('remark_4')));
        $problem_4 = strip_tags(str_replace("'", "", $this->input->post('problem_4')));

        $time_5 = ($this->session->shift == '1') ? '10:00' : '22:00';
        $mat_5 = strip_tags(str_replace("'", "", $this->input->post('mat_5')));
        $total_5 = strip_tags(str_replace("'", "", $this->input->post('total_5')));
        $work_5 = strip_tags(str_replace("'", "", $this->input->post('work_5')));
        $remark_5 = strip_tags(str_replace("'", "", $this->input->post('remark_5')));
        $problem_5 = strip_tags(str_replace("'", "", $this->input->post('problem_5')));

        $time_6 = ($this->session->shift == '1') ? '11:00' : '23:00';
        $mat_6 = strip_tags(str_replace("'", "", $this->input->post('mat_6')));
        $total_6 = strip_tags(str_replace("'", "", $this->input->post('total_6')));
        $work_6 = strip_tags(str_replace("'", "", $this->input->post('work_6')));
        $remark_6 = strip_tags(str_replace("'", "", $this->input->post('remark_6')));
        $problem_6 = strip_tags(str_replace("'", "", $this->input->post('problem_6')));

        $time_7 = ($this->session->shift == '1') ? '12:00' : '00:00';
        $mat_7 = strip_tags(str_replace("'", "", $this->input->post('mat_7')));
        $total_7 = strip_tags(str_replace("'", "", $this->input->post('total_7')));
        $work_7 = strip_tags(str_replace("'", "", $this->input->post('work_7')));
        $remark_7 = strip_tags(str_replace("'", "", $this->input->post('remark_7')));
        $problem_7 = strip_tags(str_replace("'", "", $this->input->post('problem_7')));

        $time_8 = ($this->session->shift == '1') ? '13:00' : '01:00';
        $mat_8 = strip_tags(str_replace("'", "", $this->input->post('mat_8')));
        $total_8 = strip_tags(str_replace("'", "", $this->input->post('total_8')));
        $work_8 = strip_tags(str_replace("'", "", $this->input->post('work_8')));
        $remark_8 = strip_tags(str_replace("'", "", $this->input->post('remark_8')));
        $problem_8 = strip_tags(str_replace("'", "", $this->input->post('problem_8')));

        $time_9 = ($this->session->shift == '1') ? '14:00' : '02:00';
        $mat_9 = strip_tags(str_replace("'", "", $this->input->post('mat_9')));
        $total_9 = strip_tags(str_replace("'", "", $this->input->post('total_9')));
        $work_9 = strip_tags(str_replace("'", "", $this->input->post('work_9')));
        $remark_9 = strip_tags(str_replace("'", "", $this->input->post('remark_9')));
        $problem_9 = strip_tags(str_replace("'", "", $this->input->post('problem_9')));

        $time_10 = ($this->session->shift == '1') ? '15:00' : '03:00';
        $mat_10 = strip_tags(str_replace("'", "", $this->input->post('mat_10')));
        $total_10 = strip_tags(str_replace("'", "", $this->input->post('total_10')));
        $work_10 = strip_tags(str_replace("'", "", $this->input->post('work_10')));
        $remark_10 = strip_tags(str_replace("'", "", $this->input->post('remark_10')));
        $problem_10 = strip_tags(str_replace("'", "", $this->input->post('problem_10')));

        $time_11 = ($this->session->shift == '1') ? '16:00' : '04:00';
        $mat_11 = strip_tags(str_replace("'", "", $this->input->post('mat_11')));
        $total_11 = strip_tags(str_replace("'", "", $this->input->post('total_11')));
        $work_11 = strip_tags(str_replace("'", "", $this->input->post('work_11')));
        $remark_11 = strip_tags(str_replace("'", "", $this->input->post('remark_11')));
        $problem_11 = strip_tags(str_replace("'", "", $this->input->post('problem_11')));

        $time_12 = ($this->session->shift == '1') ? '17:00' : '05:00';
        $mat_12 = strip_tags(str_replace("'", "", $this->input->post('mat_12')));
        $total_12 = strip_tags(str_replace("'", "", $this->input->post('total_12')));
        $work_12 = strip_tags(str_replace("'", "", $this->input->post('work_12')));
        $remark_12 = strip_tags(str_replace("'", "", $this->input->post('remark_12')));
        $problem_12 = strip_tags(str_replace("'", "", $this->input->post('problem_12')));

        $time_13 = ($this->session->shift == '1') ? '18:00' : '06:00';
        $mat_13 = strip_tags(str_replace("'", "", $this->input->post('mat_13')));
        $total_13 = strip_tags(str_replace("'", "", $this->input->post('total_13')));
        $work_13 = strip_tags(str_replace("'", "", $this->input->post('work_13')));
        $remark_13 = strip_tags(str_replace("'", "", $this->input->post('remark_13')));
        $problem_13 = strip_tags(str_replace("'", "", $this->input->post('problem_13')));
        
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

        $total_utama = intval($total_1) + intval($total_2) + intval($total_3) +intval($total_4) + intval($total_5) + intval($total_6) + intval($total_7) + intval($total_8) + intval($total_9) +  intval($total_10) + intval($total_11) + intval($total_12) + intval($total_13); 

        $update = $this->radio->update_data_radio($data,$id_hourly_radio);

        if($update){
            $total_utama_sbl = $this->radio->get_total_ritase($no_unit, $tgl_aktifitas);

            if($this->session->shift == '1'){
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
                    'total_utama' => intval($total_utama) + intval($total_utama_sbl) - intval($total_13),
                ];

                $this->radio->update_ritase($data2, $no_unit, $tgl_aktifitas);
            }else{
                $data2 = [
                    'time_13' => $time_1,
                    'time_14' => $time_2,
                    'time_15' => $time_3,
                    'time_16' => $time_4,
                    'time_17' => $time_5,
                    'time_18' => $time_6,
                    'time_19' => $time_7,
                    'time_20' => $time_8,
                    'time_21' => $time_9,
                    'time_22' => $time_10,
                    'time_23' => $time_11,
                    'time_24' => $time_12,
                    'time_1' => $time_13,
                    'mat_13' => $mat_1,
                    'mat_14' => $mat_2,
                    'mat_15' => $mat_3,
                    'mat_16' => $mat_4,
                    'mat_17' => $mat_5,
                    'mat_18' => $mat_6,
                    'mat_19' => $mat_7,
                    'mat_20' => $mat_8,
                    'mat_21' => $mat_9,
                    'mat_22' => $mat_10,
                    'mat_23' => $mat_11,
                    'mat_24' => $mat_12,
                    'mat_1' => $mat_13,
                    'total_13' => $total_1,
                    'total_14' => $total_2,
                    'total_15' => $total_3,
                    'total_16' => $total_4,
                    'total_17' => $total_5,
                    'total_18' => $total_6,
                    'total_19' => $total_7,
                    'total_20' => $total_8,
                    'total_21' => $total_9,
                    'total_22' => $total_10,
                    'total_23' => $total_11,
                    'total_24' => $total_12,
                    'total_1' => $total_13,
                    'work_13' => $work_1,
                    'work_14' => $work_2,
                    'work_15' => $work_3,
                    'work_16' => $work_4,
                    'work_17' => $work_5,
                    'work_18' => $work_6,
                    'work_19' => $work_7,
                    'work_20' => $work_8,
                    'work_21' => $work_9,
                    'work_22' => $work_10,
                    'work_23' => $work_11,
                    'work_24' => $work_12,
                    'work_1' => $work_13,
                    'remark_13' => $remark_1,
                    'remark_14' => $remark_2,
                    'remark_15' => $remark_3,
                    'remark_16' => $remark_4,
                    'remark_17' => $remark_5,
                    'remark_18' => $remark_6,
                    'remark_19' => $remark_7,
                    'remark_20' => $remark_8,
                    'remark_21' => $remark_9,
                    'remark_22' => $remark_10,
                    'remark_23' => $remark_11,
                    'remark_24' => $remark_12,
                    'remark_1' => $remark_13,
                    'problem_13' => $problem_1,
                    'problem_14' => $problem_2,
                    'problem_15' => $problem_3,
                    'problem_16' => $problem_4,
                    'problem_17' => $problem_5,
                    'problem_18' => $problem_6,
                    'problem_19' => $problem_7,
                    'problem_20' => $problem_8,
                    'problem_21' => $problem_9,
                    'problem_22' => $problem_10,
                    'problem_23' => $problem_11,
                    'problem_24' => $problem_12,
                    'problem_1' => $problem_13,
                    'total_utama' => intval($total_utama) + intval($total_utama_sbl) - intval($total_13),
                ];

                $this->radio->update_ritase($data2, $no_unit, $tgl_aktifitas);
            }

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

    public function delete_data_radio($id, $no_unit){
        $delete = $this->radio->delete_data_radio($id);
        if($delete){
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect(base_url().'Radio/hourly_report/');
    }

    public function confirm_data_radio(){
        $id_hourly_radio = strip_tags(str_replace("'", "", $this->input->post('id_hourly_radio')));
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
        $response = array();

        $confirm = $this->radio->confirm_data_radio($id_hourly_radio, $no_unit);
        if($confirm){
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

    public function breakdown() {
        $data['breakdowns'] = $this->radio->get_breakdown();
        $data['units'] = $this->radio->get_all_units();
        $this->load->view('Radio/breakdown-information-radio', $data);
    }

    public function add_breakdown($no_unit) {
        $no_unit = urldecode($this->uri->segment(3));
        $data['no_unit'] = $no_unit;
        $data['nomor_unit'] = $this->radio->get_unit($no_unit);
        $data['breakdowns'] = $this->radio->get_breakdown();
        $data['breakdown'] = $this->radio->get_breakdown_by_no_unit($no_unit);
        $data['unit_types'] = $this->radio->get_type_unit();
        $data['standby'] = $this->radio->get_standby_code();
        $data['isLoader'] = $this->radio->check_is_loader($no_unit);
        $this->load->view('Radio/add-breakdown-information', $data);
    }

    public function edit_breakdown($id) {
        $data['breakdown'] = $this->radio->get_breakdown_by_id($id);
        $data['unit_types'] = $this->radio->get_type_unit();
        $data['standby'] = $this->radio->get_standby_code();
        $data['isLoader'] = $this->radio->check_is_loader($data['breakdown']['no_unit']);
        $this->load->view('Radio/edit-breakdown-information', $data);
    }

    public function save_breakdown() {
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
        $type_unit = strip_tags(str_replace("'", "", $this->input->post('type_unit')));
        $lokasi = strip_tags(str_replace("'", "", $this->input->post('lokasi')));
        $type = strip_tags(str_replace("'", "", $this->input->post('type')));
        $tanggal = strip_tags(str_replace("'", "", $this->input->post('tanggal')));
        $start_bd = strip_tags(str_replace("'", "", $this->input->post('start_bd')));
        $rfu = strip_tags(str_replace("'", "", $this->input->post('rfu')));
        $lokasi_rfu = strip_tags(str_replace("'", "", $this->input->post('lokasi_rfu')));
        $standby_status = strip_tags(str_replace("'", "", $this->input->post('standby_status')));
        $remark = strip_tags(str_replace("'", "", $this->input->post('remark')));

        $param = [
            'tgl_aktifitas' => $tanggal,
            'type_unit' => $type_unit,
            'no_unit' => $no_unit,
            'lokasi' => $lokasi,
            'type' => $type,
            'start_bd' => $start_bd,
            'rfu' => $rfu,
            'lokasi_rfu' => $lokasi_rfu,
            'standby_status' => $standby_status,
            'remark' => $remark,
        ];
        $param = $this->security->xss_clean($param);

        $insert = $this->radio->save_breakdown($param);

        if ($insert) {
            echo $this->session->set_flashdata('flash', 'inserted');
        }

        redirect('radio/breakdown');
    }

    public function update_breakdown() {
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $type_unit = strip_tags(str_replace("'", "", $this->input->post('type_unit')));
        $lokasi = strip_tags(str_replace("'", "", $this->input->post('lokasi')));
        $type = strip_tags(str_replace("'", "", $this->input->post('type')));
        $tanggal = strip_tags(str_replace("'", "", $this->input->post('tanggal')));
        $start_bd = strip_tags(str_replace("'", "", $this->input->post('start_bd')));
        $rfu = strip_tags(str_replace("'", "", $this->input->post('rfu')));
        $lokasi_rfu = strip_tags(str_replace("'", "", $this->input->post('lokasi_rfu')));
        $standby_status = strip_tags(str_replace("'", "", $this->input->post('standby_status')));
        $remark = strip_tags(str_replace("'", "", $this->input->post('remark')));

        $param = [
            'tanggal' => $tanggal,
            'type_unit' => $type_unit,
            'lokasi' => $lokasi,
            'type' => $type,
            'start_bd' => $start_bd,
            'rfu' => $rfu,
            'lokasi_rfu' => $lokasi_rfu,
            'standby_status' => $standby_status,
            'remark' => $remark,
            'id' => $id
        ];
        $param = $this->security->xss_clean($param);

        $update = $this->radio->update_breakdown($param);

        if ($update) {
            echo $this->session->set_flashdata('flash', 'inserted');
        }

        redirect('radio/breakdown');
    }

    public function delete_breakdown($id) {
        $delete = $this->radio->delete_breakdown($id);
        if ($delete) {
            echo $this->session->set_flashdata('flash', 'deleted');
        } else {
            echo $this->session->set_flashdata('flash', 'delete failed');
        }
        redirect('radio/breakdown/');
    }

    public function hourly_activity() {
        $this->load->view('Radio/hourly-activity-radio');
    }
}