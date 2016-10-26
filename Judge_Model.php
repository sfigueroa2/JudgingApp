<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Judge_Model extends CI_Model
{
     function __construct()
     {
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

             $query = $this->db->get_where('Poster', array('PosterID' => $slug));
             return $query->row_array();
     }
     public function FindPoster($PosterID = FALSE)
 {
         if ($PosterID === FALSE)
         {
                 $query = $this->db->get('Poster');
                 return $query->result_array();
         }

         $query = $this->db->get_where('Poster', array('PosterID' => $PosterID));
         return $query->row_array();
 }
 public function Post_Score()
 {
   $data = array(
       'Criteria1' => $this->input->post('Criteria1'),
       'Criteria2' => $this->input->post('Criteria2'),
       'Criteria3' => $this->input->post('Criteria3'),
       'Criteria4' => $this->input->post('Criteria4'),
       'Criteria5' => $this->input->post('Criteria5'),
       'Criteria6' => $this->input->post('Criteria6'),
       'Criteria7' => $this->input->post('Criteria7'),
       'Criteria8' => $this->input->post('Criteria8'),
       'Criteria9' => $this->input->post('Criteria9'),
       'Criteria10' => $this->input->post('Criteria10'),
       'Comments' => $this->input->post('comments')
   );

   return $this->db->insert('Scores', $data);
 }

}?>
