<?php

class Admin_model extends CI_Model {

    public function do_login($email, $password) {
        $query = "select * from admin where email=" . $this->db->escape($email) . " and password=" . $this->db->escape($password) . "";

        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    
    //
    
}

?>