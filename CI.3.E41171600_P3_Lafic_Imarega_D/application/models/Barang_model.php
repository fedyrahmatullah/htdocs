<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model{

    //mendefinisikan object private
    private $_table = "tbl_barang";

    //mendefinisikan object bersifat public

    public $KodeBarang;
    public $NamaBarang;
    public $DeskripsiBarang;
    public $HargaBarang;
    public $StockBarang;
    public $kodesuplier;

    //mendefinisikan aturan masukan data yang akan dimasukkan ke tabel
    public function rules ()
    {
        return [
            [   'field' => 'NamaBarang',
                'label'=>'Nama Barang',
                'rules'=>'required'],

            [   'field' => 'DeskripsiBarang',
                'label'=>'Deskripsi Barang',
                'rules'=>'required'],

            [   'field' => 'HargaBarang',
                'label'=>'Harga Barang',
                'rules'=>'numeric'],    

            [   'field' => 'StockBarang',
                'label'=>'Stock Barang',
                'rules'=>'numeric'],

            [   'field' => 'kodesuplier',
                'label'=>'Kode Suplier',
                'rules'=>'required']
        ]
    }

    //mengambil semua data pada tabel

    public function getAll ()
    {
        return $this->db->get($this->_table)->result(); 
    }   

    public function getById()
    {
        return $this->db->get_where($this->_table, ["KodeBarang"=$id])->row();
    }

    //menyimpan data
    public function save()
    {
        $post = $this->input->post();
        $this->KodeBarang = uniqid();
        $this->NamaBarang = $post ["NamaBarang"];
        $this->DeskripsiBarang = $post ["DeskripsiBarang"];
        $this->HargaBarang = $post ["HargaBarang"];
        $this->StoctBarang = $post ["StockBarang"];
        $this->kodesuplier = $post ["kodesuplier"];
        $this->db->insert($this->_table,$this);
    }

    //mengedit/mengubah data
    public function update()
    {
        $post = $this->input->post();
        $this->KodeBarang = $post ["id"];
        $this->NamaBarang = $post ["NamaBarang"];
        $this->DeskripsiBarang = $post ["DeskripsiBarang"];
        $this->HargaBarang = $post ["HargaBarang"];
        $this->StoctBarang = $post ["StockBarang"];
        $this->kodesuplier = $post ["kodesuplier"];
        $this->db->update($this->_table, $this, array ('KodeBarang'=>$post['id'])) ;
    }

    
}