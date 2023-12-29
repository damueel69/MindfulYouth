<?php

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($user_id)
    {
        $this->db->select();
        $this->db->from('users as users');
        $this->db->where('users.id != ', $user_id);
        $this->db->where('users.id != 0');
        return $this->db->get();
    }

    public function getOne($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('users');
    }

    public function logged($user_id)
    {
        $this->db->where('id', $user_id);
        $this->db->update('users', ['is_logged_in' => 1, 'last_login' => date('Y-m-d')]);

        return 1;
    }

    
    public function getUserById($userId)
    {
        // Fetch user data by user ID
        return $this->db->get_where('users', ['id' => $userId])->row();
    }

    public function updateUserById($userId, $userData)
    {
        // Update user data in the database based on user ID
        $this->db->where('id', $userId);
        $this->db->update('users', $userData);
    }

    public function deleteUserById($userId)
    {
        // Delete user data from the database based on user ID
        $this->db->where('id', $userId);
        $this->db->delete('users');
    }

    

    public function getPsikiaterBySpecialist() {
        // Mengambil data psikiater dengan spesialis tertentu
        $this->db->select('id, username, is_logged_in, spesialist');
        $this->db->where('division', 'Psikiater');
        $this->db->group_by('spesialist');
        $query = $this->db->get('users'); // Sesuaikan 'users' dengan nama tabel yang Anda gunakan

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return array();
    }

    public function getSpecialists() {
        $this->db->select('spesialist');
        $this->db->distinct();
        $this->db->where('division', 'Psikiater');
        $this->db->where('spesialist IS NOT NULL');
        $query = $this->db->get('users'); // Ubah 'users' sesuai dengan nama tabel Anda
        return $query->result();
    }

    public function getPsikiaterContacts() {
        $this->db->select('id, username, is_logged_in, spesialist,no_hp');
        $this->db->where('division', 'Psikiater');
        $this->db->where('spesialist IS NOT NULL');
        $query = $this->db->get('users'); // Ubah 'users' sesuai dengan nama tabel Anda
        return $query->result();
    }

    public function getKanselorContacts() {
        $this->db->select('id, username, is_logged_in, spesialist, no_hp');
        $this->db->where('division', 'Kanselor');
        $this->db->where('spesialist IS NOT NULL');
        $query = $this->db->get('users'); // Ubah 'users' sesuai dengan nama tabel Anda
        return $query->result();
    }
    

    public function getSpecialistsK() {
        $this->db->select('spesialist');
        $this->db->distinct();
        $this->db->where('division', 'Kanselor');
        $this->db->where('spesialist IS NOT NULL');
        $query = $this->db->get('users'); // Ubah 'users' sesuai dengan nama tabel Anda
        return $query->result();
    }

    public function getUsersByRoleOne()
    {
        return $this->db->get_where('users', ['role' => '1'])->result();
    }

    public function getPsikiaterPhoneNumbers()
    {
        $this->db->select('username, no_hp, is_logged_in'); // Sesuaikan kolom yang dibutuhkan
        $this->db->where('division', 'Psikiater');
        $this->db->where('no_hp IS NOT NULL');
        $query = $this->db->get('users');

        return $query->result();
    }

    public function getKanselorPhoneNumbers()
    {
        $this->db->select('username, no_hp, is_logged_in'); // Sesuaikan kolom yang dibutuhkan
        $this->db->where('division', 'Kanselor');
        $this->db->where('no_hp IS NOT NULL');
        $query = $this->db->get('users');

        return $query->result();
    }

   

    
}

?>

