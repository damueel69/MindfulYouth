<?php
// Artikel.php (Controller)
class Artikel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model(['Dashboard_model', 'Chat_model', 'User_model','Artikel_model']);
        $this->dashboard = $this->Dashboard_model;
        $this->chat = $this->Chat_model;
        $this->user = $this->User_model;
        $this->load->library('form_validation');


        checkSession();
    }

   
    
        public function index()
        {
            $data['articles'] = $this->Artikel_model->getAllArticles();
            $data['record'] = $this->user->get($this->session->userdata('user_id'));
            $this->template->load('template/main_template', 'artikel/daftar_artikel', $data);
        }

        public function index_worker()
        {
            $data['articles'] = $this->Artikel_model->getAllArticles();
            $data['record'] = $this->user->get($this->session->userdata('user_id'));
            $this->template->load('template/main_template', 'artikel/daftar_artikel_worker', $data);
        }

        public function create()
    {   

        // Jika ada input POST dari form
        if ($this->input->post()) {
            // Validasi data dari form
            $this->form_validation->set_rules('judul', 'Judul', 'required');
            $this->form_validation->set_rules('konten', 'Konten', 'required');
            date_default_timezone_set('Asia/Jakarta'); // Set zona waktu menjadi WIB
            $tanggal_waktu = date('Y-m-d H:i:s'); // Format sesuai dengan database MySQL



            if ($this->form_validation->run() === TRUE) {
                // Simpan data artikel ke dalam database
                $data = [
                    'judul' => $this->input->post('judul'),
                    'konten' => $this->input->post('konten'),
                    'tanggal_publikasi' => $tanggal_waktu, // Gunakan variabel waktu yang telah diformat
                    'kategori' => $this->input->post('kategori')

                ];

                $this->Artikel_model->createArticle($data);
                
                redirect('artikel/index_worker'); // Redirect ke halaman daftar artikel setelah membuat artikel baru
            }
        }

        // Tampilkan form untuk membuat artikel baru
        $this->template->load('template/main_template', 'artikel/create_artikel');
    }

    // Fungsi untuk menampilkan form edit artikel
    public function edit($id)
    {
        $data['article'] = $this->Artikel_model->getArticleById($id);

        if ($this->input->post()) {
            // Validasi data dari form
            $this->form_validation->set_rules('judul', 'Judul', 'required');
            $this->form_validation->set_rules('konten', 'Konten', 'required');

            if ($this->form_validation->run() === TRUE) {
                // Update data artikel berdasarkan ID
                $data = [
                    'judul' => $this->input->post('judul'),
                    'konten' => $this->input->post('konten'),
                    'kategori' => $this->input->post('kategori')
                ];

                $this->Artikel_model->updateArticle($id, $data);

                redirect('artikel/index_worker'); // Redirect ke halaman daftar artikel setelah mengedit artikel
            }
        }

        // Tampilkan form untuk mengedit artikel
        $this->load->view('artikel/edit_artikel', $data);
    }

    // Fungsi untuk menghapus artikel berdasarkan ID
    public function delete($id)
    {
        $this->Artikel_model->deleteArticle($id);
        redirect('artikel/index'); // Redirect ke halaman daftar artikel setelah menghapus artikel
    }

    public function detail($id) {
        $data['article'] = $this->Artikel_model->getArticleById($id);
        $this->template->load('template/main_template', 'artikel/detail_artikel', $data);
    }

    // Artikel.php (Controller)
   // Artikel.php (Controller)
public function stress()
{
    $data['articles'] = $this->Artikel_model->getArticlesByCategory('Stress');
    $data['record'] = $this->user->get($this->session->userdata('user_id'));
    $this->template->load('template/main_template', 'artikel/daftar_artikel_stress', $data);
}


public function depresi()
{
    $data['articles'] = $this->Artikel_model->getArticlesByCategory('Depresi');
    $data['record'] = $this->user->get($this->session->userdata('user_id'));
    $this->template->load('template/main_template', 'artikel/daftar_artikel_depresi', $data);
}

public function kecemasan()
{
    $data['articles'] = $this->Artikel_model->getArticlesByCategory('Kecemasan');
    $data['record'] = $this->user->get($this->session->userdata('user_id'));
    $this->template->load('template/main_template', 'artikel/daftar_artikel_kecemasan', $data);
}

public function gKepribadian()
{
    $data['articles'] = $this->Artikel_model->getArticlesByCategory('Gangguan Kepribadian');
    $data['record'] = $this->user->get($this->session->userdata('user_id'));
    $this->template->load('template/main_template', 'artikel/daftar_artikel_gKepribadian', $data);
}

public function gTidur()
{
    $data['articles'] = $this->Artikel_model->getArticlesByCategory('Gangguan Tidur');
    $data['record'] = $this->user->get($this->session->userdata('user_id'));
    $this->template->load('template/main_template', 'artikel/daftar_artikel_gTidur', $data);
}

public function rumah_tangga()
{
    $data['articles'] = $this->Artikel_model->getArticlesByCategory('Rumah Tangga');
    $data['record'] = $this->user->get($this->session->userdata('user_id'));
    $this->template->load('template/main_template', 'artikel/daftar_artikel_rumah_tangga', $data);
}
    

}
    
    ?>
    
 