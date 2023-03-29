<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_Void extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('void_model'));
    }	
	
	public function get_void_eks_booking_get($MasterAWB)
	{
		$listhasil = $this->void_model->void_eks_booking($MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_void_eks_approval_get($MasterAWB,$HostAWB)
	{
		$listhasil = $this->void_model->void_eks_approval($MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_void_eks_weighingheader_get($ProofNumber)
	{
		$listhasil = $this->void_model->void_eks_weighingheader($ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_void_eks_invoice_get($InvoiceNumber)
	{
		$listhasil = $this->void_model->void_eks_invoice($InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_void_eks_buildup_get($MasterAWB)
	{
		$listhasil = $this->void_model->void_eks_buildup($MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}

	public function get_void_imp_breakdown_get($BreakdownNumber)
	{
		$listhasil = $this->void_model->void_imp_breakdown($BreakdownNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
	public function get_void_imp_breakdown_detail_get($BreakdownNumber,$noid)
	{
		$listhasil = $this->void_model->void_imp_breakdown_detail($BreakdownNumber,$noid);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_void_imp_deliorderheader_get($DONumber)
	{
		$listhasil = $this->void_model->void_imp_deliorderheader($DONumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_void_imp_invoice_get($InvoiceNumber)
	{
		$listhasil = $this->void_model->void_imp_invoice($InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_void_imp_pod_get($TravelNumber)
	{
		$listhasil = $this->void_model->void_imp_pod($TravelNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
}