<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('auth_model');
    }

    public function login() {
        $data['judul'] = 'Login';
        $this->load->view("layout/auth_header", $data);
        $this->load->view("auth/login");
        $this->load->view("layout/auth_footer");
    }

    public function process_login() {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
    
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $this->load->view("layout/auth_header", $data);
            $this->load->view("auth/login");
            $this->load->view("layout/auth_footer");
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
    
            $user = $this->auth_model->get_user_by_email($email);
    
            if ($user && password_verify($password, $user->password)) {
                // Check user role
                if ($user->role == 'Admin') {
                    // Redirect admin to the admin home page
                    redirect('Home/index_admin');
                } else {
                    // Redirect other users to the regular home page
                    redirect('Home');
                }
            } else {
                // Login gagal
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau password salah.</div>');
                redirect('auth/login');
            }
        }
    }

    public function register() {
        $data['judul'] = 'Registration';
        $this->load->view("layout/auth_header", $data);
        $this->load->view("auth/registrasi");
        $this->load->view("layout/auth_footer");
    }

    public function process_registration() {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]',
            [
                'is_unique' => 'Email sudah digunakan',
                'valid_email' => 'Email tidak valid',
                'required' => 'Email harus diisi',
            ]
        );

        $this->form_validation->set_rules(
            'password', 'Password', 'required|trim|min_length[6]|matches[password2]',
            [
                'matches' => 'Password tidak sama',
                'min_length' => 'Password terlalu pendek',
                'required' => 'Password harus diisi'
            ]
        );

        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registration';
            $this->load->view("layout/auth_header", $data);
            $this->load->view("auth/registrasi");
            $this->load->view("layout/auth_footer");
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => 'User',
            ];

            if ($this->auth_model->register_user($data)) {
                // Pendaftaran berhasil
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akunmu telah berhasil terdaftar, Silahkan Login!</div>');
                redirect('auth/login');
            } else {
                // Pendaftaran gagal
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pendaftaran gagal. Silakan coba lagi.</div>');
                redirect('auth/register');
            }
        }
    }

    public function check_login() {
        if ($this->session->userdata('user_id')) {
            // User is already logged in, redirect to the home page or another appropriate page.
            redirect('Home');
        } else {
            // User is not logged in, you can handle this case accordingly.
            // For example, show a login form.
            redirect('auth/login');
        }
    }

    public function logout() {
        // Logout logic here
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', 'Anda telah berhasil logout.');
        redirect('auth/login'); // Sesuaikan dengan URL halaman login Anda
    }
}
?>
