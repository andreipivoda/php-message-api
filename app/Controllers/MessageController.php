<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class MessageController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $obj = (object) null;
        $obj->test = "ok";

        return $this->respond($obj, 200);
        log_message('info', 'function ok');
    }
}
