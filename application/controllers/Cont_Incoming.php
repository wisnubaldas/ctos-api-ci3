<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_Incoming extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('incoming_model'));
    }	

	public function get_list_inc_breakdownheader_get($token,$BreakdownNumber=null)
	{
		$listhasil = $this->incoming_model->list_inc_breakdownheader($token,$BreakdownNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_breakdownheader_airl_flight_date_get($token,$nilai=null,$dateflight)
	{
		$listhasil = $this->incoming_model->breakdownheader_airl_flight_date($token,$nilai,$dateflight);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_breakdowndetail_get($token,$BreakdownNumber=null)
	{
		$listhasil = $this->incoming_model->list_inc_breakdowndetail($token,$BreakdownNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_deliorderheader_get($token,$DONumber=null)
	{
		$listhasil = $this->incoming_model->list_inc_deliorderheader($token,$DONumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
	}
	
	public function get_list_inc_deliorderdetail_get($token,$DONumber=null)
	{
		$listhasil = $this->incoming_model->list_inc_deliorderdetail($token,$DONumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_invoiceheader_get($token,$InvoiceNumber=null)
	{
		$listhasil = $this->incoming_model->list_inc_invoiceheader($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_invoicedetail_get($token,$InvoiceNumber=null)
	{
		$listhasil = $this->incoming_model->list_inc_invoicedetail($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_irreg_get($token,$IrregNumber=null)
	{
		$listhasil = $this->incoming_model->list_inc_irreg($token,$IrregNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_weighingdetail_get($token,$ProofNumber=null)
	{
		$listhasil = $this->incoming_model->list_inc_weighingdetail($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	
	public function get_list_inc_weighingheader_get($token,$ProofNumber=null)
	{
		$listhasil = $this->incoming_model->list_inc_weighingheader($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	
	public function get_list_inc_weighingvolume_get($token,$ProofNumber=null)
	{
		$listhasil = $this->incoming_model->list_inc_weighingvolume($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_cargodemage_get($token,$MasterAWB=null)
	{
		$listhasil = $this->incoming_model->list_inc_cargodemage($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_storage_get($MasterAWB=null)
	{
		$listhasil = $this->incoming_model->get_list_inc_storage($MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_podheader_get($token,$pod_number=null)
	{
		$listhasil = $this->incoming_model->list_inc_podheader($token,$pod_number);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_poddetail_get($token,$pod_number=null)
	{
		$listhasil = $this->incoming_model->list_inc_poddetail($token,$pod_number);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_inc_stockofname_get($token,$AirlinesCode=null)
	{
		$listhasil = $this->incoming_model->list_inc_stockofname($token,$AirlinesCode);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
		
	}
	
}