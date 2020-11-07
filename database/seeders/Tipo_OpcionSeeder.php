<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipo_OpcionSeeder extends Seeder
{

	public $data=['Menu','SubMenu'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $tipo) {
        DB::table('tipo_opcions')->insert([
        	'descripcion'=>$tipo
        ]);
        }
    }
}
