<?php
class M_radio extends CI_Model{

    public function get_unit_admin(){
        $sql = "SELECT id, no_unit FROM unit WHERE type_unit = 1 ORDER BY id DESC";
        $res = $this->db->query($sql)->result();

        $data = array();
        foreach ($res as $row){
            $data['unit'][] = $row->no_unit;
        }
        return $data;
    }
    public function get_all_units() {
      $sql = "SELECT id, no_unit FROM unit ORDER BY id DESC";
      $query = $this->db->query($sql)->result_array();

      return $query;
    }

    public function get_unit($id) {
      $sql = "SELECT no_unit, type_unit FROM unit WHERE id = ?";
      $query = $this->db->query($sql, [$id])->row_array();

      return $query;
    }

    public function get_no_unit($no_unit) {
        $sql = "SELECT no_unit FROM hourly_radio WHERE no_unit = ?";
        $query = $this->db->query($sql, array($no_unit));

        return $query->result_array();
    }

    public function get_block_hourly(){
        $sql = "SELECT * FROM block";
        $res = $this->db->query($sql);

        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['nama'][] = $row->nama;
        }

        return $data;
    }

    public function get_type_unit_hourly(){
        $sql = "SELECT * FROM type_unit";
        $res = $this->db->query($sql);

        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['nama'][] = $row->nama;
        }

        return $data;
    }

    public function get_dt_ton_hourly(){
        $sql = "SELECT * FROM dt_ton";
        $res = $this->db->query($sql);

        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['nama'][] = $row->nama;
        }

        return $data;
    }

    public function get_material_hourly(){
        $sql = "SELECT * FROM material";
        $res = $this->db->query($sql);

        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['kode'][] = $row->kode;
        }

        return $data;
    }

    public function get_operator_hourly(){
        $sql = "SELECT * FROM operator";
        $res = $this->db->query($sql);

        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['nama'][] = $row->first_name.' '.$row->last_name;
        }

        return $data;
    }

    public function get_standby_code2(){
        $sql = "SELECT * FROM stanby";
        $res = $this->db->query($sql);

        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['nama'][] = $row->kode;
        }

        return $data;
    }

    public function get_no_unit_hourly($no_unit){
      $sql = "SELECT b.nama AS type_unit, c.nama AS block, d.nama AS dt_ton, a.id, a.tgl_aktifitas AS Date, a.no_unit, a.work, a.remark, a.problem, e.first_name, e.last_name, a.status FROM hourly_radio a JOIN type_unit b ON b.id = a.id_type_unit JOIN block c ON b.id = a.id_block JOIN dt_ton d ON d.id = a.id_dt_ton JOIN operator e ON e.id = a.operator WHERE no_unit = ? ORDER BY a.id DESC";
      $res = $this->db->query($sql, array($no_unit));
      $data = array();

      foreach ($res->result() as $row) {
        $data['id'][] = $row->id;
        $data['type_unit'][] = $row->type_unit;
        $data['block'][] = $row->block;
        $data['dt_ton'][] = $row->dt_ton;
        $data['date'][] = date('d-F-Y', strtotime($row->Date));
        $data['no_unit'][] = $row->no_unit;
        $data['work'][] = $row->work;
        $data['remark'][] = $row->remark;
        $data['problem'][] = $row->problem;
        $data['operator'][] = $row->first_name.' '.$row->last_name;
        $data['status'][] = $row->status;
      }

      return $data;
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";die();
    }

    public function create_data_radio($data){

      $tgl_aktifitas = $data['tgl_aktifitas'];
      $no_unit = $data['no_unit'];

      $sql = "SELECT * FROM hourly_radio WHERE no_unit = ? AND tgl_aktifitas = ?";
      $res = $this->db->query($sql, array($no_unit, $tgl_aktifitas))->result_array();

      if(count($res) > 0){
          return FALSE;
      }else{
          $this->db->insert('hourly_radio', $data);
          return TRUE;  
      }
    }

    public function create_ritase($data){
        $this->db->insert('ritasi', $data);
        return TRUE;  
    }

    public function get_data_radio_detail($id){
      $sql = "SELECT * FROM hourly_radio WHERE id = ?";
      $res = $this->db->query($sql, array($id));
      return $res->result_array();  
    }

    public function get_ritasi_json_detail($no_unit, $tgl_aktifitas){
      $shift = $this->session->shift;

      if($this->session->id_role == '2'){
        $sql = "SELECT * FROM ritasi WHERE no_unit = ? AND tgl_aktifitas = ?";
        $res = $this->db->query($sql, array($no_unit, $tgl_aktifitas));
        return $res->result_array();
      }
      else if($shift == '1'){
        $sql = "SELECT time_1, time_2, time_3, time_4, time_5, time_6, time_7, time_8, time_9, time_10, time_11, time_12, time_13, mat_1, mat_2, mat_3, mat_4, mat_5, mat_6, mat_7, mat_8, mat_9, mat_10, mat_11, mat_12, mat_13, total_1, total_2, total_3, total_4, total_5, total_6, total_7, total_8, total_9, total_10, total_11, total_12, total_13, work_1, work_2, work_3, work_4, work_5, work_6, work_7, work_8, work_9, work_10, work_11, work_12, work_13, remark_1, remark_2, remark_3, remark_4, remark_5, remark_6, remark_7, remark_8, remark_9, remark_10, remark_11, remark_12, remark_13, problem_1, problem_2, problem_3, problem_4, problem_5, problem_6, problem_7, problem_8, problem_9, problem_10, problem_11, problem_12, problem_13 FROM ritasi WHERE no_unit = ? AND tgl_aktifitas = ?";
        $res = $this->db->query($sql, array($no_unit, $tgl_aktifitas));
        return $res->result_array();
      }else if($shift == '2'){
        $sql = "SELECT time_13 AS time_1, time_14 AS time_2, time_15 AS time_3, time_16 AS time_4, time_17 AS time_5, time_18 AS time_6, time_19 AS time_7, time_20 AS time_8, time_21 AS time_9, time_22 AS time_10, time_23 AS time_11, time_24 AS time_12, time_1 AS time_13, mat_13 AS mat_1, mat_14 AS mat_2, mat_15 AS mat_3, mat_16 AS mat_4, mat_17 AS mat_5, mat_18 AS mat_6, mat_19 AS mat_7, mat_20 AS mat_8, mat_21 AS mat_9, mat_22 AS mat_10, mat_23 AS mat_11, mat_24 AS mat_12, mat_1 AS mat_13, total_13 AS total_1, total_14 AS total_2, total_15 AS total_3, total_16 AS total_4, total_17 AS total_5, total_18 AS total_6, total_19 AS total_7, total_20 AS total_8, total_21 AS total_9, total_22 AS total_10, total_23 AS total_11, total_24 AS total_12, total_1 AS total_13, work_13 AS work_1, work_14 AS work_2, 
        work_15 AS work_3, work_16 AS work_4, work_17 AS work_5, work_18 AS work_6, work_19 AS work_7, work_20 AS work_8, work_21 AS work_9, work_22 AS work_10, work_23 AS work_11, work_24 AS work_12, work_1 AS work_13, remark_13 AS remark_1, remark_14 AS remark_2, remark_15 AS remark_3, remark_16 AS remark_4, 
        remark_17 AS remark_5, remark_18 AS remark_6, remark_19 AS remark_7, remark_20 AS remark_8, remark_21 AS remark_9, remark_22 AS remark_10, remark_23 AS remark_11, remark_24 AS remark_12, remark_1 AS remark_13, 
        problem_13 AS problem_1, problem_14 AS problem_2, problem_15 AS problem_3, problem_16 AS problem_4, problem_17 AS problem_5, problem_18 AS problem_6, problem_19 AS problem_7, problem_20 AS problem_8, problem_21 AS problem_9, problem_22 AS problem_10, problem_23 AS problem_11, problem_24 AS problem_12, problem_1 AS problem_13 FROM ritasi WHERE no_unit = ? AND tgl_aktifitas = ?";
        $res = $this->db->query($sql, array($no_unit, $tgl_aktifitas));
        return $res->result_array();
      }
    }

    public function get_type_unit_json(){
      $sql = "SELECT * FROM type_unit";
      $res = $this->db->query($sql);
      return $res->result_array();
    }

    public function get_block_json(){
      $sql = "SELECT * FROM block";
      $res = $this->db->query($sql);
      return $res->result_array();
    }

    public function get_remark_json(){
      $sql = "SELECT * FROM stanby";
      $res = $this->db->query($sql);
      return $res->result_array();
    }

    public function get_operator_json(){
      $sql = "SELECT * FROM operator";
      $res = $this->db->query($sql);
      return $res->result_array();
    }

    public function get_dt_json(){
      $sql = "SELECT * FROM dt_ton";
      $res = $this->db->query($sql);
      return $res->result_array();
    }

    public function get_material_json(){
      $sql = "SELECT * FROM material";
      $res = $this->db->query($sql);
      return $res->result_array();
    }

    public function update_data_radio($data, $id){
      $this->db->where('id', $id);
      $this->db->update('hourly_radio', $data);
      return TRUE;
    }

    public function get_total_ritase($no_unit, $tgl_aktifitas){
      $shift = $this->session->shift;

      if($shift == '2'){
        $sql = "SELECT total_1, total_2, total_3, total_4, total_5, total_6, total_7, total_8, total_9, total_10, total_11, total_12 FROM ritasi WHERE no_unit = ? AND tgl_aktifitas = ?";
        $res = $this->db->query($sql, array($no_unit, $tgl_aktifitas))->result_array();

        $total_1 = $res[0]['total_1'];
        $total_2 = $res[0]['total_2'];
        $total_3 = $res[0]['total_3'];
        $total_4 = $res[0]['total_4'];
        $total_5 = $res[0]['total_5'];
        $total_6 = $res[0]['total_6'];
        $total_7 = $res[0]['total_7'];
        $total_8 = $res[0]['total_8'];
        $total_9 = $res[0]['total_9'];
        $total_10 = $res[0]['total_10'];
        $total_11 = $res[0]['total_11'];
        $total_12 = $res[0]['total_12'];

        $total_utama_sbl = intval($total_1) + intval($total_2) + intval($total_3) +intval($total_4) + intval($total_5) + intval($total_6) + intval($total_7) + intval($total_8) + intval($total_9) +  intval($total_10) + intval($total_11) + intval($total_12);

        return $total_utama_sbl;

        
      }else{
        $sql = "SELECT total_13 AS total_1, total_14 AS total_2, total_15 AS total_3, total_16 AS total_4, total_17 AS total_5, total_18 AS total_6, total_19 AS total_7, total_20 AS total_8, total_21 AS total_9, total_22 AS total_10, total_23 AS total_11, total_24 AS total_12 FROM ritasi WHERE no_unit = ? AND tgl_aktifitas = ?";
        $res = $this->db->query($sql, array($no_unit, $tgl_aktifitas))->result_array();

        $total_1 = $res[0]['total_1'];
        $total_2 = $res[0]['total_2'];
        $total_3 = $res[0]['total_3'];
        $total_4 = $res[0]['total_4'];
        $total_5 = $res[0]['total_5'];
        $total_6 = $res[0]['total_6'];
        $total_7 = $res[0]['total_7'];
        $total_8 = $res[0]['total_8'];
        $total_9 = $res[0]['total_9'];
        $total_10 = $res[0]['total_10'];
        $total_11 = $res[0]['total_11'];
        $total_12 = $res[0]['total_12'];

        $total_utama_sbl = intval($total_1) + intval($total_2) + intval($total_3) +intval($total_4) + intval($total_5) + intval($total_6) + intval($total_7) + intval($total_8) + intval($total_9) +  intval($total_10) + intval($total_11) + intval($total_12);

        return $total_utama_sbl;

      }  
    }

    public function update_ritase($data, $no_unit, $tgl_aktifitas){
      $this->db->where('no_unit', $no_unit);
      $this->db->where('tgl_aktifitas', $tgl_aktifitas);
      $this->db->update('ritasi', $data);
      return TRUE;
    }

    public function delete_data_radio($id){
      $sql = "SELECT * FROM hourly_radio WHERE id = ?";
      $res = $this->db->query($sql, array($id))->result_array();

      $no_unit = $res[0]['no_unit'];
      $tgl_aktifitas = $res[0]['tgl_aktifitas'];

      $sql2 = "DELETE FROM ritasi WHERE no_unit = ? AND tgl_aktifitas = ?";
      $res2 = $this->db->query($sql2, array($no_unit, $tgl_aktifitas));          

      $this->db->where('id', $id);
      $this->db->delete('hourly_radio');
      return TRUE;
  
    }

    public function confirm_data_radio($id, $no_unit){
      $sql = "UPDATE hourly_radio SET status = 'VERIFIED' WHERE id = ? AND no_unit = ?";
      $res = $this->db->query($sql, array($id, $no_unit));
      return $res;
    }

    public function get_no_unit_breakdown() {
        $sql = "SELECT no_unit FROM breakdown_radio WHERE tgl_aktifitas = ? ORDER BY no_unit DESC";
        $query = $this->db->query($sql, array(date('Y-m-d')))->row_array();

        if ($query != NULL) {
            $next_unit = (int) $query['no_unit'] + 1;
        } else {
            $next_unit = 1;
        }

        return $next_unit;
    }

    public function setup($param)
    {
        $sql = "INSERT INTO hourly_radio (tgl_aktifitas, no_unit, created_date) VALUES (?,?,?,NOW())";
        $query = $this->db->query($sql, array($this->session->id, $param['tgl_aktifitas'], $param['no_unit']));

        $inserted_id = $this->db->insert_id();

        $sql2 = "INSERT INTO ritasi (id_activity) VALUES (?)";
        $query2 = $this->db->query($sql2, array($inserted_id));

        $sql3 = "INSERT INTO unit_status (tgl_aktifitas, no_unit) VALUES (?,?)";
        $query3 = $this->db->query($sql3, array($param['tgl_aktifitas'],$param['no_unit']));

        return $query3;
    }

    public function get_block($id)
    {
        $sql = "SELECT nama FROM block WHERE id = ?";
        $query = $this->db->query($sql, array($id))->row_array();

        return $query['nama'];
    }

    public function get_operator()
    {
        $sql = "SELECT id, nrp, first_name, last_name FROM operator ORDER BY first_name ASC";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    // public function get_type_unit()
    // {
    //     $sql = "SELECT nama FROM type_unit WHERE id = ?";
    //     $query = $this->db->query($sql, array($id))->row_array();

    //     return $query['nama'];
    // }

    public function get_type_unit()
    {
        $sql = "SELECT * FROM type_unit";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_material(){
        $sql = "SELECT kode FROM material WHERE id = ?";
        $query = $this->db->query($sql, array($id))->row_array();

        return $query['kode'];
    }

    public function get_dt(){
        $sql = "SELECT nama FROM dt_ton WHERE id = ?";
        $query = $this->db->query($sql, array($id))->row_array();

        return $query['nama'];
    }

    public function save_radio_hourly($param, $no_unit){
     $sql = "INSERT INTO hourly_radio (tgl_aktifitas, id_type_unit, id_block, id_dt_ton, no_unit, work, remark, problem, operator, n_rit, n_rit_time, mat) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
     $query = $this->db->query($sql, $param);

     return $query;
    }

    public function get_radio_hourly(){
      $sql = "SELECT a.id, a.tgl_aktifitas AS Date, a.no_unit AS NoUnit, a.status, b.nama as DT, c.first_name, c.last_name, a.created_date FROM hourly_radio a JOIN dt_ton b ON b.id = a.id_dt_ton JOIN operator c ON c.id = a.operator";
      $res = $this->db->query($sql);
      $data = array();
  
      foreach ($res->result() as $row) {
        $data['id'][] = $row->id;
        $data['created_date'][]=  date('d-F-Y', strtotime($row->created_date));
        $data['date'][] = date('d-F-Y', strtotime($row->Date));
        $data['no_unit'][] = $row->NoUnit;
        $data['dt'][] = $row->DT;
        $data['operator'][] = $row->first_name.' '.$row->last_name;
        $data['status'][] = $row->status;
      }
     return $data;
    }

    public function get_standby_code() {
      $sql = "SELECT * FROM stanby";
      $query = $this->db->query($sql)->result_array();

      return $query;
    }

    public function get_breakdown() {
      $sql = "SELECT a.id, a.tgl_aktifitas, a.no_unit, b.nama, a.lokasi, b.nama AS type_unit, a.start_bd, a.rfu, a.lokasi_rfu, a.standby_status, a.remark, c.no_unit AS Nomor_Unit FROM breakdown_radio a JOIN type_unit b ON b.id = a.id_type_unit JOIN unit c ON c.id = a.no_unit";
      $query = $this->db->query($sql)->result_array();

      return $query;
    }

    public function get_breakdown_by_id($id) {
      $sql = "SELECT a.*, b.no_unit AS Nomor_Unit FROM breakdown_radio a JOIN unit b ON b.id = a.no_unit WHERE a.id = ? LIMIT 1";
      $query = $this->db->query($sql, array($id))->row_array();

      return $query;
    }

    public function save_breakdown($param) {
      $sql = "INSERT INTO breakdown_radio (tgl_aktifitas, id_type_unit, no_unit, lokasi, type, start_bd, rfu, lokasi_rfu, standby_status, remark) VALUES (?,?,?,?,?,?,?,?,?,?)";
      $query = $this->db->query($sql, $param);

      return $query;
    }

    public function update_breakdown($param) {
      $sql = "UPDATE breakdown_radio SET tgl_aktifitas = ?, id_type_unit = ?, lokasi = ?, type = ?, start_bd = ?, rfu = ?, lokasi_rfu = ?, standby_status = ?, remark = ? WHERE id = ?";
      $query = $this->db->query($sql, $param);

      return $query;
    }

    public function delete_breakdown($id) {
      $sql = "DELETE FROM breakdown_radio WHERE id = ?";
      $query = $this->db->query($sql, array($id));

      return $query;
    }

    public function check_is_loader($no_unit) {
      $sql = "SELECT id FROM hourly_radio WHERE no_unit = ?";
      $query = $this->db->query($sql, array($no_unit))->row_array();

      if ($query != NULL) {
        return true;
      } else {
        return false;
      }
    }

    public function get_breakdown_by_no_unit($no_unit) {
      $sql = "SELECT * FROM breakdown_radio WHERE no_unit = ? LIMIT 1";
      $query = $this->db->query($sql, array($no_unit))->row_array();

      return $query;
    }
}