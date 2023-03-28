<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';


class Cont_cloud_status extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('status_cloud_model'));
    }	
	
	public function get_full_Check_Status_get($tps,$id_first)
	{
		$listhasil = $this->status_cloud_model->full_Check_status($tps,$id_first);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_total_inbound_delivery_aircarft_get($id_header,$status_date,$status_time,$airline_code,$flight_no,$origin,$dest)
	{
		$listhasil = $this->status_cloud_model->total_inbound_delivery_aircarft($id_header,$status_date,$status_time,$airline_code,$flight_no,$origin,$dest);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_check_th_inbound_international_get($waybill_smu,$hawb=null)
	{
		$listhasil = $this->status_cloud_model->check_th_inbound_international($waybill_smu,$hawb);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_check_th_outbond_international_get($waybill_smu,$hawb=null)
	{
		$listhasil = $this->status_cloud_model->check_th_outbond_international($waybill_smu,$hawb);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_check_th_inbound_domestik_get($waybill_smu=null)
	{
		$listhasil = $this->status_cloud_model->check_th_inbound_domestik($waybill_smu);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_check_th_outbond_domestik_get($waybill_smu=null)
	{
		$listhasil = $this->status_cloud_model->check_th_outbond_domestik($waybill_smu);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_update_dinamis_get($namatable,$namafield,$isifield,$namacode,$nilaicode)
	{
		$listhasil = $this->status_cloud_model->update_dinamis($namatable,$namafield,$isifield,$namacode,$nilaicode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
}