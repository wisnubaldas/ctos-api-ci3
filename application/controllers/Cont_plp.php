<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_plp extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('plp_model'));
    }	
	
	public function get_respon_mohon_plp_get($no_bl_awb)
	{
		$listhasil = $this->plp_model->respon_mohon_plp($no_bl_awb);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	public function get_show_mohon_plp_get($id_mohon=null)
	{
		$listhasil = $this->plp_model->show_mohon_plp($id_mohon);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_show_batal_plp_get($id_batal=null)
	{
		$listhasil = $this->plp_model->show_batal_plp($id_batal);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_show_respon_mohon_plp_get($typeshow,$noid)
	{
		$listhasil = $this->plp_model->show_respon_mohon_plp($typeshow,$noid);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_show_respon_batal_plp_get($typeShow,$noid)
	{
		$listhasil = $this->plp_model->show_respon_batal_plp($typeShow,$noid);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
		
	}
	
	public function get_show_ref_mohon_get()
	{
		$listhasil = $this->plp_model->show_ref_mohon();
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_show_ref_batal_get()
	{
		$listhasil = $this->plp_model->show_ref_batal();
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_respon_mohon_plp_gatein_get()
	{
		$listhasil = $this->plp_model->respon_mohon_plp_gatein();
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
}