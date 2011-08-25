<?php   
  
    class Cart_model extends Model { // Our Cart_model class extends the Model class  
  
        // Function to retrieve an array with all product information  
        function retrieve_products(){  
            $query = $this->db->get('products'); // Select the table products  
            return $query->result_array(); // Return the results in a array.  
        }             
  
    }  
  
/* End of file cart_model.php */  
/* Location: ./application/models/cart_model.php */ 