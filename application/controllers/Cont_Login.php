<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include APPPATH.'/controllers/ApiController.php';

class Cont_Login extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('login_model'));
    }	
	
	public function get_list_logindepartmen_get($EmployeeNumber)
	{
		
		$listhasil = $this->login_model->list_logindepartmen($EmployeeNumber);
		$this->response( $listhasil, 200 );
	}
	
	// ambil data untuk data user
	public function get_list_loginTPS_get($EmployeeNumber)
	{
		$listhasil = $this->login_model->list_loginTPS($EmployeeNumber);
		$this->response( $listhasil, 200 );
	}
	
	public function get_login_database_get($EmployeeNumber,$TPScode=null,$DepartmenCode=null)
	{
		$listhasil = $this->login_model->login_database($EmployeeNumber,$TPScode,$DepartmenCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_login_password_get($userID)
	{
		$listhasil = $this->login_model->login_password($userID);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_login_user_get($fieldname,$EmployeeContent)
	{
		$listhasil = $this->login_model->login_user($fieldname,$EmployeeContent);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_login_username_get($EmployeeName=null)
	{
		$listhasil = $this->login_model->login_username($EmployeeName);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_login_permission_get($EmployeeName=null,$databaseName=null,$JenisGudang=null)
	{
		$listhasil = $this->login_model->login_permission($EmployeeName,$databaseName,$JenisGudang);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_datetime_Server_get()
	{
		$listhasil = $this->login_model->datetime_Server();
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}


}