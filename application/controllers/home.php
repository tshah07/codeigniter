<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Home extends CI_Controller {
	
    
    
	public function index(){
        
        $this->load->view('header');
        
        $this->load->library('booking');
        $this->booking->test();
        $this->load->view('home/index');
        
        $this->load->view('footer');
	}
}

