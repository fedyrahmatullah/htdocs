<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Download6 extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}
 
	public function index(){		
		$this->load->view('v_download6');
	}
 
	public function lakukan_download(){				
		force_download('1.jpg',NULL);
	}	
 
}