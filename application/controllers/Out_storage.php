<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH.'/controllers/ApiController.php';

class Out_storage extends ApiController {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('rdwarehouse_jkt', TRUE);
	}
	
	function index_get() {
        $noid = $this->get('noid');
        if ($noid == '') {
			$data = $this->db->get('out_storage')->result();            
        } else {
            $this->db->where('noid', $noid);
            $data = $this->db->get('out_storage')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$noid = $this->put('noid');
        $data = array(	
					'StorageNumber'		=> $this->put('StorageNumber'),
					'MasterAWB'			=> $this->put('MasterAWB'),
					'DestinationCode'	=> $this->put('DestinationCode'),
					'FlightNumber'		=> $this->put('FlightNumber'),
					'DateOfFlight'		=> $this->put('DateOfFlight'),
					'AirlinesCode'		=> $this->put('AirlinesCode'),
					'PartOfPieces'		=> $this->put('PartOfPieces'),
					'Pieces'			=> $this->put('Pieces'),
					'PartOfNetto'		=> $this->put('PartOfNetto'),
					'Netto'				=> $this->put('Netto'),
					'Volume'			=> $this->put('Volume'),
					'Location'			=> $this->put('Location'),
					'KindOfGood'		=> $this->put('KindOfGood'),
					'Delivery'			=> $this->put('Delivery'),
					'Remarks'			=> $this->put('Remarks'),
					'token'				=> $this->put('token'),
					'noid'				=> $this->put('noid')
					);
		$this->db->where('noid', $noid);
        $update = $this->db->update('out_storage', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'StorageNumber'		=> $this->post('StorageNumber'),
					'MasterAWB'			=> $this->post('MasterAWB'),
					'DestinationCode'	=> $this->post('DestinationCode'),
					'FlightNumber'		=> $this->post('FlightNumber'),
					'DateOfFlight'		=> $this->post('DateOfFlight'),
					'AirlinesCode'		=> $this->post('AirlinesCode'),
					'PartOfPieces'		=> $this->post('PartOfPieces'),
					'Pieces'			=> $this->post('Pieces'),
					'PartOfNetto'		=> $this->post('PartOfNetto'),
					'Netto'				=> $this->post('Netto'),
					'Volume'			=> $this->post('Volume'),
					'Location'			=> $this->post('Location'),
					'KindOfGood'		=> $this->post('KindOfGood'),
					'Delivery'			=> $this->post('Delivery'),
					'Remarks'			=> $this->post('Remarks'),
					'token'				=> $this->post('token')
					);
					
		 $insert = $this->db->insert('out_storage', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}