<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;

class MedicosController extends Controller
{
    public function index(){
        return response(Medico::all(), 200);
    }

    public function show($id){
        if ($medicos = Medico::find($id)){
            return response($medicos,200);
        } else{
            return response([],404);
        }
        
    }
}
