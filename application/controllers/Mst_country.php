<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH.'/controllers/ApiController.php';

class Mst_country extends ApiController {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('rdwarehouse_jkt', TRUE);
	}
	
	function index_get() {
        $noid = $this->get('noid');
        if ($noid == '') {
			$data = $this->db->get('mst_country')->result();            
        } else {
            $this->db->where('noid', $noid);
            $data = $this->db->get('mst_country')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$noid = $this->put('noid');
        $data = array(	
					'CountryCode'		=> $this->put('CountryCode'),
					'CountryName'		=> $this->put('CountryName'),
					'noid'				=> $this->put('noid')
					);
		$this->db->where('noid', $noid);
        $update = $this->db->update('mst_country', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'CountryCode'		=> $this->post('CountryCode'),
					'CountryName'		=> $this->post('CountryName')
					);
					
		 $insert = $this->db->insert('mst_country', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}