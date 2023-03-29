<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_rubah extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('rubah_model'));
    }	
	
	public function get_update_data_get($namatable,$keycode,$namafield,$nilaiField)
	{
		$listhasil = $this->rubah_model->update_data($namatable,$keycode,$namafield,$nilaiField);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
		
	}
	
	public function get_update_void_get($namatable,$namacode,$nilaicode)
	{
		$listhasil = $this->rubah_model->update_void($namatable,$namacode,$nilaicode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_update_flag_get($namatable,$namafield,$namacode,$nilaicode)
	{
		$listhasil = $this->rubah_model->update_flag($namatable,$namafield,$namacode,$nilaicode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_update_dinamis_get($namatable,$namafield,$isifield,$namacode,$nilaicode)
	{
		$listhasil = $this->rubah_model->update_dinamis($namatable,$namafield,$isifield,$namacode,$nilaicode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_update_dinamis_tps_get($namatable,$namafield,$isifield,$namacode,$nilaicode)
	{
		$listhasil = $this->rubah_model->update_dinamis_tps($namatable,$namafield,$isifield,$namacode,$nilaicode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
	
	public function get_update_bebas_get($myquery)
	{
		$listhasil = $this->rubah_model->update_bebas($myquery);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
}