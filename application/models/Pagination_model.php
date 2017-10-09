<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_Model extends CI_Model {

	function __construct() 
	{
		parent::__construct();
	}

	public function record_count() 
	{
		return $this->db->count_all("User_details");
	}


	public function fetch_data($limit, $offset) 
	{
		$this->db->limit($limit,$offset*$limit);
		
		$query = $this->db->get("User_details");

		if ($query->num_rows() > 0) {

			foreach ($query->result() as $row) {

				$data[] = $row;
			}

			return $data;
		}
		
		return false;
	}
}
?>