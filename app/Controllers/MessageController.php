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


        $email = \Config\Services::email();

        $email->setFrom('contact@andreipivoda.ro', 'Web Message');
        $email->setTo('contact@andreipivoda.ro');

        $email->setSubject('Web Message');
        $email->setMessage(json_encode($obj->message));

        $email->send();


        log_message('info', json_encode($obj));
        return $this->respond($obj, 200);
    }
}
