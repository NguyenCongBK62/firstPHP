<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('adddata.html');
	}
	public function insertdata_controler()
	{
		$sdt = $this->input->post('So');
		$gia =  $this->input->post('Gia');
		$this->load->model('adddata_controler');
		if($this->adddata_controler->insert($sdt,$gia)){
			echo "insert success";
		}
		else{
			echo "fail";
		}
	}

}

/* End of file firs_controller.php */
/* Location: ./application/controllers/firs_controller.php */