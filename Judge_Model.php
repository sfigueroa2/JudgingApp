<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Judge_Model extends CI_Model
{
     function __construct()
     {dfsfddfsdfsdfdfsdfdf
          // Call the Model constructor
          parent::__construct();
          $this->load->database();
     }

     //get the username & password from tbl_usrs
     function get_user($usr, $pwd)
     {
          $sql = "select * from Judge where JudgeName = '" . $usr . "' and JudgePass = '" . $pwd . "' ''";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }
     public function get_Posters($slug = FALSE)
     {
             if ($slug === FALSE)
             {
                     $query = $this->db->get('Poster');
                     return $query->result_array();
             }

             $query = $this->db->get_where('Poster', array('slug' => $slug));
             return $query->row_array();
     }

}?>
