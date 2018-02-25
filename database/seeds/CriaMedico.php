<?php

use Illuminate\Database\Seeder;

class CriaMedico extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       App\Medico::create([
           'name'=>'cido',
           'crm'=>'1234',
           'password'=>bcrypt('1234'),
           'email'=>'aparecidof@drpam.com.br',
           'tel'=>'1234',
           'cel'=>'1234',
       ]);
    }
}
