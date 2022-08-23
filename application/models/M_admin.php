<?php
class M_admin extends CI_Model {


	public function get_material_plan(){
		$sql = "SELECT * FROM material WHERE id in (3,4)";
		$res = $this->db->query($sql);

		$data = array();

		foreach ($res->result() as $row) {
			$data['id'][] = $row->id;
			$data['kode'][] = $row->kode;
		}
	}

	public function get_unit_type_plan(){
		$sql = "SELECT * FROM type_unit";
		$res = $this->db->query($sql);

		$data = array();

		foreach ($res->result() as $row) {
			$data['id'][] = $row->id;
			$data['nama'][] = $row->nama;
		}

		return $data;
	}

    public function create_plan(){
        $sql = "INSERT INTO plan(plan, id_material, id_type_unit, month, year, target, note) VALUES (?,?,?,?,?,?,?)";
        $res = $this->db->query($sql, $data);
        return $res;
    }

	public function get_unit_type(){
		$sql = "SELECT * FROM type_unit";
		$res = $this->db->query($sql);

		$data = array();

		foreach ($res->result() as $row) {
			$data['id'][] = $row->id;
			$data['nama'][] = $row->nama;
		}

		return $data;
	}

	public function get_unit_field(){
		$sql = "SELECT * FROM dt_ton";
		$res = $this->db->query($sql);

		$data = array();

		foreach ($res->result() as $row) {
			$data['id'][] = $row->id;
			$data['name'][] = $row->nama;
		}

		return $data;
	}

