<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH.'/controllers/ApiController.php';

class Imp_masterwaybill extends ApiController {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('rdwarehouse_jkt', TRUE);
	}
	
	function index_get() {
        $MasterAWB = $this->get('MasterAWB');
        if ($MasterAWB == '') {
			$data = $this->db->get('imp_masterwaybill')->result();            
        } else {
            $this->db->where('MasterAWB', $MasterAWB);
            $data = $this->db->get('imp_masterwaybill')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$MasterAWB = $this->put('MasterAWB');
        $data = array(	
					'Pieces'			=> $this->put('Pieces'),
					'Weight'			=> $this->put('Weight'),
					'Volume'			=> $this->put('Volume'),
					'AirlinesCode'		=> $this->put('AirlinesCode'),
					'FlightNo'			=> $this->put('FlightNo'),
					'Origin'			=> $this->put('Origin'),
					'Destination'		=> $this->put('Destination'),
					'DateOfFight'		=> $this->put('DateOfFight'),
					'KindOfGood'		=> $this->put('KindOfGood'),
					'KindOfCode'		=> $this->put('KindOfCode'),
					'HSCode'			=> $this->put('HSCode'),
					'AgenCode'			=> $this->put('AgenCode'),
					'ShipperCode'		=> $this->put('ShipperCode'),
					'ConsigneeCode'		=> $this->put('ConsigneeCode'),					
					'bc11'				=> $this->put('bc11'),
					'tglbc11'			=> $this->put('tglbc11'),
					'nopos'				=> $this->put('nopos'),					
					'Multihost'			=> $this->put('Multihost'),
					'Parsial'			=> $this->put('Parsial'),
					'DateOfOut'			=> $this->put('DateOfOut'),
					'TimeOut'			=> $this->put('TimeOut'),
					'DateOfIn'			=> $this->put('DateOfIn'),
					'TimeIn'			=> $this->put('TimeIn'),					
					'token'				=> $this->put('token'),
					'MasterAWB'			=> $this->put('MasterAWB')
					);
		$this->db->where('MasterAWB', $MasterAWB);
        $update = $this->db->update('imp_masterwaybill', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MasterAWB'			=> $this->post('MasterAWB'),
					'Pieces'			=> $this->post('Pieces'),
					'Weight'			=> $this->post('Weight'),
					'Volume'			=> $this->post('Volume'),
					'AirlinesCode'		=> $this->post('AirlinesCode'),
					'FlightNo'			=> $this->post('FlightNo'),
					'Origin'			=> $this->post('Origin'),
					'Destination'		=> $this->post('Destination'),
					'DateOfFight'		=> $this->post('DateOfFight'),
					'KindOfGood'		=> $this->post('KindOfGood'),
					'KindOfCode'		=> $this->post('KindOfCode'),
					'HSCode'			=> $this->post('HSCode'),
					'AgenCode'			=> $this->post('AgenCode'),
					'ShipperCode'		=> $this->post('ShipperCode'),
					'ConsigneeCode'		=> $this->post('ConsigneeCode'),
					'bc11'				=> $this->post('bc11'),
					'tglbc11'			=> $this->post('tglbc11'),
					'nopos'				=> $this->post('nopos'),		
					'Multihost'			=> $this->post('Multihost'),
					'Parsial'			=> $this->post('Parsial'),
					'DateOfOut'			=> $this->post('DateOfOut'),
					'TimeOut'			=> $this->post('TimeOut'),
					'DateOfIn'			=> $this->post('DateOfIn'),
					'TimeIn'			=> $this->post('TimeIn'),					
					'token'				=> $this->post('token')
					);
					
		 $insert = $this->db->insert('imp_masterwaybill', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}