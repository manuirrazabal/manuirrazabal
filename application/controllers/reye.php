<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reye extends CI_Controller {

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
		
		$this->layout->setTitle("Manuirrazabal - ");
		$this->layout->setDescripcion("Reye description");	
		
		//$this->session->set_userdata('grupo_controlador', $this->general_model->getMenuGrupo($this->session->userdata('controlador')));
    }

	public function index(){

		$this->layout->view('header_detail');
		$this->layout->alternative_view('reye');
		$this->layout->alternative_view('footer');
		
	}
}
