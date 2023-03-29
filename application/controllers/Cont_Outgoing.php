<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_Outgoing extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('outgoing_model'));
    }

	public function get_list_out_approval_get($token,$MasterAWB=null)
	{
		$listhasil = $this->outgoing_model->list_out_approval($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_out_weighingheader_get($token,$ProofNumber=null)
	{
		$listhasil = $this->outgoing_model->list_out_weighingheader($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_out_weighingdetail_get($token,$ProofNumber=null)
	{
		$listhasil = $this->outgoing_model->list_out_weighingdetail($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_out_weighingvolume_get($token,$ProofNumber=null)
	{
		$listhasil = $this->outgoing_model->list_out_weighingvolume($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_out_weighinghandling_get($token,$ProofNumber=null)
	{
		$listhasil = $this->outgoing_model->list_out_weighinghandling($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_out_invoiceheader_get($token,$InvoiceNumber=null)
	{
		$listhasil = $this->outgoing_model->list_out_invoiceheader($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_out_invoicedetail_get($token,$InvoiceNumber=null)
	{
		$listhasil = $this->outgoing_model->list_out_invoicedetail($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_out_sticker_get($token,$MasterAWB)
	{
		$listhasil = $this->outgoing_model->list_out_sticker($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_out_storage_get($token,$MasterAWB)
	{
		$listhasil = $this->outgoing_model->list_out_storage($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_out_buildup_get($token,$AirlinesCode,$FlightNumber,$DateOfFlight)
	{
		$listhasil = $this->outgoing_model->list_out_buildup($token,$AirlinesCode,$FlightNumber,$DateOfFlight);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_out_buildupheader_get($token,$BuildupNumber=null)
	{
		$listhasil = $this->outgoing_model->list_out_buildupheader($token,$BuildupNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_out_buildupdetail_get($token,$BuildupNumber=null)
	{
		$listhasil = $this->outgoing_model->list_out_buildupdetail($token,$BuildupNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_out_buildupoffload_get($token,$BuildupNumber=null)
	{
		$listhasil = $this->outgoing_model->list_out_buildupoffload($token,$BuildupNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}

	public function get_weighing_for_build_get($token,$AirlinesCode,$FlightNumber,$DateOfFlight)
	{
		$listhasil = $this->outgoing_model->weighing_for_build($token,$AirlinesCode,$FlightNumber,$DateOfFlight);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
		
		
	}


}