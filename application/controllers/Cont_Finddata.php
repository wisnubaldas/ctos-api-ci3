<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_Finddata extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('finddata_model'));
    }
	
	public function get_list_master_breakdowndetail_get($token,$MasterAWB=null)
	{
		$listhasil = $this->finddata_model->list_master_breakdowndetail($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_master_obdetail_get($token,$MasterAWB=null)
	{
		$listhasil = $this->finddata_model->list_master_obdetail($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_hawb_detail_get($token,$AgenCode,$HostAWB=null)
	{
		$listhasil = $this->finddata_model->list_hawb_detail($token,$AgenCode,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}

	public function get_list_imp_breakdownheader_get($token,$gabung=null)
	{
		$listhasil = $this->finddata_model->list_imp_breakdownheader($token,$gabung);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_obheader_get($token,$gabung=null)
	{
		$listhasil = $this->finddata_model->list_imp_obheader($token,$gabung);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_irreg_get($token,$gabung=null)
	{
		$listhasil = $this->finddata_model->list_imp_irreg($token,$gabung);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_NOA_masterAWB_get($token,$MasterAWB=null)
	{
		$listhasil = $this->finddata_model->list_imp_NOA_masterAWB($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_eks_booking_get($token,$gabung=null)
	{
		$listhasil = $this->finddata_model->list_eks_booking($token,$gabung);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_eks_weighing_master_get($token,$MasterAWB=null)
	{
		$listhasil = $this->finddata_model->list_eks_weighing_master($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_eks_buildupheader_get($token,$gabung=null)
	{
		$listhasil = $this->finddata_model->list_eks_buildupheader($token,$gabung);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_deliorderheader_get($token,$DONumber=null)
	{
		$listhasil = $this->finddata_model->list_imp_deliorderheader($token,$DONumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_invoiceheader_get($token,$WhCode,$MasterAWB=null)
	{
		$listhasil = $this->finddata_model->list_invoiceheader($token,$WhCode,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_doc_delivery_hawb_get($token,$Consigneename=null)
	{
		$listhasil = $this->finddata_model->list_doc_delivery_hawb($token,$Consigneename);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_doc_delivery_get($token,$MasterAWB=null)
	{
		$listhasil = $this->finddata_model->list_doc_delivery($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_delivery_for_cargo_out_get($token,$DONumber=null)
	{
		$listhasil = $this->finddata_model->delivery_for_cargo_out($token,$DONumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_breakdowndetail_get($token,$MasterAWB=null)
	{
		$listhasil = $this->finddata_model->list_inc_breakdowndetail($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
	}
	
	public function get_list_inc_weighing_get($token,$ProofNumber=null)
	{
		$listhasil = $this->finddata_model->list_inc_weighing($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_delivery_get($token,$DONumber=null)
	{
		$listhasil = $this->finddata_model->list_inc_delivery($token,$DONumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	
}