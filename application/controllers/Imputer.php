<?php
class Imputer extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if($this->session->username == '' && $this->session->id_role != '2'){
            redirect(base_url());
        }

        $this->load->model('M_imputer','imputer');
        $this->load->helper('security');
    }

    public function get_nrp($id) {
        $nrp = $this->imputer->get_nrp($id);
        echo $nrp;
    }

    public function index() {
        $this->load->view('Imputer/dashboard-imputer');
    }

    public function setup() {
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));

        $param = [
            'no_unit' => $no_unit,
            'tgl_aktifitas' => date('Y-m-d')
        ];
        $param = $this->security->xss_clean($param);

        $setup = $this->imputer->setup($param);

        if ($setup) {
            redirect('imputer/edit-daily-activity/'. $no_unit);
        }
    }

    public function daily_activity($no_unit, $tgl_aktifitas) {
        $no_unit = urldecode($this->uri->segment(3));
        $data['no_unit'] = strip_tags(str_replace("'", "", $no_unit));
        $data['tgl_aktifitas'] = strip_tags(str_replace("'", "", $tgl_aktifitas));

        $data['nomor_unit'] = $this->imputer->get_unit($no_unit);

        $isAlreadyExist = $this->imputer->check_activity($no_unit, $tgl_aktifitas);
        if($isAlreadyExist['loader'] == true){
            if($isAlreadyExist['loader2'] == false){
                echo $this->session->set_flashdata('flash', 'not exist loader');
                redirect('imputer/daily-report');
            }
        }
        if ($isAlreadyExist['activity'] == true && $isAlreadyExist['unit_status'] == true) {
            echo $this->session->set_flashdata('flash', 'exist');
            redirect('imputer/daily-report');
        } else {
            $data['operators'] = $this->imputer->get_operator();
            $data['processes'] = $this->imputer->get_proses();
            $data['activities'] = $this->imputer->get_aktifitas();
            $data['unit_types'] = $this->imputer->get_unit_type();
            $data['dt_ton'] = $this->imputer->get_dt_ton();
            $data['loading_point'] = $this->imputer->get_loading_point();
            $data['blocks'] = $this->imputer->get_block();
            $data['stanby_data'] = $this->imputer->get_stanby_master();
            $data['hourly_radio'] = $this->imputer->check_hourly_radio($no_unit, $tgl_aktifitas);
            $data['ritasi'] = $this->imputer->check_ritasi($no_unit, $tgl_aktifitas);
            $data['daily_activity'] = $this->imputer->get_daily_activity($no_unit, $tgl_aktifitas);
            $data['stanby'] = $this->imputer->get_stanby($no_unit, $tgl_aktifitas);
            $data['breakdown'] = $this->imputer->get_breakdown($no_unit, $tgl_aktifitas);
            $data['total_ton'] = $this->imputer->get_total_ton($no_unit, $tgl_aktifitas);
            $this->load->view('Imputer/daily-activity', $data);
            // $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }
    }

    public function edit_daily_activity($no_unit) {
        $data['operators'] = $this->imputer->get_operator();
        $data['processes'] = $this->imputer->get_proses();
        $data['materials'] = $this->imputer->get_material();
        $data['activities'] = $this->imputer->get_aktifitas();
        $data['loaders'] = $this->imputer->get_loader();
        $data['stanby_data'] = $this->imputer->get_stanby_master();
        // $data['latest_activity'] = $this->imputer->get_latest_activity();
        $data['daily_activity'] = $this->imputer->get_daily_activity($no_unit);
        $data['stanby'] = $this->imputer->get_stanby($no_unit);
        $this->load->view('Imputer/edit-daily-activity', $data);   
    }

    public function daily_report() {
        $data['no_unit'] = $this->imputer->get_no_unit();
        $data['processes'] = $this->imputer->get_proses();
        $data['materials'] = $this->imputer->get_material();
        $data['activities'] = $this->imputer->get_aktifitas();
        $data['loaders'] = $this->imputer->get_loader();
        $data['reports'] = $this->imputer->get_daily_report();
        $data['units'] = $this->imputer->get_all_units();
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";die();
        $this->load->view('Imputer/daily-report', $data);
        // $this->output->set_content_type('application/json')->set_output(json_encode($data['reports']));
        
    }

    public function get_total_jam() {
        $jam_awal = strip_tags(str_replace("'", "", $this->input->post('jam_awal')));
        $jam_akhir = strip_tags(str_replace("'", "", $this->input->post('jam_akhir')));
        $time1 = strtotime($jam_awal);
        $time2 = strtotime($jam_akhir);
        $total = date_create($jam_awal)->diff(date_create($jam_akhir))->format('%H:%i');
        $hm = explode(":", $total);
        echo round(($hm[0] + ($hm[1]/60)),2);
    }

    public function save_activity() {
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $nomor_unit = strip_tags(str_replace("'", "", $this->input->post('nomor_unit')));
        $tgl_aktifitas = strip_tags(str_replace("'", "", $this->input->post('tgl_aktifitas')));
        $operator = strip_tags(str_replace("'", "", $this->input->post('operator')));
        $proses = strip_tags(str_replace("'", "", $this->input->post('proses')));
        $aktivitas = strip_tags(str_replace("'", "", $this->input->post('aktivitas')));
        $hm_awal = strip_tags(str_replace("'", "", $this->input->post('hm_awal')));
        $hm_akhir = strip_tags(str_replace("'", "", $this->input->post('hm_akhir')));
        $km_awal = strip_tags(str_replace("'", "", $this->input->post('km_awal')));
        $km_akhir = strip_tags(str_replace("'", "", $this->input->post('km_akhir')));
        $jam_awal = strip_tags(str_replace("'", "", $this->input->post('jam_awal')));
        $jam_akhir = strip_tags(str_replace("'", "", $this->input->post('jam_akhir')));
        $fuel = strip_tags(str_replace("'", "", $this->input->post('fuel')));
        $rata_rata = strip_tags(str_replace("'", "", $this->input->post('rata_rata')));

        $total_hm = (int)$hm_akhir - (int)$hm_awal;
        $total_km = (int)$km_akhir - (int)$km_awal;
        
        $time1 = strtotime($jam_awal);
        $time2 = strtotime($jam_akhir);
        $total_jam = round(abs($time2 - $time1) / 3600,2);

        $param = [
            'id' => $id,
            'id_user' => $this->session->id,
            'id_operator' => $operator,
            'id_proses' => $proses,
            'id_aktifitas' => $aktivitas,
            'tgl_aktifitas' => $tgl_aktifitas,
            'no_unit' => $nomor_unit,
            'hm_awal' => $hm_awal,
            'km_awal' => $km_awal,
            'jm_opt_awal' => $jam_awal,
            'hm_akhir' => $hm_akhir,
            'km_akhir' => $km_akhir,
            'jm_opt_akhir' => $jam_akhir,
            'total_hm' => $total_hm,
            'total_km' => $total_km,
            'total_jm_opt' => $total_jam,
            'fuel' => $fuel,
            'rata_rata' => $rata_rata,
            'create_date' => date('Y-m-d')
        ];
        $param = $this->security->xss_clean($param);

        $insert = $this->imputer->save_activity($param);

        // redirect('imputer');
        $response = array();

        if ($insert != NULL) {
            $response = [
                'success' => true,
                'data' => $insert
            ];
        } else {
            $response = [
                'success' => false,
            ];
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function update_activity() {
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $nomor_unit = strip_tags(str_replace("'", "", $this->input->post('nomor_unit')));
        $operator = strip_tags(str_replace("'", "", $this->input->post('operator')));
        $proses = strip_tags(str_replace("'", "", $this->input->post('proses')));
        $material = strip_tags(str_replace("'", "", $this->input->post('material')));
        $aktivitas = strip_tags(str_replace("'", "", $this->input->post('aktivitas')));
        $hm_awal = strip_tags(str_replace("'", "", $this->input->post('hm_awal')));
        $hm_akhir = strip_tags(str_replace("'", "", $this->input->post('hm_akhir')));
        $km_awal = strip_tags(str_replace("'", "", $this->input->post('km_awal')));
        $km_akhir = strip_tags(str_replace("'", "", $this->input->post('km_akhir')));
        $jam_awal = strip_tags(str_replace("'", "", $this->input->post('jam_awal')));
        $jam_akhir = strip_tags(str_replace("'", "", $this->input->post('jam_akhir')));
        $fuel = strip_tags(str_replace("'", "", $this->input->post('fuel')));
        $rata_rata = strip_tags(str_replace("'", "", $this->input->post('rata_rata')));
        $standby_code = strip_tags(str_replace("'", "", $this->input->post('standby_code')));

        $total_hm = (int)$hm_akhir - (int)$hm_awal;
        $total_km = (int)$km_akhir - (int)$km_awal;
        
        $time1 = strtotime($jam_awal);
        $time2 = strtotime($jam_akhir);
        $total_jam = round(abs($time2 - $time1) / 3600,2);

        $param = [
            'id_operator' => $operator,
            'id_proses' => $proses,
            'id_aktivitas' => $aktivitas,
            'id_material' => $material,
            'hm_awal' => $hm_awal,
            'km_awal' => $km_awal,
            'jm_opt_awal' => $jam_awal,
            'hm_akhir' => $hm_akhir,
            'km_akhir' => $km_akhir,
            'jm_opt_akhir' => $jam_akhir,
            'total_hm' => $total_hm,
            'total_km' => $total_km,
            'total_jm_opt' => $total_jam,
            'fuel' => $fuel,
            'rata_rata' => $rata_rata,
            'id' => $id
        ];
        $param = $this->security->xss_clean($param);

        $update = $this->imputer->update_activity($param, $standby_code, $nomor_unit);

        $response = array();

        if ($update) {
            $response = [
                'success' => true,
            ];
        } else {
            $response = [
                'success' => false,
            ];
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function save_unit_status() {
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
        $tgl_aktifitas = strip_tags(str_replace("'", "", $this->input->post('tgl_aktifitas')));
        $kode_proses = strip_tags(str_replace("'", "", $this->input->post('kode_proses')));
        $kode_aktivitas = strip_tags(str_replace("'", "", $this->input->post('kode_aktivitas')));
        $loader = strip_tags(str_replace("'", "", $this->input->post('loader')));
        $loading_point = strip_tags(str_replace("'", "", $this->input->post('loading_point')));
        $dumping_area = strip_tags(str_replace("'", "", $this->input->post('dumping_area')));
        $jarak = strip_tags(str_replace("'", "", $this->input->post('jarak')));
        $truck_size = strip_tags(str_replace("'", "", $this->input->post('truck_size')));
        $total_ritasi = strip_tags(str_replace("'", "", $this->input->post('total_ritasi')));
        $total_ton = strip_tags(str_replace("'", "", $this->input->post('total_ton')));
        $notes = strip_tags(str_replace("'", "", $this->input->post('notes')));

        $param = [
            'tgl_aktifitas' => $tgl_aktifitas,
            'id_proses' => $kode_proses,
            'id_aktifitas' => $kode_aktivitas,
            'no_unit' => $no_unit,
            'total_ritasi' => $total_ritasi,
            'loader' => $loader,
            'loading_point' => $loading_point,
            'dumping_area' => $dumping_area,
            'jarak' => $jarak,
            'truck_size' => $truck_size,
        ];
        $param = $this->security->xss_clean($param);

        $update = $this->imputer->save_unit_status($param, $total_ton, $notes);

        $response = array();

        if ($update) {
            $response = [
                'success' => true,
            ];
        } else {
            $response = [
                'success' => false,
            ];
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    // public function update_unit_status() {
    //     $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
    //     $loader = strip_tags(str_replace("'", "", $this->input->post('loader')));
    //     $loading_point = strip_tags(str_replace("'", "", $this->input->post('loading_point')));
    //     $dumping_area = strip_tags(str_replace("'", "", $this->input->post('dumping_area')));
    //     $jarak = strip_tags(str_replace("'", "", $this->input->post('jarak')));
    //     $total_ton = strip_tags(str_replace("'", "", $this->input->post('total_ton')));

    //     $param = [
    //         'loader' => $loader,
    //         'loading_point' => $loading_point,
    //         'dumping_area' => $dumping_area,
    //         'jarak' => $jarak,
    //         'no_unit' => $no_unit,
    //         'tgl_aktifitas' => date('Y-m-d')
    //     ];
    //     $param = $this->security->xss_clean($param);

    //     $update = $this->imputer->update_unit_status($param, $total_ton);

    //     $response = array();

    //     if ($update) {
    //         $response = [
    //             'success' => true,
    //         ];
    //     } else {
    //         $response = [
    //             'success' => false,
    //         ];
    //     }

    //     $this->output->set_content_type('application/json')->set_output(json_encode($response));
    // }

    public function update_stanby() {
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
        $tgl_aktifitas = strip_tags(str_replace("'", "", $this->input->post('tgl_aktifitas')));

        $stanby_id = strip_tags(str_replace("'", "", $this->input->post('stanby_id')));
        $standby_code = strip_tags(str_replace("'", "", $this->input->post('standby_code')));
        $start_time_1 = strip_tags(str_replace("'", "", $this->input->post('start_time_1')));
        $start_time_2 = strip_tags(str_replace("'", "", $this->input->post('start_time_2')));
        $start_time_3 = strip_tags(str_replace("'", "", $this->input->post('start_time_3')));
        $start_time_4 = strip_tags(str_replace("'", "", $this->input->post('start_time_4')));
        $end_time_1 = strip_tags(str_replace("'", "", $this->input->post('end_time_1')));
        $end_time_2 = strip_tags(str_replace("'", "", $this->input->post('end_time_2')));
        $end_time_3 = strip_tags(str_replace("'", "", $this->input->post('end_time_3')));
        $end_time_4 = strip_tags(str_replace("'", "", $this->input->post('end_time_4')));
        $keterangan = strip_tags(str_replace("'", "", $this->input->post('keterangan')));
        // $breakdown = strip_tags(str_replace("'", "", $this->input->post('breakdown')));

        // if ($end_time_1 <= $start_time_1 || $end_time_2 <= $start_time_2 || $end_time_3 <= $start_time_3 || $end_time_4 <= $start_time_4) {
            // echo $this->session->set_flashdata('flash', 'invalid time');
        if (($end_time_1 != '00:00' && $end_time_1 != '00:00') && ($end_time_1 <= $start_time_1)) {
            echo $this->session->set_flashdata('flash', 'invalid time');
        } else if (($end_time_2 != '00:00' && $end_time_2 != '00:00') && ($end_time_2 <= $start_time_2)) {
            echo $this->session->set_flashdata('flash', 'invalid time');
        } else if (($end_time_3 != '00:00' && $end_time_3 != '00:00') && ($end_time_3 <= $start_time_3)) {
            echo $this->session->set_flashdata('flash', 'invalid time');
        } else if (($end_time_4 != '00:00' && $end_time_4 != '00:00') && ($end_time_4 <= $start_time_4)) {
            echo $this->session->set_flashdata('flash', 'invalid time');
        } else {
            $param = [
                'standby_code' => $standby_code,
                'start_time_1' => $start_time_1 == '00:00' ? NULL : $start_time_1,
                'start_time_2' => $start_time_2 == '00:00' ? NULL : $start_time_2,
                'start_time_3' => $start_time_3 == '00:00' ? NULL : $start_time_3,
                'start_time_4' => $start_time_4 == '00:00' ? NULL : $start_time_4,
                'end_time_1' => $end_time_1 == '00:00' ? NULL : $end_time_1,
                'end_time_2' => $end_time_2 == '00:00' ? NULL : $end_time_2,
                'end_time_3' => $end_time_3 == '00:00' ? NULL : $end_time_3,
                'end_time_4' => $end_time_4 == '00:00' ? NULL : $end_time_4,
                'keterangan' => $keterangan,
                // 'breakdown' => $breakdown,
                'stanby_id' => $stanby_id,
            ];
            $param = $this->security->xss_clean($param);

            $update = $this->imputer->update_stanby($param);

            echo $this->session->set_flashdata('flash', 'inserted');
        }

        redirect('imputer/daily-activity/'.$no_unit.'/'.$tgl_aktifitas);
    }

    public function save_stanby() {
        $activity = strip_tags(str_replace("'", "", $this->input->post('activity')));
        $stanby_code = strip_tags(str_replace("'", "", $this->input->post('stanby_code')));
        $start_time_1 = strip_tags(str_replace("'", "", $this->input->post('start_time_1')));
        $start_time_2 = strip_tags(str_replace("'", "", $this->input->post('start_time_2')));
        $start_time_3 = strip_tags(str_replace("'", "", $this->input->post('start_time_3')));
        $start_time_4 = strip_tags(str_replace("'", "", $this->input->post('start_time_4')));
        $end_time_1 = strip_tags(str_replace("'", "", $this->input->post('end_time_1')));
        $end_time_2 = strip_tags(str_replace("'", "", $this->input->post('end_time_2')));
        $end_time_3 = strip_tags(str_replace("'", "", $this->input->post('end_time_3')));
        $end_time_4 = strip_tags(str_replace("'", "", $this->input->post('end_time_4')));
        $keterangan = strip_tags(str_replace("'", "", $this->input->post('keterangan')));
        // $breakdown = strip_tags(str_replace("'", "", $this->input->post('breakdown')));

        // if ($end_time_1 <= $start_time_1 || $end_time_2 < $start_time_2 || $end_time_3 < $start_time_3 || $end_time_4 < $start_time_4) {
        //     $response = [
        //         'success' => false,
        //         'message' => 'End time must be greater than start time'
        //     ];
        if (($end_time_1 != '00:00' && $end_time_1 != '00:00') && ($end_time_1 <= $start_time_1)) {
            $response = [
                'success' => false,
                'message' => 'End time must be greater than start time'
            ];
        } else if (($end_time_2 != '' && $end_time_2 != '') && ($end_time_2 <= $start_time_2)) {
            $response = [
                'success' => false,
                'message' => 'End time must be greater than start time'
            ];
        } else if (($end_time_3 != '' && $end_time_3 != '') && ($end_time_3 <= $start_time_3)) {
            $response = [
                'success' => false,
                'message' => 'End time must be greater than start time'
            ];
        } else if (($end_time_4 != '' && $end_time_4 != '') && ($end_time_4 <= $start_time_4)) {
            $response = [
                'success' => false,
                'message' => 'End time must be greater than start time'
            ];
        } else {

            $param = [
                'activity' => $activity,
                'stanby_code' => $stanby_code,
                'start_time_1' => $start_time_1 == '00:00' ? NULL : $start_time_1,
                'start_time_2' => $start_time_2 == '00:00' ? NULL : $start_time_2,
                'start_time_3' => $start_time_3 == '00:00' ? NULL : $start_time_3,
                'start_time_4' => $start_time_4 == '00:00' ? NULL : $start_time_4,
                'end_time_1' => $end_time_1 == '00:00' ? NULL : $end_time_1,
                'end_time_2' => $end_time_2 == '00:00' ? NULL : $end_time_2,
                'end_time_3' => $end_time_3 == '00:00' ? NULL : $end_time_3,
                'end_time_4' => $end_time_4 == '00:00' ? NULL : $end_time_4,
                'keterangan' => $keterangan,
                // 'breakdown' => $breakdown,
            ];
            $param = $this->security->xss_clean($param);

            $save = $this->imputer->save_stanby($param);

            $response = array();

            if ($save) {
                $response = [
                    'success' => true,
                ];
            } else {
                $response = [
                    'success' => false,
                ];
            }
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function delete_stanby($id, $no_unit, $tgl_aktifitas) {
        $id = strip_tags(str_replace("'", "", $id));
        $param = [
            'id' => $id
        ];
        $param = $this->security->xss_clean($param);

        $delete = $this->imputer->delete_stanby($param);
        
        echo $this->session->set_flashdata('flash', 'inserted');
        redirect('imputer/daily-activity/'. $no_unit .'/'. $tgl_aktifitas);
    }



    // BREAKDOWN STATUS
    public function update_breakdown() {
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
        $tgl_aktifitas = strip_tags(str_replace("'", "", $this->input->post('tgl_aktifitas')));

        $breakdown_id = strip_tags(str_replace("'", "", $this->input->post('breakdown_id')));
        $breakdown_status = strip_tags(str_replace("'", "", $this->input->post('breakdown_status')));
        $start_time_1 = strip_tags(str_replace("'", "", $this->input->post('start_time_1')));
        $start_time_2 = strip_tags(str_replace("'", "", $this->input->post('start_time_2')));
        $start_time_3 = strip_tags(str_replace("'", "", $this->input->post('start_time_3')));
        $start_time_4 = strip_tags(str_replace("'", "", $this->input->post('start_time_4')));
        $end_time_1 = strip_tags(str_replace("'", "", $this->input->post('end_time_1')));
        $end_time_2 = strip_tags(str_replace("'", "", $this->input->post('end_time_2')));
        $end_time_3 = strip_tags(str_replace("'", "", $this->input->post('end_time_3')));
        $end_time_4 = strip_tags(str_replace("'", "", $this->input->post('end_time_4')));
        $keterangan = strip_tags(str_replace("'", "", $this->input->post('keterangan')));

        // if ($end_time_1 <= $start_time_1 || $end_time_2 <= $start_time_2 || $end_time_3 <= $start_time_3 || $end_time_4 <= $start_time_4) {
        //     echo $this->session->set_flashdata('flash', 'invalid time');
        if (($end_time_1 != '00:00' && $end_time_1 != '00:00') && ($end_time_1 <= $start_time_1)) {
            echo $this->session->set_flashdata('flash', 'invalid time');
        } else if (($end_time_2 != '00:00' && $end_time_2 != '00:00') && ($end_time_2 <= $start_time_2)) {
            echo $this->session->set_flashdata('flash', 'invalid time');
        } else if (($end_time_3 != '00:00' && $end_time_3 != '00:00') && ($end_time_3 <= $start_time_3)) {
            echo $this->session->set_flashdata('flash', 'invalid time');
        } else if (($end_time_4 != '00:00' && $end_time_4 != '00:00') && ($end_time_4 <= $start_time_4)) {
            echo $this->session->set_flashdata('flash', 'invalid time');
        } else {
            $param = [
                'breakdown_status' => $breakdown_status,
                'start_time_1' => $start_time_1 == '00:00' ? NULL : $start_time_1,
                'start_time_2' => $start_time_2 == '00:00' ? NULL : $start_time_2,
                'start_time_3' => $start_time_3 == '00:00' ? NULL : $start_time_3,
                'start_time_4' => $start_time_4 == '00:00' ? NULL : $start_time_4,
                'end_time_1' => $end_time_1 == '00:00' ? NULL : $end_time_1,
                'end_time_2' => $end_time_2 == '00:00' ? NULL : $end_time_2,
                'end_time_3' => $end_time_3 == '00:00' ? NULL : $end_time_3,
                'end_time_4' => $end_time_4 == '00:00' ? NULL : $end_time_4,
                'keterangan' => $keterangan,
                'breakdown_id' => $breakdown_id,
            ];
            $param = $this->security->xss_clean($param);

            $update = $this->imputer->update_breakdown($param);

            echo $this->session->set_flashdata('flash', 'inserted');
        }

        redirect('imputer/daily-activity/'.$no_unit.'/'.$tgl_aktifitas);
    }

    public function save_breakdown() {
        $activity = strip_tags(str_replace("'", "", $this->input->post('activity')));
        $breakdown_status = strip_tags(str_replace("'", "", $this->input->post('breakdown_status')));
        $start_time_1 = strip_tags(str_replace("'", "", $this->input->post('start_time_1')));
        $start_time_2 = strip_tags(str_replace("'", "", $this->input->post('start_time_2')));
        $start_time_3 = strip_tags(str_replace("'", "", $this->input->post('start_time_3')));
        $start_time_4 = strip_tags(str_replace("'", "", $this->input->post('start_time_4')));
        $end_time_1 = strip_tags(str_replace("'", "", $this->input->post('end_time_1')));
        $end_time_2 = strip_tags(str_replace("'", "", $this->input->post('end_time_2')));
        $end_time_3 = strip_tags(str_replace("'", "", $this->input->post('end_time_3')));
        $end_time_4 = strip_tags(str_replace("'", "", $this->input->post('end_time_4')));
        $keterangan = strip_tags(str_replace("'", "", $this->input->post('keterangan')));
        // $breakdown = strip_tags(str_replace("'", "", $this->input->post('breakdown')));

        // if ($end_time_1 <= $start_time_1 || $end_time_2 <= $start_time_2 || $end_time_3 <= $start_time_3 || $end_time_4 <= $start_time_4) {
        //     $response = [
        //         'success' => false,
        //         'message' => 'End time must be greater than start time'
        //     ];
        if (($end_time_1 != '00:00' && $end_time_1 != '00:00') && ($end_time_1 <= $start_time_1)) {
            $response = [
                'success' => false,
                'message' => 'End time must be greater than start time'
            ];
        } else if (($end_time_2 != '' && $end_time_2 != '') && ($end_time_2 <= $start_time_2)) {
            $response = [
                'success' => false,
                'message' => 'End time must be greater than start time'
            ];
        } else if (($end_time_3 != '' && $end_time_3 != '') && ($end_time_3 <= $start_time_3)) {
            $response = [
                'success' => false,
                'message' => 'End time must be greater than start time'
            ];
        } else if (($end_time_4 != '' && $end_time_4 != '') && ($end_time_4 <= $start_time_4)) {
            $response = [
                'success' => false,
                'message' => 'End time must be greater than start time'
            ];
        } else {

            $param = [
                'activity' => $activity,
                'breakdown_status' => $breakdown_status,
                'start_time_1' => $start_time_1 == '00:00' ? NULL : $start_time_1,
                'start_time_2' => $start_time_2 == '00:00' ? NULL : $start_time_2,
                'start_time_3' => $start_time_3 == '00:00' ? NULL : $start_time_3,
                'start_time_4' => $start_time_4 == '00:00' ? NULL : $start_time_4,
                'end_time_1' => $end_time_1 == '00:00' ? NULL : $end_time_1,
                'end_time_2' => $end_time_2 == '00:00' ? NULL : $end_time_2,
                'end_time_3' => $end_time_3 == '00:00' ? NULL : $end_time_3,
                'end_time_4' => $end_time_4 == '00:00' ? NULL : $end_time_4,
                'keterangan' => $keterangan,
            ];
            $param = $this->security->xss_clean($param);

            $save = $this->imputer->save_breakdown($param);

            $response = array();

            if ($save) {
                $response = [
                    'success' => true,
                ];
            } else {
                $response = [
                    'success' => false,
                ];
            }
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function delete_breakdown($id, $no_unit, $tgl_aktifitas) {
        $id = strip_tags(str_replace("'", "", $id));
        $param = [
            'id' => $id
        ];
        $param = $this->security->xss_clean($param);

        $delete = $this->imputer->delete_breakdown($param);
        
        echo $this->session->set_flashdata('flash', 'inserted');
        redirect('imputer/daily-activity/'. $no_unit .'/'. $tgl_aktifitas);
    }



    public function update_daily_report() {
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('no_unit')));
        $id_proses = strip_tags(str_replace("'", "", $this->input->post('proses')));
        $id_aktifitas = strip_tags(str_replace("'", "", $this->input->post('aktifitas')));
        $material = strip_tags(str_replace("'", "", $this->input->post('material')));
        $loader = strip_tags(str_replace("'", "", $this->input->post('loader')));
        $loading_point = strip_tags(str_replace("'", "", $this->input->post('loading_point')));
        $dumping_area = strip_tags(str_replace("'", "", $this->input->post('dumping_area')));
        $total_ritasi = strip_tags(str_replace("'", "", $this->input->post('total_ritasi')));
        $jarak = strip_tags(str_replace("'", "", $this->input->post('jarak')));

        $param = [
            'no_unit' => $no_unit,
            'id_proses' => $id_proses,
            'id_aktifitas' => $id_aktifitas,
            'id_material' => $material,
            'loader' => $loader,
            'loading_point' => $loading_point,
            'dumping_area' => $dumping_area,
            'total_ritasi' => $total_ritasi,
            'jarak' => $jarak,
            'id' => $id,
        ];
        $param = $this->security->xss_clean($param);

        $update = $this->imputer->update_daily_report($param);

        redirect('imputer/daily');
    }

    public function delete_daily_report($id) {
        $id = strip_tags(str_replace("'", "", $id));
        $param = [
            'id' => $id
        ];
        $param = $this->security->xss_clean($param);

        $delete = $this->imputer->delete_daily_report($param);

        echo $this->session->set_flashdata('flash', 'inserted');
        redirect('imputer/daily-report');
    }

    public function ritasi($no_unit, $tgl_aktifitas) {
        $no_unit = urldecode($this->uri->segment(3));
        $param = [
            'no_unit' => $this->security->xss_clean($no_unit),
            'tgl_aktifitas' => $this->security->xss_clean($tgl_aktifitas),
        ];
        $data['isLoader'] = $this->imputer->check_is_loader($param);
        $data['ritasi'] = $this->imputer->get_activity_ritasi($param);
        $data['no_unit'] = $no_unit;
        $data['tgl_aktifitas'] = $tgl_aktifitas;
        $data['materials'] = $this->imputer->get_material();
        $this->load->view('Imputer/edit-ritasi', $data);
    }

    public function save_ritasi() {
        // $id_activity = strip_tags(str_replace("'", "", $this->input->post('id_activity')));
        $tgl_aktifitas = strip_tags(str_replace("'", "", $this->input->post('tgl_aktifitas')));
        $no_unit = strip_tags(str_replace("'", "", $this->input->post('nomor_unit')));
        $times = $this->input->post('time');
        $materials = $this->input->post('material');
        $totals = $this->input->post('total');

        $param['no_unit'] = $no_unit;

        for ($i = 1; $i <= 24; $i++) {
            $indexTime = 'time_'.$i;
            $param[$indexTime] = $times[$i - 1];
            $param2[$indexTime] = $times[$i - 1];
        }

        for ($i = 1; $i <= 24; $i++) {
            $indexMaterial = 'mat_'.$i;
            $param[$indexMaterial] = $materials[$i - 1];
            $param2[$indexMaterial] = $materials[$i - 1];
        }

        $total_utama = 0;
        $total_ton = 0;

        for ($i = 1; $i <= 24; $i++) {  
            $indexTotal = 'total_'.$i;
            $param[$indexTotal] = $totals[$i - 1];
            $param2[$indexTotal] = $totals[$i - 1];
            
            $total_utama += (int) $totals[$i - 1];

            if ($materials[$i - 1] != NULL && $totals[$i - 1] != NULL) {
                $qty = $this->imputer->get_material_qty($materials[$i - 1]);
                $total_ton_hourly = (float) $qty * (float) $totals[$i - 1];

                $total_ton += $total_ton_hourly;
            }
        }

        $param['total_utama'] = $total_utama;
        $param['tgl_aktifitas'] = $tgl_aktifitas;
        // $param['tgl_aktifitas'] = date('Y-m-d');

        $param2['total_utama'] = $total_utama;
        $param2['no_unit'] = $no_unit;
        $param2['tgl_aktifitas'] = $tgl_aktifitas;
        // $param2['tgl_aktifitas'] = date('Y-m-d');

        $save = $this->imputer->save_ritasi($param, $param2, $total_ton);

        echo $this->session->set_flashdata('flash', 'inserted');
        redirect('imputer/daily-activity/'. $no_unit .'/'. $tgl_aktifitas);
    }

}