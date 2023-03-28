<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include APPPATH.'/controllers/ApiController.php';

class Cont_Ekspor extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('ekspor_model'));
    }	
	
	
	public function get_Monitoring_hawb_for_approval_get($token)
	{
		$listhasil = $this->ekspor_model->Monitoring_hawb_for_approval($token);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
	}
	public function get_Monitoring_CWP_for_invoice_get($token,$ProofNumber=null)
	{
		$listhasil = $this->ekspor_model->Monitoring_CWP_for_invoice($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_approval_get($token,$MasterAWB=null,$HostAWB=null)
	{
		$listhasil = $this->ekspor_model->list_eks_approval($token,$MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_eks_booking_get($token,$AirlinesCode,$FlightNo,$DateOfFlight)
	{
		$listhasil = $this->ekspor_model->eks_booking($token,$AirlinesCode,$FlightNo,$DateOfFlight);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_booking_get($token,$MasterAWB=null)
	{
		$listhasil = $this->ekspor_model->list_eks_booking($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_table_npe_get($token,$namafield,$isifield)
	{
		$listhasil = $this->ekspor_model->table_npe($token,$namafield,$isifield);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	
	public function get_list_eks_dokcustom_get($token,$InvoiceNumber=null)
	{
		$listhasil = $this->ekspor_model->list_eks_dokcustom($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_hostawb_get($token,$MasterAWB=null,$HostAWB=null)
	{
		$listhasil = $this->ekspor_model->list_eks_hostawb($token,$MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_waybill_invoice_get($token,$ProofNumber)
	{
		$listhasil = $this->ekspor_model->list_waybill_invoice($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_masterwaybill_get($token,$MasterAWB=null)
	{
		$listhasil = $this->ekspor_model->list_eks_masterwaybill($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_schedule_get($AirlinesCode=null)
	{
		$listhasil = $this->ekspor_model->list_eks_schedule($AirlinesCode);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_waybill_weighing_get($token,$MasterAWB,$HostAWB=null)
	{
		$listhasil = $this->ekspor_model->list_waybill_weighing($token,$MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	
	public function get_list_eks_weighingheader_get($token,$ProofNumber=null)
	{
		$listhasil = $this->ekspor_model->list_eks_weighingheader($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_weighingdetail_get($token,$ProofNumber=null)
	{
		$listhasil = $this->ekspor_model->list_eks_weighingdetail($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_weighingvol_get($token,$ProofNumber=null)
	{
		$listhasil = $this->ekspor_model->list_eks_weighingvol($token,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_weighingspechand_get($token,$MasterAWB,$HostAWB=null)
	{
		$listhasil = $this->ekspor_model->list_eks_weighingspechand($token,$MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_invoiceheader_get($token,$InvoiceNumber=null)
	{
		$listhasil = $this->ekspor_model->list_eks_invoiceheader($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_invoicedetail_get($token,$InvoiceNumber=null)
	{
		$listhasil = $this->ekspor_model->list_eks_invoicedetail($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_invoiceheader_get($token,$DateOfTransaction)
	{
		$listhasil = $this->ekspor_model->list_invoiceheader($token,$DateOfTransaction);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_sticker_get($token)
	{
		$listhasil = $this->ekspor_model->list_eks_sticker($token);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_storage_get($token)
	{
		$listhasil = $this->ekspor_model->list_eks_storage($token);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_buildupheader_get($token,$BuildupNumber=null)
	{
		$listhasil = $this->ekspor_model->list_eks_buildupheader($token,$BuildupNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_buildupdetail_get($token,$BuildupNumber=null)
	{
		$listhasil = $this->ekspor_model->list_eks_buildupdetail($token,$BuildupNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_waybill_buildupdetail_get($token,$MasterAWB)
	{
		$listhasil = $this->ekspor_model->list_waybill_buildupdetail($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_buildupoffload_get($token)
	{
		$listhasil = $this->ekspor_model->list_eks_buildupoffload($token);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_buildup_get($token,$AirlinesCode,$FlightNumber,$DateOfFlight)
	{
		$listhasil = $this->ekspor_model->list_buildup($token,$AirlinesCode,$FlightNumber,$DateOfFlight);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_weighing_for_build_get($token,$AirlinesCode,$FlightNumber,$DateOfFlight)
	{
		$listhasil = $this->ekspor_model->weighing_for_build($token,$AirlinesCode,$FlightNumber,$DateOfFlight);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_build_uld_name_get($token,$BuildUpNumber)
	{
		$listhasil = $this->ekspor_model->build_uld_name($token,$BuildUpNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_build_waybill_get($BuildUpNumber,$UldCardNumber)
	{
		$listhasil = $this->ekspor_model->build_waybill($BuildUpNumber,$UldCardNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_totalpieces_get($token,$namatable,$fieldcheck,$namafield,$isifield)
	{
		$listhasil = $this->ekspor_model->totalpieces($token,$namatable,$fieldcheck,$namafield,$isifield);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_CheckMandatory_get($namatable,$MasterAWB,$namafield,$isifield=null)
	{
		$listhasil = $this->ekspor_model->CheckMandatory($namatable,$MasterAWB,$namafield,$isifield);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_CheckValidCWP_get($token,$MasterAWB,$HostAWB=null)
	{
		$listhasil = $this->ekspor_model->CheckValidCWP($token,$MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_manifest_buildup_get($token,$AirlinesCode,$DateOfFlight)
	{
		$listhasil = $this->ekspor_model->manifest_buildup($token,$AirlinesCode,$DateOfFlight);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
	public function get_list_eks_weighing_label_get($token,$HostAWB)
	{
		$listhasil = $this->ekspor_model->list_eks_weighing_label($token,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);

	}
	
}