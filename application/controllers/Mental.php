<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Mental
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

class Mental extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
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
		$data['judul'] = "Halaman Artikel";
		$data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(); // Add this line
    $data['user_info'] = $user_info;
    $this->load->view('layout/header2', $data);
		$this->load->view("mental/vw_mental");
		$this->load->view("layout/footer");
	}

}


/* End of file Mental.php */
/* Location: ./application/controllers/Mental.php */