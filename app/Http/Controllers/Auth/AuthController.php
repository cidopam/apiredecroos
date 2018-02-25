<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Utils\JWTUtil;
use App\Medico;

class AuthController extends Controller
{
    public function login(Request $request) {
        $medico = Medico::findByCrm($request->login);

        if (!$medico) {
            return response('Nenhum médico encontrado', 404);
        }

        if (!Hash::check($request->password, $medico->password)) {
            return response('Senha inválida', 401);
        }
        
        $response = ['token' => JWTUtil::generate($medico)];

        return response($response, 200);
    }
}
