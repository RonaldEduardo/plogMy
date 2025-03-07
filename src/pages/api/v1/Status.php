<?php

namespace Src\pages\api\v1;

use Infra\Database;

class Status
{
    public function __construct()
    {
        // code...
    }

    public function request()
    {
        $Database = new Database();
        $respostaBanco = $Database->getConnection();

        echo json_encode([
            'status' => 'OK',
            'status banco' => $respostaBanco ? 'OK' : 'Erro',
        ]);
    }
}
