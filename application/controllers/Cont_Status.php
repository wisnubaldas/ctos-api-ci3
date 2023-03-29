<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_Status extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('status_model'));
    }	
	
	public function get_check_inc_break_detail_get($MasterAWB=null)
	{
		$listhasil = $this->status_model->check_inc_break_detail($MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_check_inc_break_header_get()
	{
		$listhasil = $this->status_model->check_inc_break_header();
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_check_inc_deliveryord_detail_get($MasterAWB=null)
	{
		$listhasil = $this->status_model->check_inc_deliveryord_detail($MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_check_inc_deliveryord_header_get($Noid)
	{
		$listhasil = $this->status_model->check_inc_deliveryord_header($Noid);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_check_inc_pod_detail_get($MasterAWB=null)
	{
		$listhasil = $this->status_model->check_inc_pod_detail($MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_check_inc_pod_header_get($Noid)
	{
		$listhasil = $this->status_model->check_inc_pod_header($Noid);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
}