<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar4 extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data4');
	}
 
	function user(){
		$data['user'] = $this->m_data4->ambil_data()->result();
		$this->load->view('v_user4.php',$data);
	}
 
}