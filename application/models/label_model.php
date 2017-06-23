<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Label_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	
	
	
	function insert_label($data)
    {
		return $this->db->insert('xz_label', $data);
	}
function get_all_label()
    {

          $this->db->select("*");
        $this->db->from('xz_label');
        
        $this->db->order_by("id ", "ASC");
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
       
	}


	 public function delete_label($id) {

        $this->db->where('id', $id);

        $this->db->delete('xz_label');

        if ($this->db->_error_number()) {

            return false;
        } else {

            return true;
        }

    }
 function getArtist($id) {

        $query = $this->db->get_where('xz_label', array('id' => $id));

        if ($query->num_rows() > 0) {

            $result = $query->result_array();
        return $result;
        
           
        }
    }


	function updateArtist($data) {

       echo $data['id'];
       
      $this->db->where('id', $data['id']);
			return $this->db->update('xz_label', $data);

      
    }

}

?>