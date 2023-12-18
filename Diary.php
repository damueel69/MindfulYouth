<?php
// Diary.php
class Diary extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Jurnal_model');
    }

    public function index() {
        // Load view untuk form entri jurnal
        $this->load->view('vw_mental');
    }

    public function save_entry() {
        // Tangkap data dari form
        $data = array(
            'judul_jurnal' => $this->input->post('judul_jurnal'),
            'isi_jurnal' => $this->input->post('isi_jurnal'),
            'rating_mood' => $this->input->post('rating_mood'),
            'waktu' => date('Y-m-d H:i:s') // Waktu saat ini
        );
    
        // Panggil model untuk menyimpan data ke dalam database
        $result = $this->Jurnal_model->save_entry($data);
    
        if ($result) {
            // Redirect atau tampilkan pesan sukses
            redirect('diary');
        } else {
            // Tampilkan pesan error
            echo "Failed to save entry: " . $this->db->error()['message']; // Display specific error message
        }
    }
    
}
?>
