<?php

namespace App\Controllers;

class MessageController extends BaseController
{
    public function index()
    {
        $data = 'ok';
        $this->respond($data, 200);
    }
}
