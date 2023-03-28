<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_gse extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('Gse_model'));
    }	
	
	public function get_list_master_gse_get()
	{
		$listhasil = $this->Gse_model->list_master_gse();
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_rental_master_gse_get($EquipmentCode)
	{
		$listhasil = $this->Gse_model->list_rental_master_gse($EquipmentCode);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
}