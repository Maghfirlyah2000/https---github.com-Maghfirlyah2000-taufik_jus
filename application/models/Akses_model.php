<?php
class Akses_model extends CI_Model 
{
	function get_all()
	{
		return $this->db
			->where('id_akses !=', 1)
			->order_by('level', 'asc')
			->get('db_akses');
	}
}