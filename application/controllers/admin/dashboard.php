<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

   
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata("Logged_in")) {
            redirect("admin");
        }
        
        $this->load->model("Admin_model");
    }

    //
    public function index(){
        $data["contents"] = "index";
        $this->load->view("admin_views/admin_template", $data);
    }
    

}

?>