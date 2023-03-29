<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_Monitoring extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('monitoring_model'));
    }	
	
	public function get_list_weighing_no_invoice_get()
	{
		$listhasil = $this->monitoring_model->list_weighing_no_invoice();
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
}