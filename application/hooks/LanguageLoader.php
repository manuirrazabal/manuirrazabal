<?php



class LanguageLoader{

	private $ci;

	 function __construct(){
	 	 $this->ci =& get_instance();

        if(!isset($this->ci->session)){  //Check if session lib is loaded or not
              $this->ci->load->library('session');  //If not loaded, then load it here
        }
	 }

    function initialize() {

        $this->ci->load->helper('language');
        $siteLang = $this->ci->session->userdata('site_lang');
        
        if ($siteLang) {
            $this->ci->lang->load('messages',$siteLang);
        } else {
            $this->ci->lang->load('messages','english');
        }
    }
}
