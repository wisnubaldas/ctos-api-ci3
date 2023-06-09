<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH.'/controllers/ApiController.php';

class Inc_invoiceheader extends ApiController {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('rdwarehouse_jkt', TRUE);
	}
	
	function index_get() {
        $noid = $this->get('_id');
        if ($_id == '') {
			$data = $this->db->get('inc_invoiceheader')->result();            
        } else {
            $this->db->where('_id', $_id);
            $data = $this->db->get('inc_invoiceheader')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'InvoiceNumber'				=> $this->put('InvoiceNumber'),
					'TotalPieces'				=> $this->put('TotalPieces'),
					'TotalCAW'					=> $this->put('TotalCAW'),
					'TotalNetto'				=> $this->put('TotalNetto'),
					'TotalWarehouseFee'			=> $this->put('TotalWarehouseFee'),
					'TotalAssistancyFee'		=> $this->put('TotalAssistancyFee'),
					'TotalCoolRoomFee'			=> $this->put('TotalCoolRoomFee'),
					'TotalAirConditioningFee'	=> $this->put('TotalAirConditioningFee'),
					'TotalColdStorageFee'		=> $this->put('TotalColdStorageFee'),
					'TotalStrongRoomFee'		=> $this->put('TotalStrongRoomFee'),
					'TotalDangerousRoomFee'		=> $this->put('TotalDangerousRoomFee'),
					'TotalOtherFee'				=> $this->put('TotalOtherFee'),
					'TotalAirportContriFee'		=> $this->put('TotalAirportContriFee'),
					'AdministrationFee'			=> $this->put('AdministrationFee'),
					'DocumentFee'				=> $this->put('DocumentFee'),
					'SubTotalFee'				=> $this->put('SubTotalFee'),
					'TaxFee'					=> $this->put('TaxFee'),
					'StampFee'					=> $this->put('StampFee'),
					'GrandTotalFee'				=> $this->put('GrandTotalFee'),
					'EmployeeNumber'			=> $this->put('EmployeeNumber'),
					'DateOfTransaction'			=> $this->put('DateOfTransaction'),
					'TimeOfTransaction'			=> $this->put('TimeOfTransaction'),
					'PrintNumber'				=> $this->put('PrintNumber'),
					'DRSCNumber'				=> $this->put('DRSCNumber'),
					'DateOfDRSC'				=> $this->put('DateOfDRSC'),
					'ShiftName'					=> $this->put('ShiftName'),
					'AirlinesCode'				=> $this->put('AirlinesCode'),
					'PaymentCode'				=> $this->put('PaymentCode'),
					'AgreementCode'				=> $this->put('AgreementCode'),
					'KursIDR'					=> $this->put('KursIDR'),
					'Referensi'					=> $this->put('Referensi'),
					'TaxNumber'					=> $this->put('TaxNumber'),
					'id_customer'				=> $this->put('id_customer'),	
					'CustomerCode'				=> $this->put('CustomerCode'),	
					'token'						=> $this->put('token'),
					'_id'						=> $this->put('_id')
					);
		$this->db->where('_id', $_id);
        $update = $this->db->update('inc_invoiceheader', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'InvoiceNumber'				=> $this->post('InvoiceNumber'),
					'TotalPieces'				=> $this->post('TotalPieces'),
					'TotalCAW'					=> $this->post('TotalCAW'),
					'TotalNetto'				=> $this->post('TotalNetto'),
					'TotalWarehouseFee'			=> $this->post('TotalWarehouseFee'),
					'TotalAssistancyFee'		=> $this->post('TotalAssistancyFee'),
					'TotalCoolRoomFee'			=> $this->post('TotalCoolRoomFee'),
					'TotalAirConditioningFee'	=> $this->post('TotalAirConditioningFee'),
					'TotalColdStorageFee'		=> $this->post('TotalColdStorageFee'),
					'TotalStrongRoomFee'		=> $this->post('TotalStrongRoomFee'),
					'TotalDangerousRoomFee'		=> $this->post('TotalDangerousRoomFee'),
					'TotalOtherFee'				=> $this->post('TotalOtherFee'),
					'TotalAirportContriFee'		=> $this->post('TotalAirportContriFee'),
					'AdministrationFee'			=> $this->post('AdministrationFee'),
					'DocumentFee'				=> $this->post('DocumentFee'),
					'SubTotalFee'				=> $this->post('SubTotalFee'),
					'TaxFee'					=> $this->post('TaxFee'),
					'StampFee'					=> $this->post('StampFee'),
					'GrandTotalFee'				=> $this->post('GrandTotalFee'),
					'EmployeeNumber'			=> $this->post('EmployeeNumber'),
					'DateOfTransaction'			=> $this->post('DateOfTransaction'),
					'TimeOfTransaction'			=> $this->post('TimeOfTransaction'),
					'PrintNumber'				=> $this->post('PrintNumber'),
					'DRSCNumber'				=> $this->post('DRSCNumber'),
					'DateOfDRSC'				=> $this->post('DateOfDRSC'),
					'ShiftName'					=> $this->post('ShiftName'),
					'AirlinesCode'				=> $this->post('AirlinesCode'),
					'PaymentCode'				=> $this->post('PaymentCode'),
					'AgreementCode'				=> $this->post('AgreementCode'),
					'KursIDR'					=> $this->post('KursIDR'),
					'Referensi'					=> $this->post('Referensi'),
					'TaxNumber'					=> $this->post('TaxNumber'),
					'id_customer'				=> $this->post('id_customer'),	
					'CustomerCode'				=> $this->post('CustomerCode'),		
					'token'						=> $this->post('token')
					);					
		 $insert = $this->db->insert('inc_invoiceheader', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}