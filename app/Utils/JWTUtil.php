<?php

namespace App\Utils;

use App\Medico;
use Firebase\JWT\JWT;
use Exception;

class JWTUtil {
    public static function generate(Medico $medico) {
        return JWT::encode($medico, 'cec6efae-9472-421f-a0f5-a385d8b183a9');
    }

    public static function validate($token) {
        try {
            return JWT::decode($token, 'cec6efae-9472-421f-a0f5-a385d8b183a9', ["HS256"]);
        } catch (Exception $e) {
            return false;
        }
    }
}