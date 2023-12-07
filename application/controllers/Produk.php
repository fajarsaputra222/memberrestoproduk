<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Produk_model','produk');
    }

    public function tambahs(){
        $this->load->view('Produk/tambah');
    }

    public function index() {
        // Mengambil data produk dari model
        $data['produk'] = $this->produk->getAllProduk();

        // Memuat tampilan daftar produk
        $this->load->view('Produk/index', $data);
    }

    public function tambah_save(){
        //validasi server side
        $this->form_validation->set_rules('kodeproduk','Kode Produk','required');
        $this->form_validation->set_rules('namaproduk','Nama Produk','required');
        $this->form_validation->set_rules('harga','Harga','required');
        $this->form_validation->set_rules('stokproduk','Stok Produk','required');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required');
        if($this->form_validation->run() == FALSE){
            //validasi menemukan error
            echo validation_errors();
        } else {
            //handle upload foto
            $config['upload_path'] = './fotoproduk/';
            $config['allowed_types'] = 'gif|jpg|png|PNG|jpeg|JPEG';
            $config['max_size'] = 2048000;
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $foto = $this->upload->data();
                $foto = $foto['file_name'];
                $kodeproduk = $this->input->post('kodeproduk');
                $namaproduk = $this->input->post('namaproduk');
                $harga = $this->input->post('harga');
                $stokproduk = $this->input->post('stokproduk');
                $deskripsi = $this->input->post('deskripsi');
                
                $data = array(
                    'kodeproduk' => $kodeproduk,
                    'namaproduk' => $namaproduk,
                    'harga' => $harga,
                    'foto' => $foto,
                    'stokproduk' => $stokproduk,
                    'deskripsi' => $deskripsi,
                );
                var_dump($data);
                $this->db->insert('produk',$data);
                $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
                redirect(base_url('produk'));
            }
        }
    }

    public function detail($id) {
        // Mengambil data produk berdasarkan ID dari model
        $data['produk'] = $this->Produk_model->getProdukById($id);

        // Memuat tampilan detail produk
        $this->load->view('produk/detail', $data);
    }
}
