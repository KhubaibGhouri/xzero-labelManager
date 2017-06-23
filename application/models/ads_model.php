<?php

class ads_model extends CI_Model {

    public function insert_advertise($name, $business) {
        $query = "insert into ads (pic_name,menu_name)values('" . $name . "','" . $business . "')";
        $this->db->query($query);
    }

//
    public function menu_ad() {
        $query = "SELECT * FROM ads WHERE menu_name ='MenuBar' ORDER BY ad_id LIMIT 3";
        return $this->db->query($query);
    }

    //
    public function small_banner() {
        $query = "SELECT * FROM ads WHERE menu_name ='UnderBigSlider' ORDER BY ad_id LIMIT 2";
        return $this->db->query($query);
    }

    //
    public function underSmallSlider() {
        $query = "SELECT * FROM ads WHERE menu_name ='UnderSmallSlider' ORDER BY ad_id LIMIT 2";
        return $this->db->query($query);
    }

    //
    public function SideBar() {
        $query = "SELECT * FROM ads WHERE menu_name ='SideBar' ORDER BY ad_id LIMIT 2";
        return $this->db->query($query);
    }

    /* shahzad senior */

    public function values() {
        $query = "select * from ads";
        return $this->db->query($query);
    }

    public function delete_data($x) {
        $query = "delete from ads where ad_id='" . $x . "'";
        $this->db->query($query);
    }

    //
    public function shops() {
        $query = "select * from shop_user_application";
        return $this->db->query($query);
    }

    public function delete_shop($x) {
        $query = "delete from shop_user_application where id='" . $x . "'";
        $this->db->query($query);
    }

    public function block_shop($id, $status) {
        $query = "update shop_user_application set status='$status' where id='" . $id . "'";
        $this->db->query($query);
    }

    //khalid working,...
    public function insert_news($name, $news_heading, $news_description) {
        $query = "insert into tbl_news (news_image,news_heading,news_description)values('" . $name . "','" . $news_heading . "','" . $news_description . "')";
        $result = $this->db->query($query);
        if ($result) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    //
    public function select_news() {
        $query = "select * from tbl_news ORDER BY news_id DESC";
        return $this->db->query($query);
    }

    //
    public function delete_news($x) {
        $query = "delete from tbl_news where news_id='" . $x . "'";
        $this->db->query($query)->$row;
    }

    //
    public function admin_menu_add($name, $menu_cate) {
        $query = "insert into tbl_admin_menu (menu_name,category)values('" . $name . "','" . $menu_cate . "')";
        $result = $this->db->query($query);
        if ($result) {

            return TRUE;
        } else {
            return FALSE;
        }
    }
    //
    public function chane_menu_status($m_id, $status){
        $query = "update tbl_admin_menu set status='$status' where menu_id='" . $m_id . "'";
        $result = $this->db->query($query);
        if ($result) {

            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function menu_delete($x){
         $query = "delete from tbl_admin_menu where menu_id='" . $x . "'";
        $this->db->query($query)->$row;
    }

    //
    public function select_menu() {
        $query = "select * from tbl_admin_menu ORDER BY menu_id DESC";
        return $this->db->query($query);
    }

    //
}

?>