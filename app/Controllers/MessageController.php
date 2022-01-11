<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\RequestInterface;

class MessageController extends BaseController
{
    use ResponseTrait;

    

    public function index($arg)
    {
        $obj = (object) null;
        $obj->function = $arg;
        $obj->message = file_get_contents("php://input");



        log_message('info', json_encode($obj));
        return $this->respond($obj, 200);
    }
}
