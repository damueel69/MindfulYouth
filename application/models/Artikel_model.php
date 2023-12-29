<?php
// Artikel_model.php (Model)
class Artikel_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllArticles() {
        // Ambil semua data artikel dari database
        $query = $this->db->get('artikel');
        return $query->result();
    }

    public function createArticle($data) {
        $this->db->insert('artikel', $data);
        return $this->db->insert_id(); // Mengembalikan ID dari artikel yang baru saja dibuat
    }

    // Artikel_model.php (Model)
    public function getArticlesByCategory($category)
    {
        $this->db->where('kategori', $category);
        return $this->db->get('artikel')->result();
    }

    public function getArticleById($id) {
        // Mengambil artikel dari database berdasarkan ID
        $query = $this->db->get_where('artikel', array('id' => $id));
        return $query->row(); // Mengembalikan satu baris data artikel
    }

}
