<?php

class Blog extends CI_Model 
{

	function get_last_ten_entries()
    {
        $query = $this->db->get('posts', 10);
        return $query->result();
    }
    
   function get_entry($slug)
    {
        $query = $this->db->get_where('posts', array('slug' => $slug));
        return $query->row();
    }

}