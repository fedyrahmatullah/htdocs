<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct(){
        parent ::__construct();
        
        //untuk pemanggilan model
        $this->load->model("Barang_model");
    }
	public function index()
	{
		$this->load->view('admin/barang/daftar_barang');
    }
}