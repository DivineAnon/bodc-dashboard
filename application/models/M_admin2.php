<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin2 extends CI_Model {
	
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

    public function get_material(){
    	$sql = "SELECT * FROM material WHERE id in (3,4)";
    	$res = $this->db->query($sql);

    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['kode'][] = $row->kode;
    	}
    	return $data;
    }

    public function get_plan(){
    	$sql = "SELECT a.*, b.kode AS material, c.nama AS type_unit FROM plan a LEFT JOIN material b ON b.id = a.id_material LEFT JOIN type_unit c ON c.id = a.id_type_unit ORDER BY a.id DESC";
    	$res = $this->db->query($sql);

    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['plan'][] = $row->plan;
    		$data['material'][] = $row->material;
    		$data['type_unit'][] = $row->type_unit;
    		$data['month'][] = $row->month;
    		$data['year'][] = $row->year;
    		$data['target'][] = $row->target;
    		$data['note'][] = $row->note;
    	}
    	return $data;
    }

    public function check_plan($plan, $material, $type_unit, $month, $year) {
    	$sql = "SELECT * FROM plan WHERE plan = ? AND id_material = ? AND id_type_unit = ? AND month = ? AND year = ?";
    	$res = $this->db->query($sql, array($plan, $material, $type_unit, $month, $year));

    	return $res->result_array();
    }

    public function create_plan($data){
    	$sql = "INSERT INTO plan(plan, id_material, id_type_unit, month, year, target, note) VALUES(?,?,?,?,?,?,?)";
    	$res = $this->db->query($sql, $data);
    	return $res;
    }

    public function get_plan_detail($id){
        $sql = "SELECT a.id, a.plan, a.id_material, a.id_type_unit, a.month, a.year, a.target, a.note FROM plan a WHERE a.id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }

    public function get_type_unit_detail(){
        $sql = "SELECT * FROM type_unit";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function get_material_detail(){
        $sql = "SELECT * FROM material WHERE id in (3,4)";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function check_plan_edit($plan, $material, $unit_type, $month, $year, $id){
        $sql = "SELECT * FROM plan WHERE plan = ? AND id_material = ? AND id_type_unit = ? AND month = ? AND year = ? AND id != ?";
        $res = $this->db->query($sql, array($plan, $material, $unit_type, $month, $year, $id));
        return $res->result_array();
    }

    public function update_plan($data){
        $sql = "UPDATE plan SET plan = ?, id_material = ?, id_type_unit = ?, month = ?, year = ?, target = ?, note = ? WHERE id = ?";
        $res = $this->db->query($sql, $data);
        return $res;
    }

    public function delete_plan($id){
        $sql = "DELETE FROM plan WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res;
    }
}
?>