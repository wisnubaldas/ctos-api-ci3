<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Auth extends RestController
{
    /**
     * URL: http://localhost/CodeIgniter-JWT-Sample/authtimeout/token
     * Method: GET
     */
    public function token_get()
    {
        $tokenData = array();
        $tokenData['id'] = 1; //TODO: Replace with data for token

        /* Date helper
        * https://www.codeigniter.com/user_guide/helpers/date_helper.html
        * Added helper "date" in application\config\autoload.php line 92
        * Notice - 'timestamp' is part of $tokenData
        */
        $tokenData['timestamp'] = now();

        $output['token'] = AUTHORIZATION::generateToken($tokenData);
        $this->set_response($output, 200);
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
