<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include APPPATH.'/controllers/ApiController.php';

class Cont_Whmaster extends ApiController 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('Whmaster_model'));
    }	
	
	public function get_list_airport_get($AirportCode=null)
	{
		$listhasil = $this->Whmaster_model->list_airport($AirportCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_tools_file_transfer_get($WarehouseCode)
	{
		$listhasil = $this->Whmaster_model->tools_file_transfer($WarehouseCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_shift_get($ShiftName=null)
	{
		$listhasil = $this->Whmaster_model->list_shift($ShiftName);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_mst_airlines_get($namafield,$isifield)
	{
		$listhasil = $this->Whmaster_model->mst_airlines($namafield,$isifield);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
		
	}
	
	public function get_daftar_airlines_get($WHcode,$TwoLetterCode=null)
	{
		$listhasil = $this->Whmaster_model->daftar_airlines($WHcode,$TwoLetterCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
		
	}
	
	public function get_list_airlines_get($WHcode=null,$TwoLetterCode=null,$flagshipmentType=null)
	{
		$listhasil = $this->Whmaster_model->list_airlines($WHcode,$TwoLetterCode,$flagshipmentType);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_warehouse_get($kd_Gudang=null)
	{
		$listhasil = $this->Whmaster_model->list_warehouse($kd_Gudang);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
	public function get_type_warehouse_get($WarehouseCode=null)
	{
		$listhasil = $this->Whmaster_model->type_warehouse($WarehouseCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
	public function get_list_WhOperator_get($WHOperatorCode=null)
	{
		$listhasil = $this->Whmaster_model->list_WhOperator($WHOperatorCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
	public function get_list_natureofgood_get($nat_code=null)
	{
		$listhasil = $this->Whmaster_model->list_natureofgood($nat_code);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_natureofgood_name_get($nat_description=null)
	{
		$listhasil = $this->Whmaster_model->list_natureofgood_name($nat_description);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_location_get($WarehouseCode=null,$LocationCode=null)
	{
		$listhasil = $this->Whmaster_model->list_location($WarehouseCode,$LocationCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
	public function get_list_route_get($WarehouseCode=null,$TwoLetterCode=null,$Route=null)
	{
		$listhasil = $this->Whmaster_model->list_route($WarehouseCode,$TwoLetterCode,$Route);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_flight_get($WarehouseCode,$TwoLetterCode,$Route,$FlightNumber=null)
	{
		$listhasil = $this->Whmaster_model->list_flight($WarehouseCode,$TwoLetterCode,$Route,$FlightNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_mst_route_get($WarehouseCode,$FlightNumber=null)
	{
		$listhasil = $this->Whmaster_model->mst_route($WarehouseCode,$FlightNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_country_get($CountryCode=null)
	{
		$listhasil = $this->Whmaster_model->list_country($CountryCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_harmonized_get($HSCode=null)
	{
		$listhasil = $this->Whmaster_model->list_harmonized($HSCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list2_CountryCode_get($PlaceName=null)
	{
		$listhasil = $this->Whmaster_model->list2_CountryCode($PlaceName);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );	
	}
	
	public function get_list_CountryCode_get($PlaceCode=null)
	{
		$listhasil = $this->Whmaster_model->list_CountryCode($PlaceCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
	public function get_list_customer_get($CustomerCode=null)
	{
		$listhasil = $this->Whmaster_model->list_customer($CustomerCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_gse_get($EquipmentCode=null)
	{
		$listhasil = $this->Whmaster_model->list_gse($EquipmentCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_arrival_get($AirlinesCode=null,$FlightNo=null)
	{
		$listhasil = $this->Whmaster_model->list_arrival($AirlinesCode,$FlightNo);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_departure_get($AirlinesCode=null,$FlightNo=null)
	{
		$listhasil = $this->Whmaster_model->list_departure($AirlinesCode,$FlightNo);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_customer_by_name_get($CompanyName=null)
	{
		$listhasil = $this->Whmaster_model->list_customer_by_name($CompanyName);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
	public function get_list_discrepancy_get($DiscrepancyCode=null)
	{
		$listhasil = $this->Whmaster_model->list_discrepancy($DiscrepancyCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	
	public function get_list_number_get($DescriptionCode)
	{
		$listhasil = $this->Whmaster_model->list_number($DescriptionCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
		
	}
	
	public function get_update_list_number_get($DescriptionCode,$QueveNumber)
	{
		$listhasil = $this->Whmaster_model->update_list_number($DescriptionCode,$QueveNumber);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_kd_dok_inout_get($keterangan=null)
	{
		$listhasil = $this->Whmaster_model->list_kd_dok_inout($keterangan);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}

	public function get_kodegudang_get($databaseCode,$warehouseCode)
	{
		$listhasil = $this->Whmaster_model->kodegudang($databaseCode,$warehouseCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_m_beacukai_get($kd_KBPC=null)
	{
		$listhasil = $this->Whmaster_model->m_beacukai($kd_KBPC);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_m_airlines_get($airlinescode=null)
	{
		$listhasil = $this->Whmaster_model->m_airlines($airlinescode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_m_airlines_bytps_get($kd_tps=null)
	{
		$listhasil = $this->Whmaster_model->m_airlines_bytps($kd_tps);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_m_kemasan_get($kd_kemasan=null)
	{
		$listhasil = $this->Whmaster_model->m_kemasan($kd_kemasan);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_m_tps_get($kd_kbpc=null)
	{
		$listhasil = $this->Whmaster_model->m_tps($kd_kbpc);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_m_gudang_get($kd_tps,$kd_gudang=null)
	{
		$listhasil = $this->Whmaster_model->m_gudang($kd_tps,$kd_gudang);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_mst_flight_get($TwoLetterCode=null)
	{
		$listhasil = $this->Whmaster_model->mst_flight($TwoLetterCode);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_master_alasan_get()
	{
		$listhasil = $this->Whmaster_model->master_alasan();
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_list_tpsnumber_get($remarknum)
	{
		$listhasil = $this->Whmaster_model->list_tpsnumber($remarknum);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	public function test($EmployeeNumber)
	{
		echo 'hello';
	}
	public function get_list_tokenname_get($databaseCode,$DepartmenCode)
	{
		$listhasil = $this->Whmaster_model->list_tokenname($databaseCode,$DepartmenCode);
		// menjadikan objek menjadi JSON
		$$this->response( $listhasil, 200 );
	}
	
	public function get_service_get($noid=null)
	{
		$listhasil = $this->Whmaster_model->service($noid);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_subservice_get($id_service,$noid=null)
	{
		$listhasil = $this->Whmaster_model->subservice($id_service,$noid);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_invoiceAdditional_get($token,$HAWB,$type_inv)
	{
		$listhasil = $this->Whmaster_model->invoiceAdditional($token,$HAWB,$type_inv);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
	}
	
	public function get_report_invoiceAdditional_get($token,$WarehouseCode,$datefrom,$dateuntil)
	{
		$listhasil = $this->Whmaster_model->report_invoiceAdditional($token,$WarehouseCode,$datefrom,$dateuntil);
		// menjadikan objek menjadi JSON
		$this->response( $listhasil, 200 );
		
	}
}