// application/models/Register_model.php
<?php
class Register_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function register_user($data) {
        $this->db->insert('users', $data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function check_username($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        return ($query->num_rows() > 0) ? false : true;
    }

    public function check_email($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return ($query->num_rows() > 0) ? false : true;
    }
}
?>
