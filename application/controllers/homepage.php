<?php 


class Homepage extends CI_Controller {

	public function index()
	{
		$this->load->view('main');
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
	
	
	public function archives($name = 'Person')
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

        $this->load->model('archive' , '', TRUE);
        $data['video'] = $this->archive->get_last_ten_entries();
        $this->load->view('archives' , $data);
	}
	
}
