<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ngegame7 extends CI_Controller {
	
	function index(){
		$this->load->library('sukagaming7');
		$this->sukagaming7->nama_saya();
                echo "<br/>";
                $this->sukagaming7->nama_kamu("saya suka saya suka");
	}
 
}