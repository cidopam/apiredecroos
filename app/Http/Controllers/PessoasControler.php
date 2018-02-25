<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoasControler extends Controller
{
    public function index(){
        return response(Pessoa::all(), 200);
    }

    public function show($id){
        if ($pessoa = Pessoa::find($id)){
            return response($pessoa,200);
        } else{
            return response([],404);
        }
        
    }
}
