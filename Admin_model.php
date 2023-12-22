<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
  
    public function get()
    {
        // Ambil data user dari database
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function getById($id)
    {
        // Ambil data user berdasarkan ID
        $query = $this->db->get_where('users', array('id_user' => $id));
        return $query->row_array();
    }

    public function insert($data)
    {
        // Sisipkan data user ke dalam database
        $this->db->insert('users', $data);
    }

    public function update($where, $data)
    {
        // Perbarui data user berdasarkan kondisi tertentu
        $this->db->update('users', $data, $where);
    }

    public function delete($id)
    {
        // Hapus data user berdasarkan ID
        $this->db->delete('users', array('id_user' => $id));
    }
  
    public function detail($id)
    {
        $query = $this->db->get_where('user', array('id_user' => $id));

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }
}