
<?php
class Career extends CI_Controller
{
	public function response($code, $msg)
	{
		echo json_encode(array('statusCode' => $code, 'message' => $msg));
	}

	public function file_check($str)
	{
		$this->load->helper('file');
		$allowed_mime_type_arr = array('application/pdf');
		$mime = get_mime_by_extension($_FILES['resume']['name']);
		if (isset($_FILES['resume']['name']) && $_FILES['resume']['name'] != "") {
			if (in_array($mime, $allowed_mime_type_arr)) {
				return true;
			} else {
				$this->form_validation->set_message('file_check', 'Please select only pdf file.');
				return false;
			}
		} else {
			$this->form_validation->set_message('file_check', 'Please choose a file to upload.');
			return false;
		}
	}
	public function age_verification($age)
	{
		$dob = new DateTime($age);
		$now = new DateTime();
		if ($now->diff($dob)->y < 18) {

			$this->form_validation->set_message('age_verification', 'Age must be 18+.');
			return false;
		}
		return true;
	}

	public function ajax_career()
	{
		try {

			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullName', "Name ", 'required');
			$this->form_validation->set_rules('dob', "DoB", 'required|callback_age_verification');
			$this->form_validation->set_rules('email', "Email", 'required|valid_email');
			$this->form_validation->set_rules('resume', '', 'callback_file_check');
			if ($this->form_validation->run() == true) {
				$pdf_image = '';
				if ($_FILES['resume']['size'] > 0) {

					$this->load->library('upload');
					$config['upload_path'] = 'uploads/resumes/';
					$config['allowed_types'] = 'pdf';

					//$config['max_size'] = '300';
					//$config['max_width'] = '300';
					//$config['max_height'] = '150';
					$config['file_ext_tolower'] = TRUE;
					$config['max_filename'] = 30;
					$config['encrypt_name'] = TRUE;
					$this->upload->initialize($config);

					if (!$this->upload->do_upload('resume')) {
						$error = $this->upload->display_errors();
						$this->response(210, $error);
						exit;
					}

					$pdf_image = $this->upload->file_name;
				}
				$data = array(
					'fullname' => $this->input->post('fullName'),
					'dob' => $this->input->post('dob'),
					'birthcountry' => $this->input->post('birthcountry'),
					'birthcity' => $this->input->post('birthcity'),
					'martial' => $this->input->post('martial'),
					'gender' => $this->input->post('gender'),
					'email' => $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'address' => $this->input->post('address'),
					'qualification' => $this->input->post('qualification'),
					'experience' => $this->input->post('experience'),
					'jobapply' => $this->input->post('jobapply'),
					'resume' => $pdf_image,
					'terms' => !empty($this->input->post('terms')) ? 'accepted' : 'no',
				);

				if ($this->db->insert('career', $data)) {
					$this->response(200, 'Thankyou for applying');
				} else {
					$this->response(210, 'error in saving record');
				}
			} else {
				//validation_errors();
				$this->response(210, validation_errors());
			}
		} catch (\Exception $e) {
			$this->response(210, $e->getMessage());
		}
	}
}
?> 
