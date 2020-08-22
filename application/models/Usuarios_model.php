<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function getUsuarios()
	{
		//$this->db->select("*");
		//$this->db->from('usuarios');
		$this->db->where("estado","1");

		$resultados = $this->db->get("usuarios");
			return $resultados->result();
	}
}
