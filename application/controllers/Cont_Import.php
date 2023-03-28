<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_Import extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('import_model'));
    }	
	
	public function get_list_stockOfname_get($token,$AirlinesCode)
	{
		$listhasil = $this->import_model->list_stockOfname($token,$AirlinesCode);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}

	public  function get_list_imp_masterwaybill_get($token,$MasterAWB=null)
	{
		$listhasil = $this->import_model->list_imp_masterwaybill($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_hostawb_get($token,$MasterAWB=null)
	{
		$listhasil = $this->import_model->list_imp_hostawb($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_bc11_get($token,$MasterAWB=null)
	{
		$listhasil = $this->import_model->list_imp_bc11($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_breakdownheader_airl_flight_date_get($token,$nilai=null,$dateflight)
	{
		$listhasil = $this->import_model->breakdownheader_airl_flight_date($token,$nilai,$dateflight);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_breakdownheader_get($token,$BreakdownNumber=null)
	{
		$listhasil = $this->import_model->list_imp_breakdownheader($token,$BreakdownNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_breakdowndetail_get($token,$BreakdownNumber=null)
	{
		$listhasil = $this->import_model->list_imp_breakdowndetail($token,$BreakdownNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_ATA_breakdowndetail_get($token,$MasterAWB=null)
	{
		$listhasil = $this->import_model->list_ATA_breakdowndetail($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_master_breakdowndetail_get($token,$MasterAWB=null)
	{
		$listhasil = $this->import_model->list_master_breakdowndetail($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_cargodemage_get($token,$MasterAWB=null)
	{
		$listhasil = $this->import_model->list_imp_cargodemage($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_deliorderheader_get($token,$DONumber=null)
	{
		$listhasil = $this->import_model->list_imp_deliorderheader($token,$DONumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
	}
	
	public function get_list_imp_deliorderdetail_get($token,$DONumber=null)
	{
		$listhasil = $this->import_model->list_imp_deliorderdetail($token,$DONumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_invoiceheader_get($token,$DateOfTransaction)
	{
		$listhasil = $this->import_model->list_invoiceheader($token,$DateOfTransaction);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_invoice_pecahpos_get($token,$InvoiceNumber=null)
	{
		$listhasil = $this->import_model->list_invoice_pecahpos($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_invoiceheader_get($token,$InvoiceNumber=null)
	{
		$listhasil = $this->import_model->list_imp_invoiceheader($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_invoicedetail_get($token,$InvoiceNumber=null)
	{
		$listhasil = $this->import_model->list_imp_invoicedetail($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_waybill_invoice_get($token,$DONumber)
	{
		$listhasil = $this->import_model->list_waybill_invoice($token,$DONumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_waybill_delivery_get($token,$MasterAWB)
	{
		$listhasil = $this->import_model->list_waybill_delivery($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_invoicepecahpos_get($token,$InvoiceNumber=null)
	{
		$listhasil = $this->import_model->list_imp_invoicepecahpos($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_irreg_get($token,$IrregNumber=null)
	{
		$listhasil = $this->import_model->list_imp_irreg($token,$IrregNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_irregpic_get($token)
	{
		$listhasil = $this->import_model->list_imp_irregpic($token);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_location_get($token,$HostAWB=null)
	{
		$listhasil = $this->import_model->list_imp_location($token,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_noa_get($token,$namafield,$isifield=null)
	{
		$listhasil = $this->import_model->list_imp_noa($token,$namafield,$isifield);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_obheader_get($token,$BreakdownNumber=null)
	{
		$listhasil = $this->import_model->list_imp_obheader($token,$BreakdownNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_obdetail_get($token,$BreakdownNumber=null)
	{
		$listhasil = $this->import_model->list_imp_obdetail($token,$BreakdownNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_master_obdetail_get($token,$MasterAWB=null)
	{
		$listhasil = $this->import_model->list_master_obdetail($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
	}
	
	public function get_list_imp_podheader_get($token,$TravelNumber=null)
	{
		$listhasil = $this->import_model->list_imp_podheader($token,$TravelNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_poddetail_get($token,$TravelNumber=null)
	{
		$listhasil = $this->import_model->list_imp_poddetail($token,$TravelNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_poddetail_hawb_get($token,$HostAWB=null)
	{
		$listhasil = $this->import_model->list_imp_poddetail_hawb($token,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_poddetail_mawb_get($token,$MasterAWB=null)
	{
		$listhasil = $this->import_model->list_imp_poddetail_mawb($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_dlv_invoice_get($token,$InvoiceNumber=null)
	{
		$listhasil = $this->import_model->dlv_invoice($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
	}
	
	public function get_dlv_delivery_get($token,$DONumber=null)
	{
		$listhasil = $this->import_model->dlv_delivery($token,$DONumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
	}
	
	public function get_monitoring_imp_dlv_get($token,$thisdate)
	{
		$listhasil = $this->import_model->monitoring_imp_dlv($token,$thisdate);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_monitoring_breakdownn_for_delivery_get($token)
	{
		$listhasil = $this->import_model->monitoring_breakdownn_for_delivery($token);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_damage_get($token,$MasterAWB=null)
	{
		$listhasil = $this->import_model->list_damage($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
	}
	
	public function get_list_delivery_for_invoice_get($token)
	{
		$listhasil = $this->import_model->list_delivery_for_invoice($token);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_sppb_ecommerce_get($token,$limit)
	{
		$listhasil = $this->import_model->list_imp_sppb_ecommerce($token,$limit);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_scan_C1_fl_gate_0_get($token,$hawb=null)
	{
		$listhasil = $this->import_model->list_imp_scan_C1_fl_gate_0($token,$hawb);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_cargoout_get($token,$DateOfOut)
	{
		$listhasil = $this->import_model->list_cargoout($token,$DateOfOut);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_scan_c1_get($token,$tracking=null)
	{
		$listhasil = $this->import_model->list_imp_scan_c1($token,$tracking);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_location_mps_get($token,$mps=null)
	{
		$listhasil = $this->import_model->list_imp_location_mps($token,$mps);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	
	public function get_list_imp_location_mps_hostAWB_get($token,$hostAWB=null)
	{
		$listhasil = $this->import_model->list_imp_location_mps_hostAWB($token,$hostAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	
	public function get_list_imp_sppb_ecommerce_hawb_get($token,$hawb=null)
	{
		$listhasil = $this->import_model->list_imp_sppb_ecommerce_hawb($token,$hawb);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	
	public function get_list_imp_sppb_ecommerce_mawb_get($token,$mawb=null)
	{
		$listhasil = $this->import_model->list_imp_sppb_ecommerce_mawb($token,$mawb);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_imp_sppb_ecommerce_sppb_get($token,$sppb=null)
	{
		$listhasil = $this->import_model->list_imp_sppb_ecommerce_sppb($token,$sppb);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_totalHAWB_get($token,$MasterAWB=null)
	{
		$listhasil = $this->import_model->list_totalHAWB($token,$MasterAWB);
		$this->response($listhasil,200);
	}
	
	
	public function get_list_inv_dokument_ATA_MasterAWB_get($token,$MasterAWB=null)
	{
		$listhasil = $this->import_model->list_inv_dokument_ATA_MasterAWB($token,$MasterAWB);
		$this->response($listhasil,200);
	}
	
	
	public function get_list_inv_pecahpos_MasterAWB_get($token,$MasterAWB=null)
	{
		$listhasil = $this->import_model->list_inv_pecahpos_MasterAWB($token,$MasterAWB);
		$this->response($listhasil,200);
	}
	public function get_proc_insert_impbc11_get($MasterAWB)
	{
		$listhasil = $this->import_model->proc_insert_impbc11($MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
}