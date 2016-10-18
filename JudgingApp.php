<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JudgingApp extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->load->helper('url');
    $this->load->database();
    $this->load->helper('html');
    $this->load->model('Judge_Model');
  }
  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));

    $username = $this->input->post("username");
    $password = $this->input->post("password");

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('JudgingApp/myform');
    }
    else
    {
      //validation succeeds
      if ($this->input->post('btn_login') == "Login")
      {
        //check if username and password is correct
        $usr_result = $this->Judge_Model->get_user($username, $password);
        if ($usr_result > 0)
        {
          //set the session variables
          $sessiondata = array('login' => TRUE,'JudgeName' => $username,'uid' => $uresult[0]->id);
          $sessiondata = array($this->session->set_userdata($sessiondata));
          redirect("JudgingApp/MainMenu");
          }
          else
          {

           redirect('JudgingApp/index');
          }
        }
        else
        {
          redirect('Index');
        }
      }
    }
    public function view($slug = NULL)
 {
     $data['Poster'] = $this->Judge_Model->get_Posters($slug);

     if (empty($data['Poster_item']))
     {
             show_404();
     }

     $data['title'] = $data['Poster_item']['title'];
     //$this->load->view('templates/header', $data);
     //$this->load->view('/view', $data);
     //$this->load->view('templates/footer');
 }
    public function MainMenu()
    {
      $data['Poster'] = $this->Judge_Model->get_Posters();
      $this->load->view('JudgingApp/MainMenu',$data);


      if (isset($this->session->userdata['JudgeName']))
      {
        echo $this->session->userdata['JudgeName'];
      }
      else
      {
        echo nothing;
      }
    }


}


  ?>
