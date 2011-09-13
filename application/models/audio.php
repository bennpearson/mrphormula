<?php

class audio extends ci_model {

	function get_last_ten_entries()
    {
        $query = $this->db->get('audio', 10);
        return $query->result();
    }
    
   function get_entry($filename)
    {
        $query = $this->db->get_where('audio', array('filename' => $filename));
        return $query->row();
    }
	

}