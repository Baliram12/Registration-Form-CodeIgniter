
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Usercon extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		 $this->load->database();
		 $this->load->model('userdata');

		
	}
	public function index()
{
	$this->load-> view('Users/Userform');
	
}

	public function demo()
	{

      
        $name = $this->input->post('name');
	 	$email = $this->input->post('email');
	 	$password = $this->input->post('password');
	 	$gender = $this->input->post('gender');
	 	$qualification = $this->input->post('qualification');
	 	$image = $this->input->post('image');
       
        $a=$this->userdata->demo($name,$email,$password,$gender,$qualification,$image);
     
        	

		 
	 	
      }
    }

?>