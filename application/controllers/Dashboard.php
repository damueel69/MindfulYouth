<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model(['Dashboard_model', 'Chat_model', 'User_model','Artikel_model']);
        $this->dashboard = $this->Dashboard_model;
        $this->chat = $this->Chat_model;
        $this->user = $this->User_model;

        checkSession();
    }

    public function index()
    {
        if ($this->session->userdata('role') == 1) {
            $data['record'] = $this->user->get($this->session->userdata('user_id'));
            $this->template->load('template/main_template', 'dashboard/index', $data);
        } else if ($this->session->userdata('role') == 2) {
            // Logic for users with role 2
            
            $data['record'] = $this->user->get($this->session->userdata('user_id'));
            $data['users'] = $this->User_model->getUsersByRoleOne();
            $this->template->load('template/main_template', 'dashboard/role_2/index', $data);
        } else {
            $data['record'] = $this->db->get('users');
            $this->template->load('template/main_template', 'dashboard/admin/index', $data);
        }
    }

    public function post()
    {
        
    }

    public function artikel() {
        // Panggil fungsi untuk mendapatkan semua artikel dari model
        $data['articles'] = $this->Artikel_model->getAllArticles();

        // Tampilkan view
        $this->load->view('artikel/daftar_artikel', $data);
    }

    public function index_worker() {
        // Panggil fungsi untuk mendapatkan semua artikel dari model
        $data['articles'] = $this->Artikel_model->getAllArticles();

        // Tampilkan view
        $this->load->view('artikel/daftar_artikel', $data);
    }

    // Inside your controller method (e.g., showContacts)


}
