<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function check_credential()
	{
		$username = set_value('username');
		$password = set_value('password');
		
		$hasil = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->limit(1)
						  ->get('users');
		
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	
	public function tambah($username, $email, $password, $group)
	{
		$data = array(
			'username' => $username,
			'email' => $email,
			'password' => $password,
			'group' => $group,
			);
		$this->db->insert('users',$data);
	}

}