<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Label extends CI_Controller {

   
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata("Logged_in")) {
            redirect("admin");
        }
        
        $this->load->model("Admin_model");
         $this->load->model("label_model");
    }

    //

     public function index(){
        $data["contents"] = "label_list";
        $this->load->view("admin_views/admin_template", $data);
    }

    public function add_label(){
        $data["contents"] = "add_label";
        $this->load->view("admin_views/admin_template", $data);
    }
    function addlabel()
    {
        // set form validation rules
      // // if($this->input->post('label_img_url')){
      //   $config['upload_path'] = './admin_assets/uploads/images/label/';
   
      //           $config['allowed_types'] = 'gif|jpg|png';
      //           // $config['max_size'] = '2048';
      //           // $config['max_width'] = '2000';
      //           // $config['max_height'] = '2000';

      //           $this->load->library('upload', $config);

      //           if(!$this->upload->do_upload('label_img_url')){
      //               $errors = array('error' => $this->upload->display_errors());
      //               print_r($errors); 
      //               // $post_image = 'noimage.jpg';
      //           } else {
      //               $data =  $this->upload->data();
      //               $post_image = $data['file_name'];
      //           }

//}
            //insert user details into dba
            $data = array(
                'label_name' => $this->input->post('label_name'), 
                 'label_address' => $this->input->post('label_address'),
                  'label_contact' => $this->input->post('label_contactlabel_contact'),
                   'label_country' => $this->input->post('label_country'),
                    'label_phone' => $this->input->post('label_phone'),
                     'label_fax' => $this->input->post('label_fax'),
                      'label_web' => $this->input->post('label_web'),
                       'use_main_detail' => $this->input->post('use_main_detail'),
                        'label_cont_email' => $this->input->post('label_cont_email'),
                         'label_main_email' => $this->input->post('label_main_email'),


                    
                'label_fb' => $this->input->post('label_fb'),
                'label_twitter' => $this->input->post('label_twitter'),
                'label_myspace' => $this->input->post('label_myspace'),
                'label_youtube' => $this->input->post('label_youtube'),
                'label_soundcloud' => $this->input->post('label_soundcloud'),
                'label_rss' => $this->input->post('label_rss'),
                'label_digg' => $this->input->post('label_digg'),
                'label_tumblr' => $this->input->post('label_tumblr'),
                'label_instagram' => $this->input->post('label_instagram'),
                'label_google' => $this->input->post('label_google'),


                'label_feedback_email' => $this->input->post('label_feedback_email'), 
                 // 'label_distribute' => $this->input->post('label_distribute'),
                  'label_parent' => $this->input->post('label_parent'),
                   'label_sublabel' => $this->input->post('label_sublabel'),
                    'label_established' => $this->input->post('label_established'),
                     'label_catalog' => $this->input->post('label_catalog'),

                     // 'label_format' => $this->input->post('label_format'), 
                      'label_artist1' => $this->input->post('label_artist1'),
                       'label_artist2' => $this->input->post('label_artist2'),
                        'label_artist3' => $this->input->post('label_artist3'),
                         'label_artist4' => $this->input->post('label_artist4'),
                          'label_artist5' => $this->input->post('label_artist5'),

                           'label_main_genre' => $this->input->post('label_main_genre'),
                            'label_sec_genre' => $this->input->post('label_sec_genre'),

                'label_biography' => $this->input->post('label_biography')
              
               

            );
     print_r($data);
  
            if ($this->label_model->insert_label($data))
            {
                $this->session->set_flashdata('successmsg','

                <div class="alert alert-success fade in m-b-15">
                                <strong>Success!</strong>
                                New Artist has been created Successfuly!
                                <span class="close" data-dismiss="alert">&times;</span>
                            </div>');
                redirect('admin/label');
            }
            else
            {
                // error
                $this->session->set_flashdata('successmsg','

 <div class="alert alert-success fade in m-b-15">
                                <strong>Warning!</strong> 
                                  Oops! Error.  Please try again later!
                                <span class="close" data-dismiss="alert">&times;</span>
                            </div>');
                redirect('admin/label');
            }
        
        }
}

?>