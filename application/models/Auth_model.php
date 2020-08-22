<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function login($username,$password)
	{
		//$this->db->select("*");
		//$this->db->from('usuarios');
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$resultados = $this->db->get("usuarios");

		if($resultados->num_rows()>0)
		{
			return $resultados->row();
		}else{
			return false;
		}
	}
}
