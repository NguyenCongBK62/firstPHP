<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adddata_controler extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($s,$g)
	{
		$dulieu = array('sdt' =>$s ,'gia'=>$g);
		$this->db->insert('firstweb', $dulieu);
		return $this->db->insert_id();
	}

}

/* End of file add_data.php */
/* Location: ./application/models/add_data.php */