<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Transaksi_model', 'transaksi');
        $this->load->library('form_validation');
    }

    public function index() {
        // Retrieve transaction data from the model
        $data['transaksi'] = $this->transaksi->getAllTransaksi();

        // Load the view to display transaction data
        $this->load->view('transaksi/index', $data);
    }


    public function tambah_save() {
        // Your tambah_save method code here
        //validasi server side
    $this->form_validation->set_rules('kodetransaksi','Kode transaksi','required');
    $this->form_validation->set_rules('tanggaltransaksi','tanggal transaksi','required');
    $this->form_validation->set_rules('kodeproduk','kode produk','required');
    $this->form_validation->set_rules('kodemember','kode member','required');
    $this->form_validation->set_rules('total','total','required');
    if($this->form_validation->run() == FALSE){
        //validasi menemukan error
        echo validation_errors();
    } else {
        //handle upload foto
            $kodetransaksi = $this->input->post('kodetransaksi');
            $tanggaltransaksi = $this->input->post('tanggaltransaksi');
            $kodeproduk = $this->input->post('kodeproduk');
            $kodemember = $this->input->post('kodemember');
            $total = $this->input->post('total');
            
            $data = array(
                'kodetransaksi' => $kodetransaksi,
                'tanggaltransaksi' => $tanggaltransaksi,
                'kodeproduk' => $kodeproduk,
                'kodemember' => $kodemember,
                'total' => $total,
            );
            var_dump($data);
            $this->db->insert('transaksi',$data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
            redirect(base_url('transaksi'));
        }
    
    }
    
    public function detail($id) {
        // Your detail method code here
    }
    public function tambahs(){
        $this->load->view('transaksi/tambah');
    }

}
