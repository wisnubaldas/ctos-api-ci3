<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class ApiController extends MY_Controller
{
    function __construct()
    {
        parent::__construct();		
    }	
    
    protected function middleware()
    {
        return array('api');
    }
}
