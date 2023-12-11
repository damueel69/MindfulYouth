<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
// controllers/Profil.php

public function index()
{
    // Check if the user is logged in
    if (!$this->session->userdata('email')) {
        redirect('Auth/login');
    }

    // Load the user_model (or any other appropriate model) to get user information
    $this->load->model('user_model');

    // Retrieve user information based on the logged-in user's email
    $user_info = $this->user_model->get_user_info_by_email($this->session->userdata('email'));

    // Pass the user information to the view
    $data['user_info'] = $user_info;

    // Load the view
    $this->load->view('layout/header2', $data);
    $this->load->view('profil/vw_profil');
    $this->load->view('layout/footer');
}

}
