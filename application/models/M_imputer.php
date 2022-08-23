<?php
class M_imputer extends CI_Model
{

    public function get_all_units() {
        $sql = "SELECT id, no_unit,type_unit FROM unit ORDER BY id DESC";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_unit($id) {
        $sql = "SELECT no_unit,type_unit FROM unit WHERE no_unit = ?";
        $query = $this->db->query($sql, [$id])->result_array();

        return $query;
    }

    public function get_no_unit() {
        // $sql = "SELECT no_unit FROM activity ORDER BY no_unit DESC LIMIT 1";
        $sql = "SELECT no_unit FROM activity WHERE tgl_aktifitas = ? ORDER BY no_unit DESC";
        $query = $this->db->query($sql, array(date('Y-m-d')))->result_array();

        if (count($query) > 0) {
            $next_unit = (int) $query[0]['no_unit'] + 1;
        } else {
            $next_unit = 1;
        }

        return $next_unit;
    }

    public function get_nrp($id)
    {
        $sql = "SELECT nrp FROM operator WHERE id = ?";
        $query = $this->db->query($sql, array($id))->row_array();

        return $query['nrp'];
    }

    public function get_operator()
    {
        $sql = "SELECT id, nrp, first_name, last_name FROM operator ORDER BY first_name ASC";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_proses()
    {
        $sql = "SELECT id, kode FROM proses ORDER BY id";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_material()
    {
        $sql = "SELECT id, kode FROM material ORDER BY id";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_material_qty($mat_id) {
        $sql = "SELECT qty FROM material WHERE id = ?";
        $query = $this->db->query($sql, array($mat_id))->row_array();

        return $query['qty'];
    }

    public function get_aktifitas()
    {
        $sql = "SELECT id, kode FROM aktifitas ORDER BY id";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_loader()
    {
        $sql = "SELECT id, nama FROM loader ORDER BY id";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_block()
    {
        $sql = "SELECT id, nama FROM block ORDER BY nama";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_dt_ton()
    {
        $sql = "SELECT id, nama FROM dt_ton ORDER BY id";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_loading_point()
    {
        $sql = "SELECT id, nama FROM loader ORDER BY id";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_unit_type()
    {
        $sql = "SELECT id, nama FROM type_unit ORDER BY nama";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_stanby_master()
    {
        $sql = "SELECT id, kode FROM stanby ORDER BY id";
        $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_stanby($no_unit, $tgl_aktifitas)
    {
        $sql = "SELECT a.*, b.create_date, c.kode AS Standby
                FROM stanby_status a 
                JOIN activity b ON b.id = a.id_activity 
                JOIN stanby c ON c.id = a.id_stanby
                WHERE b.tgl_aktifitas = ? AND b.no_unit = ?
                ORDER BY a.id DESC";
        $query = $this->db->query($sql, array($tgl_aktifitas, $no_unit))->result_array();
        // $query = $this->db->query($sql, array(date('Y-m-d')))->result_array();
        // $query = $this->db->query($sql)->result_array();

        return $query;
    }

    public function get_breakdown($no_unit, $tgl_aktifitas) {
        $sql = "SELECT a.*, b.create_date
                FROM breakdown_status a 
                JOIN activity b ON b.id = a.id_activity 
                WHERE b.tgl_aktifitas = ? AND b.no_unit = ?
                ORDER BY a.id DESC";
        $query = $this->db->query($sql, array($tgl_aktifitas, $no_unit))->result_array();

        return $query;
    }

    public function get_daily_report()
    {
        // $sql = "
        //     SELECT a.id, a.tgl_aktifitas, a.no_unit AS Unit, a.id_proses, a.id_aktifitas, a.id_material, a.loader AS id_loader, a.jarak AS Jarak, b.kode AS Proses, c.kode AS Aktivitas, a.loading_point as LoadingPoint, a.dumping_area as DumpingArea, a.total_ritasi AS TotalRitasi, a.status AS Status, d.kode AS Material, e.nama AS Loader 
        //     FROM unit_status a 
        //     LEFT JOIN proses b ON b.id = a.id_proses 
        //     LEFT JOIN aktifitas c ON c.id = a.id_aktifitas 
        //     LEFT JOIN material d ON d.id = a.id_material 
        //     LEFT JOIN loader e ON e.id = a.loader
        //     WHERE a.tgl_aktifitas = ?
        //     ORDER BY a.id DESC";

        $sql = "
            SELECT a.id, a.tgl_aktifitas, a.no_unit AS Unit, a.id_proses, a.id_aktifitas, a.loader AS id_loader, a.jarak AS Jarak, b.kode AS Proses, c.kode AS Aktivitas, a.loading_point as LoadingPoint, a.dumping_area as DumpingArea, a.total_ritasi AS TotalRitasi, a.status AS Status, e.nama AS Loader , f.no_unit AS Nomor_Unit
            FROM unit_status a 
            LEFT JOIN proses b ON b.id = a.id_proses 
            LEFT JOIN aktifitas c ON c.id = a.id_aktifitas 
            LEFT JOIN loader e ON e.id = a.loader
            LEFT JOIN unit f ON f.id = a.no_unit
            WHERE a.tgl_aktifitas = ?
            ORDER BY a.id DESC";
        $query = $this->db->query($sql, array(date('Y-m-d')))->result_array();

        return $query;
    }

    public function get_latest_activity()
    {
        $sql = "SELECT a.id, a.no_unit, a.id_proses, a.id_material, a.id_aktifitas, a.total_ritasi, b.kode AS kode_proses, c.kode AS kode_material, d.kode AS kode_aktifitas FROM activity a JOIN proses b ON b.id = a.id_proses JOIN material c ON c.id = a.id_material JOIN aktifitas d ON d.id = a.id_aktifitas ORDER BY a.id DESC LIMIT 1";
        $query = $this->db->query($sql)->row_array();

        return $query;
    }

    public function check_activity($no_unit, $tgl_aktifitas) {
        $sql = "SELECT id FROM activity WHERE no_unit = ? AND tgl_aktifitas = ?";
        $query = $this->db->query($sql, array($no_unit, $tgl_aktifitas))->row_array();

        $sql2 = "SELECT id FROM unit_status WHERE no_unit = ? AND tgl_aktifitas = ? AND status != 'UPLOAD'";
        $query2 = $this->db->query($sql2, array($no_unit, $tgl_aktifitas))->row_array();

        $data = array();


        $sql4 = "SELECT type_unit FROM unit WHERE no_unit = ?";
        $query4 = $this->db->query($sql4, array($no_unit))->result_array();
        // print_r($query4);die();
        if($query4[0]['type_unit'] == 1){
            $data['loader'] = true;
            $sql3 = "SELECT id FROM hourly_radio WHERE no_unit = ? AND tgl_aktifitas = ?";
            $query3 = $this->db->query($sql3, array($no_unit, $tgl_aktifitas))->row_array();

            if ($query3 != NULL) {
                $data['loader2'] = true;
            } else {
                $data['loader2'] = false;
            }
        }else{
            $data['loader'] = false;
        }

        if ($query != NULL) {
            $data['activity'] = true;
        } else {
            $data['activity'] = false;
        }

        if ($query2 != NULL) {
            $data['unit_status'] = true;
        } else {
            $data['unit_status'] = false;
        }

        return $data;
    }

    public function check_hourly_radio($no_unit, $tgl_aktifitas) {
        $sql = "SELECT * FROM hourly_radio WHERE no_unit = ? AND tgl_aktifitas = ? LIMIT 1";
        $query = $this->db->query($sql, array($no_unit, $tgl_aktifitas))->row_array();

        return $query;
    }

    public function check_ritasi($no_unit, $tgl_aktifitas) {
        $sql = "SELECT total_utama FROM ritasi WHERE no_unit = ? AND tgl_aktifitas = ? LIMIT 1";
        $query = $this->db->query($sql, array($no_unit, $tgl_aktifitas))->row_array();

        return $query;
    }

    public function get_daily_activity($no_unit, $tgl_aktifitas) {
        // activity
        // $now = date('H i s');
        // $time = date('H i s', strtotime('06:00pm'));
        
        // if ($this->session->shift == '1' || ($this->session->shift == '2' && $now > $time)) {
        //     $sql = "SELECT * FROM activity WHERE no_unit = ? AND tgl_aktifitas = ? LIMIT 1";
        //     $query = $this->db->query($sql, array($no_unit, date('Y-m-d')));
        // } else if ($this->session->shift == '2') {
        //     $sql = "SELECT * FROM activity WHERE no_unit = ? ORDER BY id DESC LIMIT 1";
        //     $query = $this->db->query($sql, array($no_unit));
        // }

        $sql = "SELECT * FROM activity WHERE no_unit = ? AND tgl_aktifitas = ? LIMIT 1";
        $query = $this->db->query($sql, array($no_unit, $tgl_aktifitas));

        $r = $query->row_array();

        $data['activity'] = [
            'id' => $r['id'],
            'id_operator' => $r['id_operator'],
            'id_proses' => $r['id_proses'],
            'id_aktifitas' => $r['id_aktifitas'],
            'tgl_aktifitas' => $r['tgl_aktifitas'],
            'no_unit' => $r['no_unit'],
            'hm_awal' => $r['hm_awal'],
            'km_awal' => $r['km_awal'],
            'jm_opt_awal' => $r['jm_opt_awal'],
            'hm_akhir' => $r['hm_akhir'],
            'km_akhir' => $r['km_akhir'],
            'jm_opt_akhir' => $r['jm_opt_akhir'],
            'total_hm' => $r['total_hm'],
            'total_km' => $r['total_km'],
            'total_jm_opt' => $r['total_jm_opt'],
            'total_ritasi' => $r['total_ritasi'],
            'total_ton' => $r['total_ton'],
            'notes' => $r['notes'],
            'fuel' => $r['fuel'],
            'rata_rata' => $r['rata_rata'],
        ];

        // stanby code
        $sql2 = "SELECT a.id_stanby FROM stanby_status a JOIN activity b ON b.id = a.id_activity WHERE a.id_activity = ? LIMIT 1";
        $query2 = $this->db->query($sql2, array($r['id']))->row_array();

        $data['stanby_code'] = $query2['id_stanby'];

        // unit status
        $sql3 = "SELECT a.id, a.tgl_aktifitas, a.no_unit AS Unit, a.id_proses, a.id_aktifitas, a.loader AS id_loader, a.jarak AS Jarak, b.kode AS Proses, c.kode AS Aktivitas, a.loading_point as LoadingPoint, a.dumping_area as DumpingArea, a.truck_size as TruckSize, a.total_ritasi AS TotalRitasi, a.status AS Status, e.nama AS Loader 
        FROM unit_status a 
        JOIN proses b ON b.id = a.id_proses 
        JOIN aktifitas c ON c.id = a.id_aktifitas 
        LEFT JOIN loader e ON e.id = a.loader
        WHERE a.tgl_aktifitas = ? AND a.no_unit = ?
        ORDER BY a.id DESC LIMIT 1";

        $query3 = $this->db->query($sql3, array(date('Y-m-d'), $r['no_unit']))->row_array();

        $data['unit_status'] = [
            'kode_proses' => $query3['Proses'],
            'kode_aktifitas' => $query3['Aktivitas'],
            'id_loader' => $query3['id_loader'],
            'loading_point' => $query3['LoadingPoint'],
            'dumping_area' => $query3['DumpingArea'],
            'truck_size' => $query3['TruckSize'],
            'jarak' => $query3['Jarak'],
            'total_ritasi' => $query3['TotalRitasi'],

        ];

        return $data;
    }

    public function setup($param)
    {
        $sql = "INSERT INTO activity (id_user, tgl_aktifitas, no_unit, create_date) VALUES (?,?,?,NOW())";
        $query = $this->db->query($sql, array($this->session->id, $param['tgl_aktifitas'], $param['no_unit']));

        $inserted_id = $this->db->insert_id();

        $sql2 = "INSERT INTO ritasi (id_activity) VALUES (?)";
        $query2 = $this->db->query($sql2, array($inserted_id));

        $sql3 = "INSERT INTO unit_status (tgl_aktifitas, no_unit) VALUES (?,?)";
        $query3 = $this->db->query($sql3, array($param['tgl_aktifitas'],$param['no_unit']));

        return $query3;
    }

    public function save_activity($param) {
        $sql = "SELECT id FROM activity WHERE no_unit = ? AND tgl_aktifitas = ? LIMIT 1";
        $query = $this->db->query($sql, array($param['no_unit'], $param['tgl_aktifitas']))->row_array();

        if ($query == null) {
            $query2 = $this->db->insert('activity', $param);
            $id_activity = $this->db->insert_id();

            return $id_activity;
        } else {
            $data = [
                $param['id_operator'],
                $param['id_proses'],
                $param['id_aktifitas'],
                $param['tgl_aktifitas'],
                $param['hm_awal'],
                $param['km_awal'],
                $param['jm_opt_awal'],
                $param['hm_akhir'],
                $param['km_akhir'],
                $param['jm_opt_akhir'],
                $param['total_hm'],
                $param['total_km'],
                $param['total_jm_opt'],
                $param['fuel'],
                $param['rata_rata'],
                $param['id'],
            ];
            $sql2 = "UPDATE activity SET id_operator = ?, id_proses = ?, id_aktifitas = ?, tgl_aktifitas = ?, hm_awal = ?, km_awal = ?, jm_opt_awal = ?, hm_akhir = ?, km_akhir = ?, jm_opt_akhir = ?, total_hm = ?, total_km = ?, total_jm_opt = ?, fuel = ?, rata_rata = ? WHERE id = ?";
            $query2 = $this->db->query($sql2, $data);

            return $param['id'];
        }
    }

    public function update_activity($param, $standby_code, $no_unit) {
        $sql = "UPDATE activity SET id_operator = ?, id_proses = ?, id_aktifitas = ?, id_material = ?, hm_awal = ?, km_awal = ?, jm_opt_awal = ?, hm_akhir = ?, km_akhir = ?, jm_opt_akhir = ?, total_hm = ?, total_km = ?, total_jm_opt = ?, fuel = ?, rata_rata = ? WHERE id = ?";
        $query = $this->db->query($sql, $param);

        $sql2 = "SELECT id FROM stanby_status WHERE id_activity = ? LIMIT 1";
        $query2 = $this->db->query($sql2, array($param['id']))->row_array();

        // if ($query2 != NULL) {
        //     $sql3 = "UPDATE stanby_status SET id_stanby = ? WHERE id_activity = ?";
        //     $query3 = $this->db->query($sql3, array($standby_code, $param['id']));
        // } else {
        //     $sql3 = "INSERT INTO stanby_status (id_activity, id_stanby) VALUES (?,?)";
        //     $query3 = $this->db->query($sql3, array($param['id'], $standby_code));
        // }

        $sql4 = "UPDATE unit_status SET id_proses = ?, id_material = ?, id_aktifitas = ? WHERE no_unit = ? AND tgl_aktifitas = ?";
        $query4 = $this->db->query($sql4, array($param['id_proses'], $param['id_material'], $param['id_aktivitas'], $no_unit, date('Y-m-d')));

        return $query;
    }

    // public function save_unit_status($param) {
    //     $sql = "SELECT tgl_aktifitas FROM activity WHERE id = ?";
    //     $query = $this->db->query($sql, array($param['activity']))->row_array();

    //     $tgl = $query['tgl_aktifitas'];

    //     $sql2 = "INSERT INTO unit_status (tgl_aktifitas, id_proses, id_aktifitas, id_material, no_unit, total_ritasi, loader, loading_point, dumping_area, jarak, `status`) VALUES (?,?,?,?,?,?,?,?,?,?,'UPLOAD')";
    //     $query2 = $this->db->query($sql2, array($tgl, $param['id_proses'], $param['id_aktifitas'], $param['id_material'], $param['no_unit'], $param['total_ritasi'], $param['loader'], $param['loading_point'], $param['dumping_area'], $param['jarak']));

    //     $sql3 = "UPDATE activity SET total_ritasi = ? WHERE id = ?";
    //     $query3 = $this->db->query($sql3, array($param['total_ritasi'], $param['activity']));

    //     return $query2;
    // }

    public function save_unit_status($param, $total_ton, $notes) {
        $sql = "SELECT id FROM unit_status WHERE no_unit = ? AND tgl_aktifitas = ? LIMIT 1";
        $query = $this->db->query($sql, array($param['no_unit'], $param['tgl_aktifitas']))->row_array();

        if ($query == null) {
            $sql1 = "INSERT INTO unit_status (tgl_aktifitas, id_proses, id_aktifitas, no_unit, total_ritasi, loader, loading_point, dumping_area, jarak, truck_size, `status`) VALUES (?,?,?,?,?,?,?,?,?,?,'UPLOAD')";
            $query1 = $this->db->query($sql1, $param);
        } else {
            $sql1 = "UPDATE unit_status SET id_proses = ?, id_aktifitas = ?, total_ritasi = ?, loader = ?, loading_point = ?, dumping_area = ?, jarak = ?, truck_size = ?, status = 'UPLOAD' WHERE no_unit = ? AND tgl_aktifitas = ?";
            $query1 = $this->db->query($sql1, array($param['id_proses'], $param['id_aktifitas'], $param['total_ritasi'], $param['loader'], $param['loading_point'], $param['dumping_area'], $param['jarak'], $param['truck_size'], $param['no_unit'], $param['tgl_aktifitas']));
        }

        $sql2 = "UPDATE activity SET total_ritasi = ?, total_ton = ?, notes = ? WHERE no_unit = ? AND tgl_aktifitas = ?";
        $query2 = $this->db->query($sql2, array($param['total_ritasi'], $total_ton, $notes, $param['no_unit'], $param['tgl_aktifitas']));

        return $query1;
    }

    public function update_unit_status($param, $total_ton) {
        $sql = "UPDATE unit_status SET loader = ?, loading_point = ?, dumping_area = ?, jarak = ?, status = 'UPLOAD' WHERE no_unit = ? AND tgl_aktifitas = ?";
        $query = $this->db->query($sql, $param);

        $sql2 = "UPDATE activity SET total_ton = ? WHERE no_unit = ? AND tgl_aktifitas = ?";
        $query2 = $this->db->query($sql2, array($total_ton, $param['no_unit'], $param['tgl_aktifitas']));

        return $query;
    }

    public function save_stanby($param) {
        $sql = "INSERT INTO stanby_status (id_activity, id_stanby, start_time_1, start_time_2, start_time_3, start_time_4, end_time_1, end_time_2, end_time_3, end_time_4, keterangan) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $query = $this->db->query($sql, $param);

        return $query;
    }

    public function update_stanby($param) {
        $sql = "UPDATE stanby_status SET id_stanby = ?, start_time_1 = ?, start_time_2 = ?, start_time_3 = ?, start_time_4 = ?, end_time_1 = ?, end_time_2 = ?, end_time_3 = ?, end_time_4 = ?, keterangan = ? WHERE id = ?";
        $query = $this->db->query($sql, $param);

        return $query;
    }

    public function delete_stanby($param) {
        $sql = "DELETE FROM stanby_status WHERE id = ?";
        $query = $this->db->query($sql, $param);

        return $query;
    }

    public function save_breakdown($param) {
        $sql = "INSERT INTO breakdown_status (id_activity, breakdown_status, start_time_1, start_time_2, start_time_3, start_time_4, end_time_1, end_time_2, end_time_3, end_time_4, keterangan) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $query = $this->db->query($sql, $param);

        return $query;
    }

    public function update_breakdown($param) {
        $sql = "UPDATE breakdown_status SET breakdown_status = ?, start_time_1 = ?, start_time_2 = ?, start_time_3 = ?, start_time_4 = ?, end_time_1 = ?, end_time_2 = ?, end_time_3 = ?, end_time_4 = ?, keterangan = ? WHERE id = ?";
        $query = $this->db->query($sql, $param);

        return $query;
    }

    public function delete_breakdown($param) {
        $sql = "DELETE FROM breakdown_status WHERE id = ?";
        $query = $this->db->query($sql, $param);

        return $query;
    }

    public function update_daily_report($param) {
        $sql = "UPDATE unit_status SET no_unit = ?, id_proses = ?, id_aktifitas = ?, id_material = ?, loader = ?, loading_point = ?, dumping_area = ?, total_ritasi = ?, jarak = ? WHERE id = ?";
        $query = $this->db->query($sql, $param);

        return $query;
    }

    public function delete_daily_report($param) {
        $sql = "SELECT a.tgl_aktifitas, a.no_unit, b.id AS id_activity
                FROM unit_status a 
                JOIN activity b ON a.no_unit = b.no_unit AND a.tgl_aktifitas = b.tgl_aktifitas
                WHERE a.id = ? LIMIT 1";
        $query = $this->db->query($sql, $param)->row_array();

        $id_activity = $query['id_activity'];
        $tgl_aktifitas = $query['tgl_aktifitas'];
        $no_unit = $query['no_unit'];

        $sql2 = "DELETE FROM unit_status WHERE id = ?";
        $query2 = $this->db->query($sql2, $param);

        $sql3 = "DELETE FROM activity WHERE no_unit = ? AND tgl_aktifitas = ?";
        $query3 = $this->db->query($sql3, array($no_unit, $tgl_aktifitas));

        $sql4 = "DELETE FROM ritasi WHERE no_unit = ? AND tgl_aktifitas = ?";
        $query4 = $this->db->query($sql4, array($no_unit, $tgl_aktifitas));

        $sql5 = "DELETE FROM stanby_status WHERE id_activity = ?";
        $query5 = $this->db->query($sql5, array($id_activity));

        $sql6 = "DELETE FROM breakdown_status WHERE id_activity = ?";
        $query6 = $this->db->query($sql6, array($id_activity));

        return $query;
    }




    // RITASI
    public function check_is_loader($param) {
        $sql = "SELECT id FROM hourly_radio WHERE no_unit = ? AND tgl_aktifitas = ?";
        $query = $this->db->query($sql, $param)->row_array();

        if ($query != NULL) {
            return true;
        } else {
            return false;
        }
    }

    public function get_total_ton($no_unit, $tgl_aktifitas) {
        $select = '';
        for ($i = 1; $i <= 24; $i++) {
            $select .= 'mat_' . $i . ', ';
        }
        for ($i = 1; $i <= 24; $i++) {
            $select .= 'total_' . $i;
            if ($i != 24) {
                $select .= ', ';
            }
        }

        $sql = "SELECT $select FROM ritasi WHERE no_unit = ? AND tgl_aktifitas = ? LIMIT 1";
        $query = $this->db->query($sql, array($no_unit, $tgl_aktifitas))->row_array();

        $total_ton = 0;

        if ($query == null) {
            return '0';
        } else {
            for ($i = 1; $i <= 24; $i++) {
                $indexMat = 'mat_'.$i;
                $mat = $query[$indexMat];

                $indexTotal = 'total_'.$i;
                $total = $query[$indexTotal];

                if ($mat != NULL && $total != NULL) {
                    $qty = $this->get_material_qty($mat);
                    $total_ton_hourly = (float) $qty * (float) $total;

                    $total_ton += $total_ton_hourly;
                }
            }
        }

        return $total_ton;
    }

    public function get_activity_ritasi($param) {
        // $sql = "SELECT a.no_unit, b.* 
        //         FROM activity a
        //         JOIN ritasi b ON a.id = b.id_activity
        //         WHERE a.no_unit = ? AND a.tgl_aktifitas = ? LIMIT 1";
        $sql = "SELECT * FROM ritasi WHERE no_unit = ? AND tgl_aktifitas = ? LIMIT 1";
        $query = $this->db->query($sql, $param)->row_array();

        return $query;
    }

    public function save_ritasi($param, $param2, $total_ton) {

        $sql0 = "SELECT id FROM ritasi WHERE no_unit = ? AND tgl_aktifitas = ?";
        $query0 = $this->db->query($sql0, array($param['no_unit'], $param['tgl_aktifitas']))->row_array();

        if ($query0 == NULL) {
            $attr = "`no_unit`, ";
            for ($i = 1; $i <= 24; $i++) {
                $attr .= "`time_". $i ."`, ";
            }
            for ($i = 1; $i <= 24; $i++) {
                $attr .= "`mat_". $i ."`, ";
            }
            for ($i = 1; $i <= 24; $i++) {
                $attr .= "`total_". $i ."`, ";
            }
            $attr .= '`total_utama`, `tgl_aktifitas`';

            $values = "?, ";
            for ($i = 1; $i <= 72; $i++) {
                $values .= "?, ";
            }
            $values .= "?, ?";

            $sql = "INSERT INTO ritasi ($attr) VALUES ($values)";
            $query = $this->db->query($sql, $param);
        } else {

            $attr = "";
            for ($i = 1; $i <= 24; $i++) {
                $attr .= "time_". $i ." = ?, ";
            }
            for ($i = 1; $i <= 24; $i++) {
                $attr .= "mat_". $i ." = ?, ";
            }
            for ($i = 1; $i <= 24; $i++) {
                $attr .= "total_". $i ." = ?, ";
            }

            $sql = "UPDATE ritasi SET $attr total_utama = ? WHERE no_unit = ? AND tgl_aktifitas = ?";
            $query = $this->db->query($sql, $param2);

            // $sql2 = "UPDATE unit_status SET total_ritasi = ? WHERE tgl_aktifitas = ? AND no_unit = ?";
            // $query2 = $this->db->query($sql2, array($param['total_utama'], date('Y-m-d'), $no_unit));

            $sql3 = "UPDATE activity SET total_ritasi = ?, total_ton = ? WHERE no_unit = ? AND tgl_aktifitas = ?";
            $query3 = $this->db->query($sql3, array($param2['total_utama'], $total_ton, $param2['no_unit'], $param2['tgl_aktifitas']));
        }

        return $query;
    }
}
