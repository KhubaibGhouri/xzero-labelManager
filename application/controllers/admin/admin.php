<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Admin_model");
        
    }
    //
    public function index() {
        $this->load->view("admin_views/login");
    }
    //
    public function test($email, $password) {
        echo $email;
        echo $password;
    }
    //
    public function do_login() {
         echo $email = strip_tags($this->input->post('email'));
       echo $password = strip_tags($this->input->post('password'));

        $result = $this->Admin_model->do_login($email, $password);
        if ($result) {
            foreach ($result->result()as $row) {
                $userdata = array(
                    'user_email' => $row->email,
                    'id' => $row->id,
                    'f_name' => $row->f_name,
                    'l_name' => $row->l_name,
                    'Phone' => $row->Phone,
                    'business' => $row->business,
                    'number' => $row->number,
                    'message' => $row->message,
                    'terms' => $row->terms,
                    'token' => $row->token,
                    'shop_name' => $row->shop_name,
                    'email' => $row->email,
                    'logo' => $row->logo,
                    'password' => $row->Password,
                    'Logged_in' => true
                );
            }
            $this->session->set_userdata($userdata);
            redirect("admin/dashboard");
        } else {
            $this->session->set_flashdata('item', '<div class="alert alert-danger">Invalid User Name Or Password</div>');
            redirect("admin/");
        }
    }

    //
    public function logout() {
      
        $this->load->driver('cache');
        $this->session->sess_destroy();
        $this->cache->clean();
        ob_clean();
        redirect("admeeno/rooteeno/index", "refresh");
    }

    //khalid working.......
    public function rest_password_view() {
        $this->load->view("admin_views/rest-password");
    }

    public function rest_password() {

        $password = strip_tags($this->input->post("email"));
        $string = sha1(random_string('alnum', 16));
        if ($string) {
            $this->sent_mail_restpassword($password, $string);
        }
        $this->Admin_model->rest_password($password, $string);
    }

    //
    public function sent_mail_restpassword($password, $string) {
        $subject = "Password Rest";
        $from = "FROM: Rest Password <SealesDepartment@darictrade.com>";

        // send to this email address:
        $email = $password;
//        $email = 'khalidzaibi1@gmail.com';
        // message body

        $body = "Please follow given link for rest password...\r\n\r\n";

        $body .= "Best Regrds,  \r\n";
        $body .= "darictrade.com.\r\n";
        $body .= "-----------------\n\r\n";
        $body .= 'darictrade.com/admeeno/rooteeno/password_rest_link/' . $string;


        if (!mail($email, $subject, $body, $from)) {
            echo "Error Sending Email!";
        } else {
            //echo "yes";
        }
    }

    public function change_password() {
        $password = strip_tags($this->input->post("password"));
        $string = ($this->input->post("string"));
        $yes = $this->Admin_model->change_password($password, $string);
        if ($yes) {
            $this->session->set_flashdata("rest", "Password saved successfully !");
            redirect("admeeno/rooteeno/index");
        }
    }

    public function password_rest_link() {
        $this->load->view("admin_views/rest-password-page");
    }

    //


    public function image() {
        $this->load->view("admin_views/image-upload");
    }

    //
    public function image_upload() {
        $config['upload_path'] = './uploads_products/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = $this->upload->data();
//            $data = $this->upload->data();

            $config['image_library'] = 'gd2';
            $config['source_image'] = $data["full_path"];
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['new_image'] = $data["file_path"] . "/" . "thumbs" . "/" . $data["file_name"];
            $config['width'] = 75;
            $config['height'] = 50;

            $this->load->library('image_lib', $config);

            print_r($this->image_lib->resize());

            //$this->load->view("admin_views/image-upload");
        }
    }

}
