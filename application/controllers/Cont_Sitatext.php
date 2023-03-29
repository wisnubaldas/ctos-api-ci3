<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_Sitatext extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('sitatext_model'));
    }	

	public function proc_flag_sending_fsu_get($tablename,$MessageSent,$KeyCode)
	{
		$listhasil = $this->sitatext_model->flag_sending_fsu($tablename,$MessageSent,$KeyCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
}