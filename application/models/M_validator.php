<?php
class M_validator extends CI_Model {

	public function get_activity(){
		// $sql = "SELECT a.no_unit AS Unit, b.kode AS Proses, c.kode AS Aktivitas, a.loading_point as LoadingPoint, a.dumping_area as DumpingArea, a.total_ritasi AS TotalRitasi, a.status AS Status FROM unit_status a JOIN proses b ON b.id = a.id_proses JOIN aktifitas c ON c.id = a.id_aktifitas";
		$sql = "SELECT a.id, a.tgl_aktifitas, a.no_unit AS Unit, a.id_proses, a.id_aktifitas, a.loader AS id_loader, a.jarak AS Jarak, b.kode AS Proses, c.kode AS Aktivitas, a.loading_point as LoadingPoint, a.dumping_area as DumpingArea, a.total_ritasi AS TotalRitasi, a.status AS Status, e.nama AS Loader 
            FROM unit_status a 
            LEFT JOIN proses b ON b.id = a.id_proses 
            LEFT JOIN aktifitas c ON c.id = a.id_aktifitas 
            LEFT JOIN loader e ON e.id = a.loader
            -- WHERE a.tgl_aktifitas = ?
            ORDER BY a.id DESC";
		// $res = $this->db->query($sql, array(date('Y-m-d')));
		$res = $this->db->query($sql);
		$data = array();

		foreach ($res->result() as $row) {
			$data['unit'][] = $row->Unit;
			$data['proses'][] = $row->Proses;
			$data['aktivitas'][] = $row->Aktivitas;
			$data['loading_point'][] = $row->LoadingPoint;
			$data['dumping_area'][] = $row->DumpingArea;
			$data['total_ritasi'][] = $row->TotalRitasi;
			$data['status'][] = $row->Status;
		}
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";die();
		return $data;
	}

	public function get_unit_status($unit){
		$sql = "SELECT b.kode AS name_proses, c.kode AS name_aktifitas, a.loader, a.loading_point, a.dumping_area, a.jarak, a.tgl_aktifitas, a.no_unit, a.status 
			FROM unit_status a JOIN proses b ON b.id = a.id_proses JOIN aktifitas c ON c.id = a.id_aktifitas WHERE a.no_unit = ?";
		$res = $this->db->query($sql, array($unit));
		return $res->result_array();
	}

	public function get_operator_information($unit){
		$sql = "SELECT b.nrp, a.tgl_aktifitas, a.total_jm_opt, a.total_hm, a.total_km, a.total_ritasi, a.total_ton, b.first_name, b.last_name FROM activity a JOIN operator b ON b.id = a.id_operator WHERE a.no_unit = ?";
		$res = $this->db->query($sql, array($unit));
		return $res->result_array();
	}

	public function get_imputer_information($unit){
		$sql = "SELECT b.nrp , a.tgl_aktifitas, a.jm_opt_awal, b.name FROM activity a JOIN user b ON b.id = a.id_user WHERE a.no_unit = ?";
		$res = $this->db->query($sql, array($unit));
		return $res->result_array();
	}

	public function get_standby_status($unit){
		$sql = "SELECT b.kode AS Standby, a.start_time_1 AS StartTime1, a.start_time_2 AS StartTime2, a.start_time_3 AS StartTime3, a.start_time_4 AS StartTime4, a.end_time_1 AS EndTime1, a.end_time_2 AS EndTime2, a.end_time_3 AS EndTime3, a.end_time_4 AS EndTime4, a.keterangan AS Keterangan FROM stanby_status a JOIN stanby b ON b.id = a.id_stanby JOIN activity c ON c.id = a.id_activity WHERE c.no_unit = ? 
		";
		$res = $this->db->query($sql, array($unit));
		$data = array();

		foreach ($res->result() as $row) {
			$data['standby'][] = $row->Standby;
			$data['time_1'][] = date('H:i', strtotime($row->StartTime1)).'-'.date('H:i', strtotime($row->EndTime1));
			$data['time_2'][] = date('H:i', strtotime($row->StartTime2)).'-'.date('H:i', strtotime($row->EndTime2));
			$data['time_3'][] = date('H:i', strtotime($row->StartTime3)).'-'.date('H:i', strtotime($row->EndTime3));
			$data['time_4'][] = date('H:i', strtotime($row->StartTime4)).'-'.date('H:i', strtotime($row->EndTime4));
			$data['ket'][] = $row->Keterangan;
			// $data['breakdown'][] = $row->Breakdown;
		}

		return $data;
	}

	public function update_data_unit_status($unit){
		$sql = "UPDATE unit_status SET status = 'VERIFIED' WHERE no_unit = ?";
		$res = $this->db->query($sql, array($unit));
		$sql2 = "SELECT * FROM hourly_radio WHERE no_unit = ?";
		$res2 = $this->db->query($sql2, array($unit))->result_array();
		if(count($res2) > 0){
			$sql3 = "UPDATE hourly_radio SET status = 'VERIFIED' WHERE no_unit = ?";
			$res3 = $this->db->query($sql3, array($unit));
			return TRUE;
		}else{
			return TRUE;
		}
	}

	public function get_hourly_report(){
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

	public function get_hourly_detail($unit){
		$sql = "SELECT b.nama AS type_unit, c.nama AS block, d.nama AS dt_ton, a.no_unit, a.work, a.remark, a.problem, e.first_name, e.last_name, a.n_rit, a.n_rit_time, f.kode AS material FROM hourly_radio a JOIN type_unit b ON b.id = a.id_type_unit JOIN block c ON b.id = a.id_block JOIN dt_ton d ON d.id = a.id_dt_ton JOIN operator e ON e.id = a.operator LEFT JOIN material f ON f.id = a.mat WHERE no_unit = ?";
		$res = $this->db->query($sql, array($unit));
		$data = array();

		foreach ($res->result() as $row) {
			$data['type_unit'][] = $row->type_unit;
			$data['block'][] = $row->block;
			$data['dt_ton'][] = $row->dt_ton;
			$data['no_unit'][] = $row->no_unit;
			$data['work'][] = $row->work;
			$data['remark'][] = $row->remark;
			$data['problem'][] = $row->problem;
			$data['operator'][] = $row->first_name.' '.$row->last_name;
			$data['n_rit'][] = $row->n_rit;
			$data['n_rit_time'][] = date('H:i', strtotime($row->n_rit_time));
			$data['material'][] = $row->material;
		}

		return $data;
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

	public function update_data_radio($data, $id){
		$this->db->where('id', $id);
		$this->db->update('hourly_radio', $data);
		return TRUE;
	  }
	
	public function update_ritase($data, $no_unit, $tgl_aktifitas){
		$this->db->where('no_unit', $no_unit);
		$this->db->where('tgl_aktifitas', $tgl_aktifitas);
		$this->db->update('ritasi', $data);
		return TRUE;	
	}
}

?>