<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class StudentsController {

    public function getAll(Request $req, Response $resp, $params){
        $resp->getBody()->write("chegou na controller");
    }

}