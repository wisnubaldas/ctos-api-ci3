<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_rekap_and_monitor extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('rekap_and_monitor_model'));
    }

	public function get_Monitoring_CWP_for_invoice_get()
	{
		$listhasil = $this->ekspor_model->Monitoring_CWP_for_invoice();
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_rekapitulasi_Invoice_get($token,$warehousecode,$datefrom,$dateuntil,$timefrom,$timeuntil)
	{
		$listhasil = $this->rekap_and_monitor_model->rekapitulasi_Invoice($token,$warehousecode,$datefrom,$dateuntil,$timefrom,$timeuntil);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
		
	}
	
	public function get_rekapitulasi_Invoice_additional_get($token,$warehousecode,$datefrom,$dateuntil,$timefrom,$timeuntil)
	{
		$listhasil = $this->rekap_and_monitor_model->rekapitulasi_Invoice_additional($token,$warehousecode,$datefrom,$dateuntil,$timefrom,$timeuntil);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_rekapitulasi_weighing_get($token,$warehousecode,$datefrom,$dateuntil,$timefrom,$timeuntil)
	{
		$listhasil = $this->rekap_and_monitor_model->rekapitulasi_weighing($token,$warehousecode,$datefrom,$dateuntil,$timefrom,$timeuntil);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}

}	