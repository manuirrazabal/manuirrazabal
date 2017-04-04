<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller {

	public function __construct() 
    {
        parent::__construct(); 
        $this->layout->setLayout('default');
        $this->layout->setTitle("404 Oopss. Page not found");
    } 

    public function index() 
    { 
        $this->output->set_status_header('404'); 
        $data['content'] = 'error_404'; // View name 
        $this->layout->view('my404',$data);//loading in my template 
    } 
}
