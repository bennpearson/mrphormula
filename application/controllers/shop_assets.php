<?php
class Shop_assets extends CI_Controller {
	
	function index() {
		
		$this->load->model('Video_model' , '', TRUE); 			
        $data['video'] = $this->Video_model->get_all(); 		
		$this->load->model('Audio_model' , '', TRUE);			
        $data['audio'] = $this->Audio_model->get_all(); 		
		$this->load->model('Images_model' , '', TRUE); 			
        $data['images'] = $this->Images_model->get_all();				
		$this->load->model('Products_model');
		$data['production'] = $this->Products_model->get_all();
		$this->load->view('products', $data);
	}
	
	function add_production() {
		
		$this->load->model('Products_model');
		$product = $this->Products_model->get($this->input->post('id'));
		
		$insert = array(
			'id' => $this->input->post('id'),
			'qty' => 1,
			'price' => $product->price,
			'name' => $product->name
		);
		if ($product->option_name) {
			$insert['options'] = array(
				$product->option_name => $product->option_values[$this->input->post($product->option_name)]
			);
		}
		
		$this->cart->insert($insert);
		redirect('shop/assets');
		
	}
	
	function add_video() {
		
		$this->load->model('Video_model'); 								
		$product = $this->Video_model->get($this->input->post('id')); 	
		
		$insert = array(
			'id' => $this->input->post('id'),
			'qty' => 1,
			'price' => $product->price,
			'name' => $product->name
		);
		if ($product->option_name) {
			$insert['options'] = array(
				$product->option_name => $product->option_values[$this->input->post($product->option_name)]
			);
		}
		
		$this->cart->insert($insert);
		redirect('shop/assets');
		
	}
	
	function add_audio() {
		
		$this->load->model('Audio_model'); 								
		$product = $this->Audio_model->get($this->input->post('id')); 	
		
		$insert = array(
			'id' => $this->input->post('id'),
			'qty' => 1,
			'price' => $product->price,
			'name' => $product->name
		);
		if ($product->option_name) {
			$insert['options'] = array(
				$product->option_name => $product->option_values[$this->input->post($product->option_name)]
			);
		}
		
		$this->cart->insert($insert);
		redirect('shop/assets');
		
	}
	
	function add_images() {
		
		$this->load->model('Images_model'); 								
		$product = $this->Images_model->get($this->input->post('id')); 	
		
		$insert = array(
			'id' => $this->input->post('id'),
			'qty' => 1,
			'price' => $product->price,
			'name' => $product->name
		);
		if ($product->option_name) {
			$insert['options'] = array(
				$product->option_name => $product->option_values[$this->input->post($product->option_name)]
			);
		}
		
		$this->cart->insert($insert);
		redirect('shop/assets');
		
	}
	
	function remove($rowid) {
		
		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
		
		redirect('shop/assets');
		
	}
	
}
