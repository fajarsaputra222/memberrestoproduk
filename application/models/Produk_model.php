    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    public $table = "produk";
    public function __construct() {
        parent::__construct();
    }
    public function getAllProduk() {
        // Logika untuk mengambil semua data produk dari tabel
        return $this->db->get('produk')->result();
    }

    public function getProdukById($id) {
        // Logika untuk mengambil data produk berdasarkan ID dari tabel
        return $this->db->get_where('produk', array('id' => $id))->row();
    }

    public function insert($data) {
        // Insert data ke tabel 'produk'
        return $this->db->insert($this->table, $data);
    }
}
