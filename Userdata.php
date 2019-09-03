<?php

class Userdata extends CI_Model
{

	
public function demo($name,$email,$password,$gender,$qualification,$image)



	{



	   $query="INSERT INTO `registration`( `name`, `email`, `password`, `gender`,`qualification`,`image`) 
		VALUES ('$name','$email','$password','$gender','$qualification','$image')";
		$this->db->query($query);

	

	
	}
	
}
	



?>