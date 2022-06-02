<?php 
class Feedback extends CI_Controller 
{
	public function response($code,$msg)
	{
		echo json_encode(array('statusCode'=>$code,'message'=>$msg));
	}
    public function ajax_feedback()
	{
		try{			
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', "name ", 'required');
		$this->form_validation->set_rules('email', "email", 'required|valid_email');
		$this->form_validation->set_rules('phone', "phone", 'required');
		$this->form_validation->set_rules('message', 'message', 'required');
		if($this->form_validation->run() == true)
		{
			$data= array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'phone'=>$this->input->post('phone'),
				'message'=>$this->input->post('message'),
			);
			
			if($this->db->insert('feedback',$data)){
				$this->response(200,'Thankyou for Feedback');
			}
			else{
				$this->response(210,'error in saving record');
			}
		}
		else
		{
			//validation_errors();
			$this->response(210,validation_errors());
		}
	}catch(\Exception $e)
	{	
		
		$this->response(210,$e->getMessage());
	}
		
	}
    	
}
?> 
