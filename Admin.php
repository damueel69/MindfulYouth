<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }


    public function index()
    {
        $data['judul'] = "Halaman Data";
        $data['data']['users'] = $this->Admin_model->get();
        
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();       
        
        $this->load->view("Admin/dashboard", $data);
        
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Data";
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->Admin_model->get();

        $this->form_validation->set_rules('username', 'Username', 'required',[
            'required'=>'Username Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required',[
            'required'=>'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required',[
            'required'=>'Email  Wajib di isi'
        ]);
        $this->form_validation->set_rules('role', 'Role', 'required',[
            'required'=>'Role Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|integer',[
            'required'=>'NO HP Mahasiswa Wajib di isi',
            'integer'=>'NO HP harus angka'
        ]);
        $this->form_validation->set_rules('specialist', 'Specialist', 'required',[
            'required'=>'Specialist Wajib di isi'
        ]);
        $this->form_validation->set_rules('gelar', 'Gelar', 'required',[
            'required'=>'Gelar Wajib di isi'
        ]);

        if($this->form_validation->run() == false) {
        $this->load->view("Admin/vw_tambah_data", $data);
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'role' => $this->input->post('role'),
                'no_hp' => $this->input->post('no_hp'),
                'specialist' => $this->input->post('specialist'),
                'gelar' => $this->input->post('gelar'),       
            ];
            $this->Admin_model->insert($data);
            $this->session->set_flashdata('message','<div class="alert-success" role="alert">
            Data Berhasil Ditambah!</div>');
            redirect('Admin');
        }
    }

    public function detail($id)
{
    $data['judul'] = "Detail Data";
    $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
    $data['users'] = $this->Admin_model->getById($id);

    if ($data['users'] !== null) {
        $this->load->view('Admin/vw_detail_data', $data);
    } else {
        // Handle jika data tidak ditemukan
        echo "Data not found";
    }
}

    public function edit($id)
    {
        $data['judul'] = "Edit Data";
        $data['users'] = $this->Admin_model->getById($id);
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('username', 'Username', 'required',[
            'required'=>'Username Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required',[
            'required'=>'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required',[
            'required'=>'Email  Wajib di isi'
        ]);
        $this->form_validation->set_rules('role', 'Role', 'required',[
            'required'=>'Role Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|integer',[
            'required'=>'NO HP Mahasiswa Wajib di isi',
            'integer'=>'NO HP harus angka'
        ]);
        $this->form_validation->set_rules('specialist', 'Specialist', 'required',[
            'required'=>'Specialist Wajib di isi'
        ]);
        $this->form_validation->set_rules('gelar', 'Gelar', 'required',[
            'required'=>'Gelar Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("Admin/vw_ubah_data", $data);
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'role' => $this->input->post('role'),
                'no_hp' => $this->input->post('no_hp'),
                'specialist' => $this->input->post('specialist'),
                'gelar' => $this->input->post('gelar'),
            ];
            $id = $this->input->post('id_user');
            $this->Admin_model->update(['id_user' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil DiUbah!</div>');
            redirect('Admin/index');
        }
    }
   
public function hapus($id)
{
    $this->load->model('Admin_model'); // Tambahkan baris ini untuk memuat model

    // Panggil metode getById untuk mendapatkan data sebelum dihapus
    $data = $this->Admin_model->getById($id);

    // Pastikan data ditemukan sebelum mencoba menghapus
    if ($data) {
        $this->Admin_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil Dihapus!</div>');
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data tidak ditemukan!</div>');
    }

    redirect('Admin/index');
}
}