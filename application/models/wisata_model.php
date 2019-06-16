<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wisata_model extends CI_model {

	function get_wisata()
	{
		$query = $this->db->get('wisata');
		return $query->result_array();
	}
}
?>
