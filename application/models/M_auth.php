<?php
class M_auth extends CI_Model {

    public function check_credentials($param) {
        $sql = "SELECT `id`, `id_role`, `username`, `name`, `shift` FROM `user` WHERE `username` = ? AND `password` = ?";
        $query = $this->db->query($sql, $param)->row_array();

        return $query;
    }

}