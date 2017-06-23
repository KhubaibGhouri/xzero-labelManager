<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artist extends CI_Controller {

   
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata("Logged_in")) {
            redirect("admin");
        }
        
        $this->load->model("Admin_model");
        $this->load->model("artist_model");

    }

    //

     public function index(){
        $data["contents"] = "add_artist";
        $this->load->view("admin_views/admin_template", $data);
    }

    public function view(){
        $data['artist'] = $this->artist_model->get_all_artist();
            
            if(empty($data['artist'])){
                show_404();
            }
  //print_r($data);
  
            //$data['title'] = $data->$posts->title;
        $data["contents"] = "artist_list";
        $this->load->view("admin_views/admin_template", $data);
    }
    

function addartist()
    {
        // set form validation rules
      // if($this->input->post('art_img_url')){
        $config['upload_path'] = './admin_assets/uploads/images/artist/';
   
                $config['allowed_types'] = 'gif|jpg|png';
                // $config['max_size'] = '2048';
                // $config['max_width'] = '2000';
                // $config['max_height'] = '2000';

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('art_img_url')){
                    $errors = array('error' => $this->upload->display_errors());
                    print_r($errors); die;
                    // $post_image = 'noimage.jpg';
                } else {
                    $data =  $this->upload->data();
                    $post_image = $data['file_name'];
                }

//}
            //insert user details into dba
            $data = array(
                'art_name' => $this->input->post('art_name'),
               
                'art_web' => $this->input->post('art_web'),
                'art_type' => $this->input->post('art_type'),
                'art_fb' => $this->input->post('art_fb'),
                'art_twitter' => $this->input->post('art_twitter'),
                'art_myspace' => $this->input->post('art_myspace'),
                'art_youtube' => $this->input->post('art_youtube'),
                'art_soudcloud' => $this->input->post('art_soudcloud'),
                'art_rss' => $this->input->post('art_rss'),
                'art_biography' => $this->input->post('art_biography'),
                'art_img_url' =>$post_image

            );
     
            if ($this->artist_model->insert_artist($data))
            {
                $this->session->set_flashdata('successmsg','

                <div class="alert alert-success fade in m-b-15">
                                <strong>Success!</strong>
                                New Artist has been created Successfuly!
                                <span class="close" data-dismiss="alert">&times;</span>
                            </div>');
                redirect('admin/artist');
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
                redirect('admin/artist');
            }
        
        }

         public function delete($id) {

        $result = $this->artist_model->delete_artist($id);

         if ($this->artist_model->delete_artist($id))
            {
                $this->session->set_flashdata('successmsg','

                <div class="alert alert-success fade in m-b-15">
                                <strong>Success!</strong>
                                 Artist record has been deleted Successfuly!
                                <span class="close" data-dismiss="alert">&times;</span>
                            </div>');
                redirect('admin/artist/view');
            }
            else
            {
                // error
                $this->session->set_flashdata('successmsg','

 <div class="alert alert-warning fade in m-b-15">
                                <strong>Warning!</strong> 
                                  Oops! Error.  Please try again later!
                                <span class="close" data-dismiss="alert">&times;</span>
                            </div>');
                redirect('admin/artist/view');
            }
    }

     public function edit($id) {

        $data['id'] = $id;

        $data['artist'] = $this->artist_model->getArtist($id);
        $data['action'] = 'edit';
        
        
         $data["contents"] = "edit_artist";
        $this->load->view("admin_views/admin_template", $data);
    }
 public function update($id) {

        $data['id'] = $id;
if(!empty( $data['file_name'])){
  $config['upload_path'] = './admin_assets/uploads/images/artist/';
   
                $config['allowed_types'] = 'gif|jpg|png';
                // $config['max_size'] = '2048';
                // $config['max_width'] = '2000';
                // $config['max_height'] = '2000';

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('art_img_url')){
                    $errors = array('error' => $this->upload->display_errors());
                    print_r($errors); ;
                    // $post_image = 'noimage.jpg';
                } else {
                    $data =  $this->upload->data();
                 echo    $post_image = $data['file_name'];
                 die();
                }

}
            //insert user details into dba
            $data = array(
                'id' => $this->input->post('id'),
                'art_name' => $this->input->post('art_name'),
               
                'art_web' => $this->input->post('art_web'),
                'art_type' => $this->input->post('art_type'),
                'art_fb' => $this->input->post('art_fb'),
                'art_twitter' => $this->input->post('art_twitter'),
                'art_myspace' => $this->input->post('art_myspace'),
                'art_youtube' => $this->input->post('art_youtube'),
                'art_soudcloud' => $this->input->post('art_soudcloud'),
                'art_rss' => $this->input->post('art_rss'),
                'art_biography' => $this->input->post('art_biography'),
                
            );
            if(isset($post_image)){
                $data = array(
            
                 'art_img_url' => $post_image
                
            );
}
     // print_r($data);
     // die();
            if ($this->artist_model->updateArtist($data))
            {
                $this->session->set_flashdata('successmsg','

                <div class="alert alert-success fade in m-b-15">
                                <strong>Success!</strong>
                                Artist Info has been update Successfuly!
                                <span class="close" data-dismiss="alert">&times;</span>
                            </div>');
                redirect('admin/artist/edit/'.$id);
            }
            else
            {
                // error
                $this->session->set_flashdata('successmsg','

 <div class="alert alert-warning fade in m-b-15">
                                <strong>Warning!</strong> 
                                  Oops! Error.  Please try again later!
                                <span class="close" data-dismiss="alert">&times;</span>
                            </div>');
                redirect('admin/artist/edit/'.$id);
            }
        
        }


    

}

?>