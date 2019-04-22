<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar2 extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}
 
	public function index(){
		echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	}
 
	public function halo(){
		$data = array(
			'judul' => "Cara Membuat View Pada CodeIgniter",
			'tutorial' => "CodeIgniter"
			);
		$this->load->view('view_belajar2', $data);
	}
 
}