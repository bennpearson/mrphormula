<?php
class Categories_model extends CI_Model {
	
	function get_all() {
		
		$results = $this->db->get('categories')->result();
		
		return $results;
		
	}
	
	function get($cat_id) {
		
		$results = $this->db->get_where('categories', array('cat_id' => $cat_id))->result();
		$result = $results[0];
		
		
		return $result;
	}
	
}
