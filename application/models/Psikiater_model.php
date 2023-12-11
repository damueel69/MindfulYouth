<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psikiater_model extends CI_Model {
    public function get_psikiater_list() {
        $query = $this->db->select('nama, no_hp, gelar, spesialist')
            ->from('psikiater')
            ->get();
    
        if ($query === FALSE) {
            echo $this->db->last_query();
            echo $this->db->error()['message'];
            return array();
        }
    
        return $query->result();
    }
    


    

    public function tambah_psikiater($data)
    {
        $this->db->insert('psikiater', $data);
        return $this->db->insert_id(); // Return the inserted id
    }

}
