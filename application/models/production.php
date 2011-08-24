<?php

class production extends CI_Model 
{

	function get_last_ten_entries()
    {
        $query = $this->db->get('production', 10);
        return $query->result();
    }
    
   function get_entry($slug)
    {
        $query = $this->db->get_where('production', array('slug' => $slug));
        return $query->row();
    }

}