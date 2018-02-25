<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Exception;

class Medico extends Model
{
    protected $fillable=["id",'name','password','email','crm','tel','cel'];
    protected $table='medicos';
    protected $hidden=['password'];

    public static function findByCrm($crm) {
        $medico = static::where('crm', $crm)->first();

        return $medico;
    }
}
