<?php
// Jurnal_model.php
class Jurnal_model extends CI_Model {
    public function save_entry($data) {
        return $this->db->insert('jurnal_emosional', $data);
    }
}
?>
