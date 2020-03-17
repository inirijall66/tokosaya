<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required|alpha_numeric');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('form_login');
		} else {
			$this->load->model('model_login');
			$valid_user = $this->model_login->check_credential();
			if($valid_user == FALSE)
			{
				$this->session->set_flashdata('error','Wrong Username / Password!');
				redirect('Login');
			} else {
				// if the username and password is a match
				$this->session->set_userdata('username', $valid_user->username);
				$this->session->set_userdata('group', $valid_user->group);
				
				switch($valid_user->group){
					case 1 : //admin
								redirect('Produk'); 
								break;
					case 2 : //member
								redirect('Konsumen'); 
								break;
					default: break; 
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
	
	 function create() { //ini create tanpa model
        $invoice = array(
		///ini nama didatabe								///ini yg di sistem
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'group' => $this->input->post('group')
			);
       if($invoice){
	$invoice_id = $this->db->insert('users', $invoice);
		  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
		  redirect('Login');
		}
		else{
		  $this->session->set_flashdata('error_msg', 'Data salah,Try again.');
		  redirect('Login');
		}
		}
		
	public function register(){
			$this->load->view('form_register');
		}
	
}