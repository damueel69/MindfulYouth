<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Chat
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Chat extends CI_Controller
{
    
  public function __construct() {
    parent::__construct();
    // Load necessary models in the constructor
    $this->load->model('User_model');
    $this->load->model('Psikiater_model');
}

  public function index()
  {
    $this->load->model('User_model');
		
		// Get the currently logged-in user's email from session
		$user_email = $this->session->userdata('email');
	
		// Get the user information based on email
		$user_info = $this->User_model->get_user_info_by_email($user_email);
	
		// Check if user_info is not null
		if ($user_info !== null) {
			// Now $user_info contains the user information, you can use it as needed
			// Example: $user_info->id, $user_info->username, $user_info->email, etc.
		} else {
			// Handle the case where the user is not found
		}
		$data['judul'] = "Halaman 3 Stella";
		$data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(); // Add this line
    $data['user_info'] = $user_info;
    $this->load->view('layout/header2', $data);
		$this->load->view("chat/vw_chat");
		$this->load->view("layout/footer");
	}
  public function index_admin()
  {
		$data['judul'] = "Halaman 3 Stella";
		$data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(); // Add this line
		$this->load->view("layout/header_admin"); // Pass the $data array to the header view
		$this->load->view("chat/vw_chat");
		$this->load->view("layout/footer");
	}

  public function anonymousChat() {
    $this->load->view("layout/header2"); // Pass the $data array to the header view
    $this->load->view('chat/vw_anonymous_chat');
    $this->load->view("layout/footer");

	}

	public function sKanselor() {
        $this->load->view("layout/header2"); // Pass the $data array to the header view
        $this->load->view('chat/vw_sKanselor');
        $this->load->view("layout/footer");
    }

	public function sPsikiater() {
        $this->load->view("layout/header2"); // Pass the $data array to the header view
        $this->load->view('chat/vw_sPsikiater');
        $this->load->view("layout/footer");
    }

public function pilih_psikiater() {
  $this->load->model('User_model');
		
		// Get the currently logged-in user's email from session
		$user_email = $this->session->userdata('email');
	
		// Get the user information based on email
		$user_info = $this->User_model->get_user_info_by_email($user_email);
	
		// Check if user_info is not null
		if ($user_info !== null) {
			// Now $user_info contains the user information, you can use it as needed
			// Example: $user_info->id, $user_info->username, $user_info->email, etc.
		} else {
			// Handle the case where the user is not found
		}
  $data['psikiater_list'] = $this->Psikiater_model->get_psikiater_list();
  $data['user_info'] = $user_info;
  $this->load->view("layout/header2",$data); 
  $this->load->view('chat/vw_psikiater', $data);
  $this->load->view("layout/footer");
}

public function pilih_psikiater_admin() {
  $data['psikiater_list'] = $this->Psikiater_model->get_psikiater_list();
  $this->load->view("layout/header_admin"); 
  $this->load->view('chat/vw_psikiater', $data);
  $this->load->view("layout/footer");
}


}


/* End of file Chat.php */
/* Location: ./application/controllers/Chat.php */