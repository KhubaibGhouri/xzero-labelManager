<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Release extends CI_Controller {

   
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata("Logged_in")) {
            redirect("admin");
        }
        
        $this->load->model("Admin_model");
    }

    //

     public function index(){
        $data["contents"] = "add_release";
        $this->load->view("admin_views/admin_template", $data);
    }
 public function addtrack(){
        $data["contents"] = "add_track";
        $this->load->view("admin_views/admin_template", $data);
    }
public function detail(){
        $data["contents"] = "release_detail";
        $this->load->view("admin_views/admin_template", $data);
    }
    public function view(){
        $data["contents"] = "release_list";
        $this->load->view("admin_views/admin_template", $data);
    }
    
}

?>