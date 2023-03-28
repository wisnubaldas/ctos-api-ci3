<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_finance extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('finance_model'));
    }	
	
	public function get_drsc_import_get($shifname,$dateDRSC,$PaymentCode,$token)
	{
		$listhasil = $this->finance_model->drsc_import($shifname,$dateDRSC,$PaymentCode,$token);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_drsc_ekspor_get($shifname,$dateDRSC,$PaymentCode,$token)
	{
		$listhasil = $this->finance_model->drsc_ekspor($shifname,$dateDRSC,$PaymentCode,$token);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	
	public function get_list_basicprice_get($LocationCode,$WarehouseCode,$AgreementCode,$Datetransaction,$totOverstay)
	{
		$listhasil = $this->finance_model->list_basicprice($LocationCode,$WarehouseCode,$AgreementCode,$Datetransaction,$totOverstay);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_aggrement_get($WarehouseCode,$DatabaseCode,$kd_gudang)
	{
		$listhasil = $this->finance_model->list_aggrement($WarehouseCode,$DatabaseCode,$kd_gudang);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function list_fare_directory_get($WarehouseCode,$AgreementCode)
	{
		$listhasil = $this->finance_model->list_fare_directory($WarehouseCode,$AgreementCode);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_pajakBynumber_get($token,$TaxAwal,$TaxAkhir)
	{
		$listhasil = $this->finance_model->list_pajakBynumber($token,$TaxAwal,$TaxAkhir);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
	}
	
	public function get_list_pajakBydate_get($token,$DateFrom,$DateUntil)
	{
		$listhasil = $this->finance_model->list_pajakBydate($token,$DateFrom,$DateUntil);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
	}
	
	public function get_totalfaktur_get($warehouse_npwp)
	{
		$listhasil = $this->finance_model->totalfaktur($warehouse_npwp);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_deposit_invoice_get($InvoiceNumber)
	{
		$listhasil = $this->finance_model->deposit_invoice($InvoiceNumber);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_depositheader_get($DepositCode)
	{
		$listhasil = $this->finance_model->list_depositheader($DepositCode);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
	}
	
	public function get_list_depositdetail_get($WarehouseCode,$DepositCode,$firstdate,$lastdate)
	{
		$listhasil = $this->finance_model->list_depositdetail($WarehouseCode,$DepositCode,$firstdate,$lastdate);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
		
	}
	public function get_Summary_deposit_get($WarehouseCode,$DepositCode,$firstdate)
	{
		$listhasil = $this->finance_model->Summary_deposit($WarehouseCode,$DepositCode,$firstdate);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_depositnominal_get($DepositCode,$WarehouseCode=null)
	{
		$listhasil = $this->finance_model->list_depositnominal($DepositCode,$WarehouseCode);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);
	}
	
	public function get_list_depositor_get($udepositor=null)
	{
		$listhasil = $this->finance_model->list_depositor($udepositor);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);	
	}
	
	public function get_nomor_tax_get($warehouse_npwp)
	{
		$listhasil = $this->finance_model->nomor_tax($warehouse_npwp);
		// menjadikan objek menjadi JSON
		$this->response($listhasil,200);	
	}
	
	
}