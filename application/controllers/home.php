<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Home extends CI_Controller {
	
    
    
	public function index(){
	    echo "its working";
        
        $this->load->view('header');
        $this->load->view('footer');
	}
}

