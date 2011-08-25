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
	

	function cart()
	{
		$this->load->helpers('form_helper');
		$this->load->view('cart');
	}
	
	

	public function test()
	{
        $this->load->model('production' , '', TRUE);
        $data['production'] = $this->production->get_last_ten_entries();
		$this->load->model('video' , '', TRUE);
        $data['video'] = $this->video->get_last_ten_entries();
		$this->load->model('audio' , '', TRUE);
        $data['audio'] = $this->audio->get_last_ten_entries();
		$this->load->model('images' , '', TRUE);
        $data['images'] = $this->images->get_last_ten_entries();
        $this->load->view('test' , $data);
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
	
}
