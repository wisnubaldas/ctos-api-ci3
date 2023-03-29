<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_Sigo extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('sigo_model'));
    }	

	public  function get_imp_header_get($token,$Invoicenumber)
	{
		$listhasil = $this->sigo_model->imp_header($token,$Invoicenumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public  function get_imp_detail_get($token,$Invoicenumber)
	{
		$listhasil = $this->sigo_model->imp_detail($token,$Invoicenumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public  function get_eks_header_get($token,$Invoicenumber)
	{
		$listhasil = $this->sigo_model->eks_header($token,$Invoicenumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public  function get_eks_detail_get($token,$Invoicenumber)
	{
		$listhasil = $this->sigo_model->eks_detail($token,$Invoicenumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_sigo_invoiceheader_get($token,$DateOfTransaction)
	{
		$listhasil = $this->sigo_model->list_sigo_invoiceheader($token,$DateOfTransaction);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
}