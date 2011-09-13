<?php
class audio_model extends ci_model {
	
	function get_all() {
		
		$results = $this->db->get('audio')->result();
		
		foreach ($results as &$result) {
			
			if ($result->option_values) {
				$result->option_values = explode(',',$result->option_values);
			}
			
		}
		
		return $results;
		
	}
	
	function get($id) {
		
		$results = $this->db->get_where('audio', array('id' => $id))->result();
		$result = $results[0];
		
		if ($result->option_values) {
			$result->option_values = explode(',',$result->option_values);
		}
		
		return $result;
	}
	
}
