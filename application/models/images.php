<?php

class images extends CI_Model 
{

	function get_last_ten_entries()
    {
        $query = $this->db->get('images', 10);
        return $query->result();
    }
    
   function get_entry($filename)
    {
        $query = $this->db->get_where('images', array('filename' => $filename));
        return $query->row();
    }
	

}