<?php 

class Homepage extends CI_Controller {
	
	public function index()
	{
        $this->load->model('production' , '', TRUE);
        $data['production'] = $this->production->get_last_ten_entries();
		$this->load->model('video' , '', TRUE);
        $data['video'] = $this->video->get_last_ten_entries();
		$this->load->model('audio' , '', TRUE);
        $data['audio'] = $this->audio->get_last_ten_entries();
		$this->load->model('images' , '', TRUE);
        $data['images'] = $this->images->get_last_ten_entries();
        $this->load->view('homepage' , $data);
	}
	
	public function assets()
	{	
		$this->load->model('video' , '', TRUE);
        $data['video'] = $this->video->get_last_ten_entries();
		$this->load->model('audio' , '', TRUE);
        $data['audio'] = $this->audio->get_last_ten_entries();
		$this->load->model('images' , '', TRUE);
        $data['images'] = $this->images->get_last_ten_entries();
        $this->load->view('assets' , $data);
	}
	

	public function cart()
	{	
		$this->load->library('cart');
		$this->load->helper('url');
		$this->load->view('cart');
	}
	
	public function add() {
		
		
		$data = array(
               array(
                       'id'      => 'sku_123ABC',
                       'qty'     => 1,
                       'price'   => 39.95,
                       'name'    => 'T-Shirt',
                       'options' => array('Size' => 'L', 'Color' => 'Red')
                    ),
               array(
                       'id'      => 'sku_567ZYX',
                       'qty'     => 1,
                       'price'   => 9.95,
                       'name'    => 'Coffee Mug'
                    ),
               array(
                       'id'      => 'sku_965QRS',
                       'qty'     => 1,
                       'price'   => 29.95,
                       'name'    => 'Shot Glass'
                    )
            );
		
		$this->cart->insert($data);
		echo "add() called";
	}
	
	
	function show() {
		
		$cart = $this->cart->contents();
		
		echo "<pre>";
		print_r($cart);
	}
	
	function update() {
		

		$data = array(
               array(
                       'rowid'   => 'd0c00b4e4b747d8475d1c93ff8067138',
                       'qty'     => 3
                    ),
               array(
                       'rowid'   => '90972f7cfcd380a9fa7821d30a9b2fb2',
                       'qty'     => 4
                    ),
               array(
                       'rowid'   => '46acd2fb2e0d0b4a29c67e7ddf1c8946',
                       'qty'     => 2
                    )
            );

		
		$this->cart->update($data);
		echo "update() called";
	}
	
	function total() {
		
		echo $this->cart->total();
		
	}
	
	function remove() {
		
		$data = array(
			'rowid' => 'd0c00b4e4b747d8475d1c93ff8067138',
			'qty' => '0'
		);
		
		$this->cart->update($data);
		echo "remove() called";
	}
	
	function destroy() {
		
		$this->cart->destroy();
		echo "destroy() called";
	}

	
	
	public function world($name = 'Person')
	{	
		$data['v1'] = $name;
		$data['row'] = array(	
			'aled',
			'ed',
			'richie',
			'robert',
			'paul',
			'liam',
			'benn'
		);

        $this->load->model('production' , '', TRUE);
        $data['production'] = $this->production->get_last_ten_entries();
        $this->load->view('productions' , $data);
	}

	
}

