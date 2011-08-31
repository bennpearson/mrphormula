<?php

class Tags_model extends CI_Model {
	
	function get_all() {
		
		$results = $this->db->get('tags')->result();
		return $results;
		
	}
	
	function get($tag_id) {
		
		$results = $this->db->get_where('tags', array('tag_id' => $tag_id))->result();
		$result = $results[0];
		
		
		return $result;
	}
	
}
