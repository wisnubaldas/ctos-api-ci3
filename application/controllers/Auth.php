<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Auth extends RestController
{
    /**
     * URL: http://localhost/CodeIgniter-JWT-Sample/authtimeout/token
     * Method: GET
     */
    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('rdlogin', TRUE);
    }
    public function token_get()
    {
        $r = json_decode($this->input->raw_input_stream);
        if(isset($r->name) && isset($r->password)){
            $q = $this->db->from('loginpassword')->where('userID', $r->name)->get();
            if($q->num_rows()){
                $tokenData = array();
                $tokenData['id'] = 1; //TODO: Replace with data for token
                $tokenData['timestamp'] = now();
                $output['token'] = AUTHORIZATION::generateToken($tokenData);
                $this->set_response($output, 200);
            }else{
                $this->set_response(['message'=>'No user in database'], 200);
            }
        }else{
            $this->set_response(['message'=>'Unauthorised'], 401);
        }
    }

    /**
     * URL: http://localhost/CodeIgniter-JWT-Sample/authtimeout/token
     * Method: POST
     * Header Key: Authorization
     * Value: Auth token generated in GET call
     */
    public function token_post()
    {
        $headers = $this->input->request_headers();

        if (array_key_exists('Authorization', $headers) && !empty($headers['Authorization'])) {
            //TODO: Change 'token_timeout' in application\config\jwt.php
            $decodedToken = AUTHORIZATION::validateTimestamp($headers['Authorization']);

            // return response if token is valid
            if ($decodedToken != false) {
                // $this->set_response($decodedToken, 200);
                return;
            }
        }

        $this->set_response("Unauthorised", 401);
    }
}
