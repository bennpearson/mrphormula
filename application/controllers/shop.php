<?php
class shop extends ci_controller {
	
	function index() {
		$this->load->model('categories_model' , '', TRUE); 			
        $data['categories'] = $this->categories_model->get_all();
		
		$this->load->model('tags_model' , '', TRUE); 			
        $data['tags'] = $this->tags_model->get_all();
		
		$this->load->model('video_model' , '', TRUE); 			
        $data['video'] = $this->video_model->get_all(); 		
		$this->load->model('audio_model' , '', TRUE);			
        $data['audio'] = $this->audio_model->get_all(); 		
		$this->load->model('images_model' , '', TRUE); 			
        $data['images'] = $this->images_model->get_all();				
		$this->load->model('products_model');
		$data['production'] = $this->products_model->get_all();
		$this->load->view('products', $data);
	}
	
	function add_production() {
		
		$this->load->model('products_model');
		$product = $this->products_model->get($this->input->post('id'));
		
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
		redirect('shop');
		
	}
	
	function add_video() {
		
		$this->load->model('video_model'); 								
		$product = $this->video_model->get($this->input->post('id')); 	
		
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
		redirect('shop');
		
	}
	
	function add_audio() {
		
		$this->load->model('audio_model'); 								
		$product = $this->audio_model->get($this->input->post('id')); 	
		
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
		redirect('shop');
		
	}
	
	function add_images() {
		
		$this->load->model('images_model'); 								
		$product = $this->images_model->get($this->input->post('id')); 	
		
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
		redirect('shop');
		
	}
	
	function remove($rowid) {
		
		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
		
		redirect('shop');
		
	}
	
	function assets($cat = 'categories', $tag = 'tags' ) {
		
		$this->load->model('categories_model' , '', TRUE); 			
        $data['categories'] = $this->categories_model->get_all();
		
		$this->load->model('tags_model' , '', TRUE); 			
        $data['tags'] = $this->tags_model->get_all();
		
		$this->load->model('video_model' , '', TRUE); 			
        $data['video'] = $this->video_model->get_all(); 		
		$this->load->model('audio_model' , '', TRUE);			
        $data['audio'] = $this->audio_model->get_all(); 		
		$this->load->model('images_model' , '', TRUE); 			
        $data['images'] = $this->images_model->get_all();				
		$this->load->model('products_model');
		$data['production'] = $this->products_model->get_all();
		
		$data['v1'] = $cat;
		$data['v2'] = $tag;
		$data['row'] = array(	
			'rapping',
			'beatboxing',
			'kaosspad',
			'beat',
			'wales',
			'music',
			'song'
		);
		
		$this->load->view('assets', $data);

		
	}	
	
 	public function production($slug = null)
	{
		if (empty($slug))
		{
			echo 'need slug';
			exit;
		}
		
		$this->load->model('production' , '', TRUE);
		$data['entry'] = $this->production->get_entry($slug);
		$this->load->view('production_entry' , $data);
		
	}
	
 	public function about()
	{
		$this->load->view('about');
		
	}
	
 	public function contact()
	{
		$this->load->view('contact');
		
	}
	
}
