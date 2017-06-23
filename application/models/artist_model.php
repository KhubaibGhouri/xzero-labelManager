<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artist_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	
	
	
	function insert_artist($data)
    {
		return $this->db->insert('xz_artist', $data);
	}
function get_all_artist()
    {

          $this->db->select("*");
        $this->db->from('xz_artist');
        
        $this->db->order_by("id ", "ASC");
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
       
	}


	 public function delete_artist($id) {

        $this->db->where('id', $id);

        $this->db->delete('xz_artist');

        if ($this->db->_error_number()) {

            return false;
        } else {

            return true;
        }

    }
 function getArtist($id) {

        $query = $this->db->get_where('xz_artist', array('id' => $id));

        if ($query->num_rows() > 0) {

            $result = $query->result_array();
        return $result;
        
           
        }
    }


	function updateArtist($data) {

       echo $data['id'];
       
      $this->db->where('id', $data['id']);
			return $this->db->update('xz_artist', $data);

      
    }

}

?>