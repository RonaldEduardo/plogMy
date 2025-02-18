<?php

namespace Src\pages\api\v1;

class Error404Controller
{
    public function request(){
        echo json_encode([
            'status' => 'error'
        ]);
    }
}
