<?php

class archive extends CI_Model 
{

	function get_last_ten_entries()
    {
        $query = $this->db->get('video', 10);
        return $query->result();
    }
    
   function get_entry($filename)
    {
        $query = $this->db->get_where('video', array('filename' => $filename));
        return $query->row();
    }

}