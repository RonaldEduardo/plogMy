<?php

namespace Src\pages\api\v1;

class Status
{
    public function __construct()
    {
        // code...
    }

    public function request()
    {
        echo json_encode([
            'status' => 'OK'
        ]);
    }
}
