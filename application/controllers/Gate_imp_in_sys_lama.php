<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH.'/controllers/ApiController.php';

class Gate_imp_in_sys_lama extends ApiController {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db4 = $this->load->database('db_tpsonline', TRUE);
	}
	
	function index_get() {
        $id_kms = $this->get('id_kms');
        if ($id_kms == '') {
			$data = $this->db4->get('get_imp_in_sys_lama')->result();            
        } else {
            $this->db4->where('id_kms', $id_kms);
            $data = $this->db4->get('get_imp_in_sys_lama')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id_kms = $this->put('id_kms');
        $data = array(		
					'kd_dok'				=> $this->put('kd_dok'),
					'kd_tps'				=> $this->put('kd_tps'),
					'nm_angkut'				=> $this->put('nm_angkut'),
					'no_voy_flight'			=> $this->put('no_voy_flight'),
					'call_sign'				=> $this->put('call_sign'),
					'tg_tiba'				=> $this->put('tg_tiba'),
					'kd_gudang'				=> $this->put('kd_gudang'),
					'ref_num'				=> $this->put('ref_num'),
					'no_bl_awb'				=> $this->put('no_bl_awb'),
					'tgl_bl_awb'			=> $this->put('tgl_bl_awb'),
					'no_master_bl_awb'		=> $this->put('no_master_bl_awb'),
					'tgl_master_bl_awb'		=> $this->put('tgl_master_bl_awb'),
					'id_consignee'			=> $this->put('id_consignee'),
					'consignee'				=> $this->put('consignee'),
					'bruto'					=> $this->put('bruto'),
					'no_bc11'				=> $this->put('no_bc11'),
					'tgl_bc11'				=> $this->put('tgl_bc11'),
					'no_pos_bc11'			=> $this->put('no_pos_bc11'),
					'cont_asal'				=> $this->put('cont_asal'),
					'seri_kem'				=> $this->put('seri_kem'),
					'kd_kem'				=> $this->put('kd_kem'),
					'jml_kem'				=> $this->put('jml_kem'),
					'kd_timbun'				=> $this->put('kd_timbun'),
					'kd_dok_inout'			=> $this->put('kd_dok_inout'),
					'no_dok_inout'			=> $this->put('no_dok_inout'),
					'tgl_dok_inout'			=> $this->put('tgl_dok_inout'),
					'wk_inout'				=> $this->put('wk_inout'),
					'kd_sar_angkut'			=> $this->put('kd_sar_angkut'),
					'no_pol'				=> $this->put('no_pol'),
					'pel_muat'				=> $this->put('pel_muat'),
					'pel_transit'			=> $this->put('pel_transit'),
					'pel_bongkar'			=> $this->put('pel_bongkar'),
					'gudang_tujuan'			=> $this->put('gudang_tujuan'),
					'kode_kantor'			=> $this->put('kode_kantor'),
					'no_daftar_pabean'		=> $this->put('no_daftar_pabean'),
					'tgl_daftar_pabean'		=> $this->put('tgl_daftar_pabean'),
					'no_segel_bc'			=> $this->put('no_segel_bc'),
					'tg_segel_bc'			=> $this->put('tg_segel_bc'),
					'no_ijin_tps'			=> $this->put('no_ijin_tps'),
					'tgl_ijin_tps'			=> $this->put('tgl_ijin_tps'),
					'flag_transfer'			=> $this->put('flag_transfer'),
					'token'					=> $this->put('token'),
					'id_kms' 				=> $this->put('id_kms')
					);
					
		$this->db4->where('id_kms', $id_kms);
        $update = $this->db4->update('get_imp_in_sys_lama', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'kd_dok'				=> $this->post('kd_dok'),
					'kd_tps'				=> $this->post('kd_tps'),
					'nm_angkut'				=> $this->post('nm_angkut'),
					'no_voy_flight'			=> $this->post('no_voy_flight'),
					'call_sign'				=> $this->post('call_sign'),
					'tg_tiba'				=> $this->post('tg_tiba'),
					'kd_gudang'				=> $this->post('kd_gudang'),
					'ref_num'				=> $this->post('ref_num'),
					'no_bl_awb'				=> $this->post('no_bl_awb'),
					'tgl_bl_awb'			=> $this->post('tgl_bl_awb'),
					'no_master_bl_awb'		=> $this->post('no_master_bl_awb'),
					'tgl_master_bl_awb'		=> $this->post('tgl_master_bl_awb'),
					'id_consignee'			=> $this->post('id_consignee'),
					'consignee'				=> $this->post('consignee'),
					'bruto'					=> $this->post('bruto'),
					'no_bc11'				=> $this->post('no_bc11'),
					'tgl_bc11'				=> $this->post('tgl_bc11'),
					'no_pos_bc11'			=> $this->post('no_pos_bc11'),
					'cont_asal'				=> $this->post('cont_asal'),
					'seri_kem'				=> $this->post('seri_kem'),
					'kd_kem'				=> $this->post('kd_kem'),
					'jml_kem'				=> $this->post('jml_kem'),
					'kd_timbun'				=> $this->post('kd_timbun'),
					'kd_dok_inout'			=> $this->post('kd_dok_inout'),
					'no_dok_inout'			=> $this->post('no_dok_inout'),
					'tgl_dok_inout'			=> $this->post('tgl_dok_inout'),
					'wk_inout'				=> $this->post('wk_inout'),
					'kd_sar_angkut'			=> $this->post('kd_sar_angkut'),
					'no_pol'				=> $this->post('no_pol'),
					'pel_muat'				=> $this->post('pel_muat'),
					'pel_transit'			=> $this->post('pel_transit'),
					'pel_bongkar'			=> $this->post('pel_bongkar'),
					'gudang_tujuan'			=> $this->post('gudang_tujuan'),
					'kode_kantor'			=> $this->post('kode_kantor'),
					'no_daftar_pabean'		=> $this->post('no_daftar_pabean'),
					'tgl_daftar_pabean'		=> $this->post('tgl_daftar_pabean'),
					'no_segel_bc'			=> $this->post('no_segel_bc'),
					'tg_segel_bc'			=> $this->post('tg_segel_bc'),
					'no_ijin_tps'			=> $this->post('no_ijin_tps'),
					'tgl_ijin_tps'			=> $this->post('tgl_ijin_tps'),
					'flag_transfer'			=> $this->post('flag_transfer'),
					'token'					=> $this->post('token')
					);
					
		 $insert = $this->db4->insert('get_imp_in_sys_lama', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}