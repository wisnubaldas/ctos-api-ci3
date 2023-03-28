<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_Manifest extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('manifest_model'));
    }	

	public function get_inward_manifest_get($AirlinesCode,$FlightNo,$dateflight)
	{
		$listhasil = $this->manifest_model->inward_manifest($AirlinesCode,$FlightNo,$dateflight);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_user_reg_get()
	{
		$listhasil = $this->manifest_model->user_reg();
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
}