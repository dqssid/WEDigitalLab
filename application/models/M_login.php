<?php

class M_login extends CI_Model{
	function cek login($table,$where){
		return $this->db->get_where($table,$where);
	}
}