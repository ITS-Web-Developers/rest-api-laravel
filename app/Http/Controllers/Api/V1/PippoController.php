<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;

class PippoController extends ApiController
{
    public function index()
    {
        return json_encode([
            'altezza' => '180cm',
            'eta' => 30
        ]);
    }

    public function index2()
    {
        return json_encode([
            'altezza' => '183cm',
            'eta' => 35
        ]);
    }
}