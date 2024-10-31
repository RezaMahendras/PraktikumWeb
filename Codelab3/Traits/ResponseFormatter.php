<?php

namespace traits;
trait ResponseFormatter
{
    public function responseFormatter($code, $message, $data = null){
        return json_encode([
            "Code" => $code,
            "message" => $message,
            "data" => $data
        ]);
    }
    
}
