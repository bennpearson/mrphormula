<?php   
  
    class cart_model extends CI_Mode { // Our Cart_model class extends the Model class  
  
        // Function to retrieve an array with all product information  
        function retrieve_products(){  
            $query = $this->db->get('products'); // Select the table products  
            return $query->result_array(); // Return the results in a array.  
        }             
  
    } 