<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){    

        parent::__construct();
        $this->layout->setLayout('default');
		
		$this->layout->setTitle("Manuirrazabal - Index");
		$this->layout->setDescripcion("Manuirrazabal");	
		
		//$this->session->set_userdata('grupo_controlador', $this->general_model->getMenuGrupo($this->session->userdata('controlador')));
    }

	public function index(){
		

		if ($this->input->post()){

			$name = $this->input->post("name",true);
			$email = $this->input->post("email",true);
			$phone = $this->input->post("phone",true);
			$message = $this->input->post("message",true);
			$human = intval($this->input->post("human",true));

			$from = 'Demo Contact Form'; 
			$to = 'manuirrazabal@manuirrazabal.com'; 
			$subject = 'Message from Contact Demo ';
			
			$body = "From: $name\n E-Mail: $email\n Message:\n $message";

			// Check if name has been entered
			if (!$this->input->post("name",true)) {
				$errName = 'Please enter your name';
			}
			
			// Check if email has been entered and is valid
			if (!$this->input->post("email",true) || !filter_var($this->input->post("email",true), FILTER_VALIDATE_EMAIL)) {
				$errEmail = 'Please enter a valid email address';
			}
			
			//Check if message has been entered
			if (!$this->input->post("message",true)) {
				$errMessage = 'Please enter your message';
			}
			//Check if simple anti-bot test is correct
			if ($human !== 7) {
				$errHuman = 'Your anti-spam is incorrect';
			}

		// If there are no errors, send the email
			if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
				if (mail ($to, $subject, $body, $from)) {
					$this->session->set_flashdata('ControllerMessage', '<div class="alert alert-success">Thank You! I will be in touch</div>');
						redirect(base_url().'index',  301);
					
				} else {
					$this->session->set_flashdata('ControllerMessage', '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>');
					redirect(base_url().'index',  301);
					
				}
			}
			
			
		}

		$this->layout->view('header');
		$this->layout->alternative_view('default', compact("errName", "errEmail", "errMessage", "errHuman", "result", "name", "email", "phone", "message", "human"));
		$this->layout->alternative_view('footer');


		
	}
}
