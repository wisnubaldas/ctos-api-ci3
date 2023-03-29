<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_Search extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('search_model'));
    }	


	public function get_cari_import_mawb_get($MasterAWB)
	{
		$listhasil = $this->search_model->cari_import_mawb($MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_cari_import_hawb_get($MasterAWB,$HostAWB=null)
	{
		$listhasil = $this->search_model->cari_import_hawb($MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_cari_ekspor_mawb_get($MasterAWB=null)
	{
		$listhasil = $this->search_model->cari_ekspor_mawb($MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}

	public function get_cari_ekspor_hawb_get($MasterAWB=null,$HostAWB=null)
	{
		$listhasil = $this->search_model->cari_ekspor_hawb($MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}

	public function get_cari_import_delivery_get($MasterAWB,$HostAWB=null)
	{
		$listhasil = $this->search_model->cari_import_delivery($MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_cari_import_invoice_get($MasterAWB,$HostAWB=null)
	{
		$listhasil = $this->search_model->cari_import_invoice($MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_cari_import_pod_get($MasterAWB,$HostAWB=null)
	{
		$listhasil = $this->search_model->cari_import_pod($MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	public function get_cari_import_SO_get($hawb)
	{
		$listhasil = $this->search_model->cari_import_SO($hawb);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_cari_eks_hawb_get($HostAWB=null)
	{
		$listhasil = $this->search_model->cari_eks_hawb($HostAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_cari_imp_hawb_get($HostAWB=null)
	{
		$listhasil = $this->search_model->cari_imp_hawb($HostAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_cari_ekspor_weighing_get($MasterAWB,$HostAWB=null)
	{
		$listhasil = $this->search_model->cari_ekspor_weighing($MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_cari_ekspor_invoice_get($MasterAWB,$ProofNumber=null)
	{
		$listhasil = $this->search_model->cari_ekspor_invoice($MasterAWB,$ProofNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_cari_ekspor_buildup_get($MasterAWB)
	{
		$listhasil = $this->search_model->cari_ekspor_buildup($MasterAWB);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
}