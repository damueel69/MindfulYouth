<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Chat_model', 'Segment_model', 'User_model', 'Group_model']);
        $this->chat = $this->Chat_model;
        $this->segment = $this->Segment_model;
        $this->user = $this->User_model;
        $this->group = $this->Group_model;
        $this->load->library('session');
        checkSession();


    }

    public function index()
    {
        redirect('user/setting');
    }

    public function activate()
    {
        $id = $this->uri->segment(3);

        $this->db->where('id', $id);
        $this->db->update('users', ['is_activated' => '1']);
        redirect('dashboard');
    }

    public function add()
    {
        if (isset($_POST['submit'])) {
            echo 1;
        } else {
            $this->template->load('template/main_template', 'user/add');
        }
    }

    public function setting()
    {
        $id = $this->uri->segment(3);

        if (isset($_POST['submit'])) {
            $config['upload_path']          = './uploads/avatars/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000000;

            /* Identify the config as load the library */
            $this->load->library('upload', $config);

            if (! $this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());

                echo $error['error'];
                die();
            } else {
                $image = array('upload_data' => $this->upload->data());

                $data['avatar'] = $image['upload_data']['file_name'];
            }

            $data['first_name'] = $this->input->post('first_name');
            $data['last_name'] = $this->input->post('last_name');
            $data['email'] = $this->input->post('email');
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');

            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('users', $data);

            $this->session->set_userdata('avatar', $data['avatar']);

            redirect('dashboard');
        } elseif (isset($_POST['submit_request_photo'])) {
            /* Button foto on view */
            $id = $this->uri->segment(3);

            $data['record'] = $this->user->getOne($id)->row_array();
            $data['photo'] = 1;

            $this->template->load('template/main_template', 'user/setting/index', $data);
        } else {
            /* Button foto on view */
            $id = $this->uri->segment(3);

            $data['record'] = $this->user->getOne($id)->row_array();
            $data['photo'] = 0;

            $this->template->load('template/main_template', 'user/setting/index', $data);
        }
    }
    public function edit($userId)
    {
        $this->load->model('User_model');
        $userData = $this->User_model->getUserById($userId);
        // Load the view to edit user details and pass $userData
        $this->template->load('template/main_template', 'dashboard/admin/edit_user', ['userData' => $userData]);

    }

    public function update($userId)
{
    // Logic to update user data based on form submission
    if(isset($userId)) {
        $this->load->model('User_model');

        // Assuming you have a method updateUserById in the model
        $this->User_model->updateUserById($userId, $this->input->post());
    } else {

    }
    $data['record'] = $this->db->get('users');
    redirect('auth/konfirmasi');

}

public function detail($userId) {
    // Get user data based on $userId (you need to fetch data from your database here)
    $userData = $this->User_model->getUserById($userId); // Assuming you have a function to fetch user data

    // Load the view with user data
    $this->template->load('template/main_template', 'dashboard/admin/detail_user', ['userData' => $userData]);
}


    public function delete($userId)
    {
        $this->load->model('User_model');
        $this->User_model->deleteUserById($userId);
        $data['record'] = $this->db->get('users');
        $this->template->load('template/main_template', 'dashboard/admin/index', $data);
    }

    public function showContacts()
{
    $user_id = $this->session->userdata('user_id'); // Ambil ID pengguna dari sesi
    $this->load->model('Chat_model');
    $data['contacts'] = $this->Chat_model->getContactsForUser($user_id);
    $this->template->load('template/main_template', 'dashboard/index', $data);

}





}