    public function get_unit(){
    	$sql = "SELECT a.id, a.no_unit, a.egi, b.nama AS type_unit, a.type, a.brand, a.owner FROM unit a JOIN type_unit b ON b.id = a.type_unit ORDER BY a.id DESC";
    	$res = $this->db->query($sql);

    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['no_unit'][] = $row->no_unit;
    		$data['egi'][] = $row->egi;
    		$data['type_unit'][] = $row->type_unit;
    		$data['type'][] = $row->type;
    		$data['brand'][] = $row->brand;
    		$data['owner'][] = $row->owner;
    	}
    	return $data;
    }

    public function get_operator(){
    	$sql = "SELECT a.id, a.nrp, a.first_name, a.last_name, a.tempat_lahir, a.tgl_lahir, b.nama AS unit_field, a.create_date FROM operator a JOIN dt_ton b ON b.id = a.unit_field ORDER BY a.id DESC";
    	$res = $this->db->query($sql);

    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['nrp'][] = $row->nrp;
    		$data['first_name'][] = $row->first_name;
    		$data['last_name'][] = $row->last_name;
    		$data['tempat_lahir'][] = $row->tempat_lahir;
    		$data['tanggal_lahir'][] = $row->tgl_lahir;
    		$data['unit_field'][] = $row->unit_field;
    		$data['created_date'][] = date('d-F-Y', strtotime($row->create_date));
    	}
    	return $data;
    }

    public function get_proses(){
    	$sql = "SELECT * FROM proses ORDER BY id DESC";
    	$res = $this->db->query($sql);

    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['kode'][] = $row->kode;
    	}
    	return $data;
    }

    public function get_aktivitas(){
    	$sql = "SELECT * FROM aktifitas ORDER BY id DESC";
    	$res = $this->db->query($sql);

    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['kode'][] = $row->kode;
    	}
    	return $data;
    }

    public function get_material(){
    	$sql = "SELECT * FROM material ORDER BY id DESC";
    	$res = $this->db->query($sql);

    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['kode'][] = $row->kode;
    	}
    	return $data;
    }

    public function get_standby(){
    	$sql = "SELECT * FROM stanby ORDER BY id DESC";
    	$res = $this->db->query($sql);

    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['kode'][] = $row->kode;
    	}
    	return $data;
    }

    public function get_dt_ton(){
    	$sql = "SELECT * FROM dt_ton ORDER BY id DESC";
    	$res = $this->db->query($sql);

    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['nama'][] = $row->nama;
    	}
    	return $data;
    }

    public function get_block(){
    	$sql = "SELECT * FROM `block` ORDER BY id DESC";
    	$res = $this->db->query($sql);

    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['nama'][] = $row->nama;
    	}
    	return $data;
    }

    public function get_loading_point(){
    	$sql = "SELECT * FROM loader ORDER BY id DESC";
    	$res = $this->db->query($sql);

    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['nama'][] = $row->nama;
    	}
    	return $data;
    }

    public function check_no_unit($no_unit){
    	$sql = "SELECT * FROM unit WHERE no_unit = ?";
    	$res = $this->db->query($sql, array($no_unit));
    	return $res->result_array();
    }

    public function create_unit($data){
    	$sql = "INSERT INTO unit(no_unit, egi, type_unit, type, brand, owner) VALUES(?,?,?,?,?,?)";
    	$res = $this->db->query($sql, $data);
    	return $res;
    }

    public function get_unit_detail($id){
        $sql = "SELECT a.id, a.no_unit, a.egi, a.type_unit, a.type, a.brand, a.owner FROM unit a WHERE a.id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }

    public function get_type_unit_detail(){
        $sql = "SELECT * FROM type_unit";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function check_no_unit_edit($no_unit, $id){
        $sql = "SELECT * FROM unit WHERE no_unit = ? AND id != ?";
        $res = $this->db->query($sql, array($no_unit, $id));
        return $res->result_array();
    }

    public function update_unit($data){
        $sql = "UPDATE unit SET no_unit = ?, egi = ?, type_unit = ?, type = ?, brand = ?, owner = ? WHERE id = ?";
        $res = $this->db->query($sql, $data);
        return $res;
    }

    public function delete_unit($id){
        $sql = "DELETE FROM unit WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res;
    }

    public function check_operator_nrp($npr){
    	$sql = "SELECT * FROM operator WHERE nrp = ?";
    	$res = $this->db->query($sql, array($npr));
    	return $res->result_array();
    }

    public function create_operator($data){
    	$sql = "INSERT INTO operator(nrp, first_name, last_name, tempat_lahir, tgl_lahir, unit_field, create_date) VALUES(?,?,?,?,?,?,NOW())";
    	$res = $this->db->query($sql, $data);
    	return $res;
    }

    public function get_operator_detail($id){
        $sql = "SELECT a.id, a.nrp, a.first_name, a.last_name, a.tempat_lahir, a.tgl_lahir, a.unit_field FROM operator a WHERE a.id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }

    public function get_unit_field_detail(){
        $sql = "SELECT id, nama as `name` FROM dt_ton";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function check_operator_nrp_edit($nrp, $id){
        $sql = "SELECT * FROM operator WHERE nrp = ? AND id != ?";
        $res = $this->db->query($sql, array($nrp, $id));
        return $res->result_array();
    }

    public function update_operator($data){
        $sql = "UPDATE operator SET nrp = ?, first_name = ?, last_name = ?, tempat_lahir = ?, tgl_lahir = ?, unit_field = ? WHERE id = ?";
        $res = $this->db->query($sql, $data);
        return $res;
    }

    public function delete_operator($id){
        $sql = "DELETE FROM operator WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res;
    }

    public function create_kode_proses($kode){
        $sql = "INSERT INTO proses(kode) VALUES(?)";
        $res = $this->db->query($sql, array($kode));
        return $res;
    }

    public function get_kode_proses_detail($id){
        $sql = "SELECT * FROM proses WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }

    public function update_kode_proses($kode,$id){
        $sql = "UPDATE proses SET kode = ? WHERE id = ?";
        $res = $this->db->query($sql, array($kode, $id));
        return $res;   
    }

    public function delete_kode_proses($id){
        $sql = "DELETE FROM proses WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res;
    }

    public function create_kode_aktivitas($kode){
        $sql = "INSERT INTO aktifitas(kode) VALUES(?)";
        $res = $this->db->query($sql, array($kode));
        return $res;
    }

    public function get_kode_aktivitas_detail($id){
        $sql = "SELECT * FROM aktifitas WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }

    public function update_kode_aktivitas($kode,$id){
        $sql = "UPDATE aktifitas SET kode = ? WHERE id = ?";
        $res = $this->db->query($sql, array($kode, $id));
        return $res;   
    }

    public function delete_kode_aktivitas($id){
        $sql = "DELETE FROM aktifitas WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res;
    }

    public function create_kode_material($kode, $qty){
        $sql = "INSERT INTO material(kode, qty) VALUES(?,?)";
        $res = $this->db->query($sql, array($kode, $qty));
        return $res;
    }

    public function get_kode_material_detail($id){
        $sql = "SELECT * FROM material WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }

    public function update_kode_material($kode,$qty,$id){
        $sql = "UPDATE material SET kode = ?, qty = ? WHERE id = ?";
        $res = $this->db->query($sql, array($kode, $qty, $id));
        return $res;   
    }

    public function delete_kode_material($id){
        $sql = "DELETE FROM material WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res;
    }

    public function create_kode_stanby($kode){
        $sql = "INSERT INTO stanby(kode) VALUES(?)";
        $res = $this->db->query($sql, array($kode));
        return $res;
    }

    public function get_kode_stanby_detail($id){
        $sql = "SELECT * FROM stanby WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }

    public function update_kode_stanby($kode,$id){
        $sql = "UPDATE stanby SET kode = ? WHERE id = ?";
        $res = $this->db->query($sql, array($kode, $id));
        return $res;   
    }

    public function delete_kode_stanby($id){
        $sql = "DELETE FROM stanby WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res;
    }

    public function create_kode_dt_ton($kode){
        $sql = "INSERT INTO dt_ton(nama) VALUES(?)";
        $res = $this->db->query($sql, array($kode));
        return $res;
    }

    public function get_kode_dt_ton_detail($id){
        $sql = "SELECT * FROM dt_ton WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }

    public function update_kode_dt_ton($kode,$id){
        $sql = "UPDATE dt_ton SET nama = ? WHERE id = ?";
        $res = $this->db->query($sql, array($kode, $id));
        return $res;   
    }

    public function delete_kode_dt_ton($id){
        $sql = "DELETE FROM dt_ton WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res;
    }
    
    public function create_kode_block($kode){
        $sql = "INSERT INTO `block`(nama) VALUES(?)";
        $res = $this->db->query($sql, array($kode));
        return $res;
    }

    public function get_kode_block_detail($id){
        $sql = "SELECT * FROM `block` WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }

    public function update_kode_block($kode,$id){
        $sql = "UPDATE `block` SET nama = ? WHERE id = ?";
        $res = $this->db->query($sql, array($kode, $id));
        return $res;   
    }

    public function delete_kode_block($id){
        $sql = "DELETE FROM `block` WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res;
    }

    public function create_kode_unit_type($kode){
        $sql = "INSERT INTO type_unit(nama) VALUES(?)";
        $res = $this->db->query($sql, array($kode));
        return $res;
    }

    public function get_kode_unit_type_detail($id){
        $sql = "SELECT * FROM `type_unit` WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }

    public function update_kode_unit_type($kode,$id){
        $sql = "UPDATE `type_unit` SET nama = ? WHERE id = ?";
        $res = $this->db->query($sql, array($kode, $id));
        return $res;   
    }

    public function delete_kode_unit_type($id){
        $sql = "DELETE FROM `type_unit` WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res;
    }

    public function create_kode_loading_point($kode){
        $sql = "INSERT INTO loader(nama) VALUES(?)";
        $res = $this->db->query($sql, array($kode));
        return $res;
    }

    public function get_kode_loading_point_detail($id){
        $sql = "SELECT * FROM `loader` WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }

    public function update_kode_loading_point($kode,$id){
        $sql = "UPDATE `loader` SET nama = ? WHERE id = ?";
        $res = $this->db->query($sql, array($kode, $id));
        return $res;   
    }

    public function delete_kode_loading_point($id){
        $sql = "DELETE FROM `loader` WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res;
    }

    public function get_user_management(){
        $sql = "SELECT a.id, a.id_role, b.name AS name_role, a.nrp, a.username, a.name, a.create_date FROM user a JOIN role b ON b.id = a.id_role WHERE a.id_role != '1'";
        $res = $this->db->query($sql);

        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['id_role'][] = $row->id_role;
            $data['name_role'][] = $row->name_role;
            $data['nrp'][] = $row->nrp;
            $data['username'][] = $row->username;
            $data['name'][] = $row->name;
            if($row->create_date === NULL){
                $data['created_date'][] = '';
            }else{
               $data['created_date'][] = date('d-F-Y', strtotime($row->create_date)); 
            }
            
        }

        return $data;
    }

    public function get_role(){
        $sql = "SELECT * FROM role WHERE id != '1'";
        $res = $this->db->query($sql);

        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['name'][] = $row->name;
        }

        return $data;
    }

    public function check_user_nrp($npr){
        $sql = "SELECT * FROM user WHERE nrp = ?";
        $res = $this->db->query($sql, array($npr));
        return $res->result_array();
    }

    public function check_username($username){
        $sql = "SELECT * FROM user WHERE username = ?";
        $res = $this->db->query($sql, array($username));
        return $res->result_array();
    }

    public function create_user($data){
        $sql = "INSERT INTO user(id_role, nrp, username, password, name,shift, create_date) VALUES(?,?,?,?,?,?,NOW())";
        $res = $this->db->query($sql, $data);
        return $res;
    }

    public function get_user_detail($id){
        $sql = "SELECT a.id, a.id_role, b.name AS name_role, a.nrp, a.username, a.name,a.shift, a.create_date FROM user a JOIN role b ON b.id = a.id_role WHERE a.id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }

    public function check_user_nrp_edit($npr, $id){
        $sql = "SELECT * FROM user WHERE nrp = ? AND id != ?";
        $res = $this->db->query($sql, array($npr, $id));
        return $res->result_array();
    }

    public function check_username_edit($username, $id){
        $sql = "SELECT * FROM user WHERE username = ? AND id != ?";
        $res = $this->db->query($sql, array($username, $id));
        return $res->result_array();
    }

    public function get_role_detail(){
        $sql = "SELECT * FROM role WHERE id != '1'";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function update_user($data, $id){
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        return TRUE;
    }

    public function delete_user($id){
        $sql = "DELETE FROM user WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res;
    }
}