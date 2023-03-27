<?php
/**
 * Author: https://github.com/davinder17s
 * Email: davinder17s@gmail.com
 * Repository: https://github.com/davinder17s/codeigniter-middleware
 */

class ApiMiddleware {
    protected $controller;
    protected $ci;
    public $roles = array();
    public function __construct($controller, $ci)
    {
        $this->controller = $controller;
        $this->ci = $ci;
    }

    public function run(){
        $header = $this->ci->input->request_headers();
        if (isset($header['Authorization'])) {
            // $this->roles = array('somehting', 'view', 'edit');
            header('Content-Type: application/json');
            header('Status: 200');
            header('HTTP/1.1: 200');
            // echo json_encode($header);
        }else{
            header('Content-Type: application/json');
            header('Status: 500');
            header('HTTP/1.1: 500');
            echo json_encode(['message'=>'Authorization needed']);
            exit();
        }
        
    }
}