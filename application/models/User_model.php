<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public $table = 'users';
	public $id = 'users.id';

	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getBy()
	{
		$this->db->from($this->table);
		$this->db->where('email', $this->session->userdata('email'));
		$query = $this->db->get();
		return $query->row_array();
	}

	public function Update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}

	public function get_users_by_role($role)
    {
        $this->db->from('users'); 
        $this->db->where('role', $role);
        $query = $this->db->get();

        return $query->result_array();
    }

	public function get_user_by_id($user_id)
    {
        $query = $this->db->get_where('users', array('id_user' => $user_id));
        return $query->row();
    }
	// User_model model
	public function get_psikiater_list() {
        // Gantilah 'your_table_name' dengan nama tabel yang sesuai di database Anda
        $query = $this->db->get_where('users', array('Role' => 'Psikiater'));
        return $query->result();
    
	
			
	}

	public function tambah_user($data)
		{
			$this->db->insert('users', $data);
			return $this->db->insert_id(); // Return the inserted id
		}

		public function get_user_info($user_id) {
			// Assuming you have a 'users' table in your database
			$query = $this->db->get_where('users', array('id' => $user_id));
	
			// Check if the query was successful
			if ($query->num_rows() > 0) {
				// Return the user information as an object
				return $query->row();
			} else {
				// Return null if user is not found
				return null;
			}
		}
		

		public function get_user_info_by_email($user_email) {
			// Assuming you have a 'users' table in your database
			$query = $this->db->get_where('users', array('email' => $user_email));
	
			// Check if the query was successful
			if ($query->num_rows() > 0) {
				// Return the user information as an object
				return $query->row();
			} else {
				// Return null if user is not found
				return null;
			}
		}

		public function get_user_name_by_email($email)
{
    $this->db->select('nama'); // Pilih kolom nama
    $this->db->where('email', $email); // Sesuaikan dengan kolom email Anda
    $query = $this->db->get('users'); // Sesuaikan dengan nama tabel Anda
    $result = $query->row();

    if ($result) {
        return $result->nama; // Mengembalikan nama jika ditemukan
    } else {
        return ''; // Mengembalikan string kosong jika tidak ditemukan
    }
}


}
?>
